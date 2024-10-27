<?php

declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\Exception\RecordNotFoundException;
use Authorization\Exception\ForbiddenException;

/**
 * Marks Controller
 *
 * @property \App\Model\Table\MarksTable $Marks
 * @method \App\Model\Entity\Mark[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarksController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // Load the Results table
        $this->Results = $this->fetchTable('Results');
        $this->AcademicYears = $this->fetchTable('AcademicYears');
        $this->Excellence = $this->fetchTable('Excellence');
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {

        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('uhome');

        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'marksheet', 'rform']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();

        $query = $this->Marks->find()
            ->contain(['Students']);
        $marks = $this->paginate($query);

        $this->set(compact('marks'));
    }

    /**
     * View method
     *
     * @param string|null $id Mark id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();

        $mark = $this->Marks->get($id, contain: ['Students']);

        $this->set(compact('mark'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */


    public function add()
{
    ob_start(); // Start output buffering
    $mark = $this->Marks->newEmptyEntity();
    $this->Authorization->authorize($mark);

    if ($this->request->is('post')) {
        $data = $this->request->getData(); // Retrieve request data

        // Check if the record already exists
        $existingMark = $this->Marks->find('all', [
            'conditions' => [
                'student_id' => $data['student_id'],
                'academic_year' => $data['academic_year'],
                'class' => $data['class'], // Add class or other relevant fields here if needed
            ]
        ])->first();

        if ($existingMark) {
            // If record exists, show flash message
            $this->Flash->error(__('Duplicate entry detected for student, year, and class.'));
            return $this->redirect(['action' => 'add']);
        }

        $mark = $this->Marks->patchEntity($mark, $data);

        // Calculate Term 1 Total for each subject
        for ($i = 1; $i <= 9; $i++) {
            $subjectKey = "term1_subject_$i";
            $ctKey = "term1_subject_{$i}_ct";
            $periodicTestKey = "term1_subject_{$i}_periodic_test";
            $subjectEnrichmentKey = "term1_subject_{$i}_subject_enrichment";
            $multipleAssessmentKey = "term1_subject_{$i}_multiple_assessment";
            $portfolioKey = "term1_subject_{$i}_portfolio";

            if (
                isset($mark->$subjectKey) && isset($mark->$ctKey) && isset($mark->$periodicTestKey) &&
                isset($mark->$subjectEnrichmentKey) && isset($mark->$multipleAssessmentKey) &&
                isset($mark->$portfolioKey)
            ) {
                $totalKey = "term1_subject_{$i}_total"; // Define the total key
                $mark->$totalKey = $mark->$subjectKey + $mark->$ctKey + $mark->$periodicTestKey +
                    $mark->$subjectEnrichmentKey + $mark->$multipleAssessmentKey +
                    $mark->$portfolioKey; // Calculate total
            }
        }

        // Calculate Term 1 Total
        $term1Total = 0;
        for ($i = 1; $i <= 9; $i++) {
            $totalKey = "term1_subject_{$i}_total"; // Get the total key
            if (isset($mark->$totalKey)) {
                $term1Total += $mark->$totalKey; // Add to total
            }
        }
        $mark->term1_total = $term1Total;

        // Calculate Term 2 Total for each subject
        for ($i = 1; $i <= 9; $i++) {
            $subjectKey = "term2_subject_$i";
            $ctKey = "term2_subject_{$i}_ct";
            $periodicTestKey = "term2_subject_{$i}_periodic_test";
            $subjectEnrichmentKey = "term2_subject_{$i}_subject_enrichment";
            $multipleAssessmentKey = "term2_subject_{$i}_multiple_assessment";
            $portfolioKey = "term2_subject_{$i}_portfolio";

            if (
                isset($mark->$subjectKey) && isset($mark->$ctKey) && isset($mark->$periodicTestKey) &&
                isset($mark->$subjectEnrichmentKey) && isset($mark->$multipleAssessmentKey) &&
                isset($mark->$portfolioKey)
            ) {
                $totalKey = "term2_subject_{$i}_total"; // Define the total key
                $mark->$totalKey = $mark->$subjectKey + $mark->$ctKey + $mark->$periodicTestKey +
                    $mark->$subjectEnrichmentKey + $mark->$multipleAssessmentKey +
                    $mark->$portfolioKey; // Calculate total
            }
        }

        // Calculate Term 2 Total
        $term2Total = 0;
        for ($i = 1; $i <= 9; $i++) {
            $totalKey = "term2_subject_{$i}_total"; // Get the total key
            if (isset($mark->$totalKey)) {
                $term2Total += $mark->$totalKey; // Add to total
            }
        }
        $mark->term2_total = $term2Total;

        if ($this->Marks->save($mark)) {
            if (isset($mark->term1_total) && isset($mark->term2_total)) {
                $this->handleAcademicYearAndResults($mark); // Handle results logic
            } else {
                $this->Flash->error(__('Term totals are missing.'));
            }

            $this->Flash->success(__('The mark has been saved.'));
            return $this->redirect(['controller' => 'excellence', 'action' => 'add']);
        }
        $this->Flash->error(__('The mark could not be saved. Please, try again.'));
    }
    $students = $this->Marks->Students->find('list', ['limit' =>500])->all();
    $this->set(compact('mark', 'students'));

    ob_end_flush(); // Flush the output buffer and turn it off
}


    private function handleAcademicYearAndResults($mark)
    {
        $studentId = $mark->student_id;
        $academicYear = $mark->academic_year;

        // Compute totals
        $term1Total = $mark->term1_total; // Use the computed total for Term 1
        $term2Total = $mark->term2_total; // Use the computed total for Term 2

        if (
            !isset($term1Total) || !is_numeric($term1Total) ||
            !isset($term2Total) || !is_numeric($term2Total)
        ) {
            $this->Flash->error(__('Term totals are missing or invalid.'));
            return;
        }


        if (!$this->AcademicYears->exists(['student_id' => $studentId, 'academic_year' => $academicYear])) {
            $academicYearEntity = $this->AcademicYears->newEntity([
                'student_id' => $studentId,
                'academic_year' => $academicYear,
            ]);
            $this->AcademicYears->save($academicYearEntity);
        }



        $resultEntity = $this->Results->newEntity([
            'student_id' => $studentId,
            'academic_year' => $academicYear,
            'term1_total_marks' => $term1Total, // Total for Term 1
            'term2_total_marks' => $term2Total, // Total for Term 2
            'term1_percentage' => ($term1Total / 700) * 100, // Adjust denominator as needed
            'term2_percentage' => ($term2Total / 700) * 100, // Adjust denominator as needed
            'term1_grade' => $this->determineGrade(($term1Total / 700) * 100),
            'term2_grade' => $this->determineGrade(($term2Total / 700) * 100),
        ]);

        if (!$this->Results->save($resultEntity)) {
            debug($resultEntity->getErrors()); // Debugging save errors
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
    }


    // Private method to determine grades
    private function determineGrade($percent)
    {
        if ($percent >= 91) {
            return 'A1';
        } elseif ($percent >= 81) {
            return 'A2';
        } elseif ($percent >= 71) {
            return 'B1';
        } elseif ($percent >= 61) {
            return 'B2';
        } elseif ($percent >= 51) {
            return 'C1';
        } elseif ($percent >= 41) {
            return 'C2';
        } elseif ($percent >= 33) {
            return 'D';
        } else {
            return 'E';
        }
    }



    /**
     * Edit method
     *
     * @param string|null $id Mark id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($mark_id = null)
    {
        ob_start(); // Start output buffering
        $mark = $this->Marks->get($mark_id, contain: []);
        $this->Authorization->authorize($mark);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();
            // Check if a duplicate entry exists (excluding the current record being edited)
            $existingMark = $this->Marks->find(
                'all',
                [
                    'conditions' => [
                        'student_id' => $data['student_id'],
                        'academic_year' => $data['academic_year'],
                        'class' => $data['class'], // Add other relevant fields here
                        'mark_id !=' => $mark_id, // Exclude current record from the check
                    ]
                ]
            )->first();

            if ($existingMark) {
                $this->Flash->error(__('Duplicate entry detected for student, year, and class.'));
                return $this->redirect(['action' => 'edit', $mark_id]);
            }

            $mark = $this->Marks->patchEntity($mark, $data);

            // Calculate Term 1 Total for each subject
            for ($i = 1; $i <= 9; $i++) {
                $subjectKey = "term1_subject_$i";
                $ctKey = "term1_subject_{$i}_ct";
                $periodicTestKey = "term1_subject_{$i}_periodic_test";
                $subjectEnrichmentKey = "term1_subject_{$i}_subject_enrichment";
                $multipleAssessmentKey = "term1_subject_{$i}_multiple_assessment";
                $portfolioKey = "term1_subject_{$i}_portfolio";

                if (
                    isset($mark->$subjectKey) && isset($mark->$ctKey) && isset($mark->$periodicTestKey) &&
                    isset($mark->$subjectEnrichmentKey) && isset($mark->$multipleAssessmentKey) &&
                    isset($mark->$portfolioKey)
                ) {

                    $totalKey = "term1_subject_{$i}_total"; // Define the total key
                    $mark->$totalKey = $mark->$subjectKey + $mark->$ctKey + $mark->$periodicTestKey +
                        $mark->$subjectEnrichmentKey + $mark->$multipleAssessmentKey +
                        $mark->$portfolioKey; // Calculate total
                }
            }

            // Calculate Term 1 Total
            $term1Total = 0;
            for ($i = 1; $i <= 9; $i++) {
                $totalKey = "term1_subject_{$i}_total"; // Get the total key
                if (isset($mark->$totalKey)) {
                    $term1Total += $mark->$totalKey; // Add to total
                }
            }
            $mark->term1_total = $term1Total;

            // Calculate Term 2 Total for each subject
            for ($i = 1; $i <= 9; $i++) {
                $subjectKey = "term2_subject_$i";
                $ctKey = "term2_subject_{$i}_ct";
                $periodicTestKey = "term2_subject_{$i}_periodic_test";
                $subjectEnrichmentKey = "term2_subject_{$i}_subject_enrichment";
                $multipleAssessmentKey = "term2_subject_{$i}_multiple_assessment";
                $portfolioKey = "term2_subject_{$i}_portfolio";

                if (
                    isset($mark->$subjectKey) && isset($mark->$ctKey) && isset($mark->$periodicTestKey) &&
                    isset($mark->$subjectEnrichmentKey) && isset($mark->$multipleAssessmentKey) &&
                    isset($mark->$portfolioKey)
                ) {

                    $totalKey = "term2_subject_{$i}_total"; // Define the total key
                    $mark->$totalKey = $mark->$subjectKey + $mark->$ctKey + $mark->$periodicTestKey +
                        $mark->$subjectEnrichmentKey + $mark->$multipleAssessmentKey +
                        $mark->$portfolioKey; // Calculate total
                }
            }

            // Calculate Term 2 Total
            $term2Total = 0;
            for ($i = 1; $i <= 9; $i++) {
                $totalKey = "term2_subject_{$i}_total"; // Get the total key
                if (isset($mark->$totalKey)) {
                    $term2Total += $mark->$totalKey; // Add to total
                }
            }
            $mark->term2_total = $term2Total;

            if ($this->Marks->save($mark)) {
                $this->updateResultsTable($mark, $term1Total, $term2Total);
                // Fetch the excellence_id based on the student_id
                $studentId = $mark->student_id;
                $academicYear = $mark->academic_year; // Assuming academic year is part of the marks table


                // Find the excellence record associated with this student
                $excellence = $this->Excellence->find('all')
                    ->where(['student_id' => $studentId, 'academic_year' => $academicYear])
                    ->first();

                if ($excellence) {
                    $excellenceId = $excellence->id;

                    // Redirect to the Excellence edit page with excellence_id and student_id
                    return $this->redirect(['controller' => 'Excellence', 'action' => 'edit', $excellenceId, $studentId]);
                } else {
                    $this->Flash->error(__('No excellence record found for this student.'));
                }
            } else {
                $this->Flash->error(__('The marks could not be updated. Please, try again.'));
            }
        }
        $students = $this->Marks->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('mark', 'students'));

        ob_end_flush(); // Flush the output buffer and turn it off
    }
    private function updateResultsTable($mark, $term1Total, $term2Total)
    {
        $studentId = $mark->student_id;
        $academicYear = $mark->academic_year;


        // Check if a result already exists for this student and academic year
        $result = $this->Results->find('all', [
            'conditions' => [
                'student_id' => $studentId,
                'academic_year' => $academicYear
            ]
        ])->first();

        if ($result) {
            // Update existing result
            $result->term1_total_marks = $term1Total;
            $result->term2_total_marks = $term2Total;
            $result->term1_percentage = ($term1Total / 700) * 100; // Adjust denominator as needed
            $result->term2_percentage = ($term2Total / 700) * 100; // Adjust denominator as needed
            $result->term1_grade = $this->determineGrade(($term1Total / 700) * 100);
            $result->term2_grade = $this->determineGrade(($term2Total / 700) * 100);

            if (!$this->Results->save($result)) {
                debug($result->getErrors()); // Debugging save errors
                $this->Flash->error(__('The result could not be updated. Please, try again.'));
            }
        } else {
            // Optionally handle the case where no result exists
            $this->Flash->error(__('No result found to update.'));
        }
    }



    /**
     * Delete method
     *
     * @param string|null $id Mark id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {    
try{
    $this->request->allowMethod(['post', 'delete']);
    $mark = $this->Marks->get($id);
    $this->Authorization->authorize($mark);

    // Delete associated results and academic years
    $this->deleteAssociatedData($mark);
    

    if ($this->Marks->delete($mark)) {
        $this->Flash->success(__('The mark has been deleted.'));
    } else {
        $this->Flash->error(__('The mark could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);

} catch (ForbiddenException $e) {
    $this->Flash->error(__('You are not authorized to perform this action.'));
    return $this->redirect(['action' => 'index']);
} catch (RecordNotFoundException $e) {
    $this->Flash->error(__('The record could not be found.'));
    return $this->redirect(['action' => 'index']);
}

    }


    // Private method to delete associated data
    private function deleteAssociatedData($mark)
    {
        $studentId = $mark->student_id;
        $academicYear = $mark->academic_year;

        // Delete from results table
        $this->fetchTable('Results');
        $this->Results->deleteAll(['student_id' => $studentId, 'academic_year' => $academicYear]);

        // Delete from academic years table
        $this->fetchTable('AcademicYears');
        $this->AcademicYears->deleteAll(['student_id' => $studentId, 'academic_year' => $academicYear]);
    }
}
