<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Marks Controller
 *
 * @property \App\Model\Table\MarksTable $Marks
 * @method \App\Model\Entity\Mark[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarksController extends AppController
{
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
        $this->paginate = [
            'contain' => ['Students'],
        ];
        $marks = $this->paginate($this->Marks);

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
        $mark = $this->Marks->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('mark'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    // public function add()
    // {
    //     $mark = $this->Marks->newEmptyEntity();
    //     if ($this->request->is('post')) {
    // //         $mark = $this->Marks->patchEntity($mark, $this->request->getData());
    // //         debug($mark);

    // //         if ($this->Marks->save($mark)) {
    // //             // After saving, manage academic years and results
    // //             $this->handleAcademicYearAndResults($mark);
    // //             $this->Flash->success(__('The mark has been saved.'));

    // //             return $this->redirect(['action' => 'index']);
    // //         }
    // //         $this->Flash->error(__('The mark could not be saved. Please, try again.'));
    // //     }
    // //     $students = $this->Marks->Students->find('list', ['limit' => 200])->all();
    // //     $this->set(compact('mark', 'students'));
    // // }
    
    public function add()
{
    $mark = $this->Marks->newEmptyEntity();
    if ($this->request->is('post')) {
        $mark = $this->Marks->patchEntity($mark, $this->request->getData());

        
        // Compute total for term 1
        $term1Total = 0;
        for ($i = 1; $i <= 7; $i++) {  // Assuming you have 7 subjects
            $subjectKey = "term1_subject_{$i}_total";
            if (isset($mark->$subjectKey)) {
                $term1Total += $mark->$subjectKey;
            }
        }
        // Calculate Term 2 Total
        $term2Total = 0;
        for ($i = 1; $i <= 7; $i++) {
            $subjectKey = "term2_subject_{$i}_total"; // Change to term2_subject
            if (isset($mark->$subjectKey)) {
                $term2Total += $mark->$subjectKey;
            }
        }
        // Set the term1_total in the mark entity
        $mark->term1_total = $term1Total;
        $mark->term2_total = $term2Total; // Assign the total to term2_total


        if ($this->Marks->save($mark)) {
            // Ensure term1_total is passed to results
            if (isset($mark->term1_total) && isset($mark->term2_total)) {
                $this->handleAcademicYearAndResults($mark);
            } else {
                $this->Flash->error(__('Term total marks are missing.'));
            }

            $this->Flash->success(__('The mark has been saved.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The mark could not be saved. Please, try again.'));
    }
    $students = $this->Marks->Students->find('list', ['limit' => 200])->all();
    $this->set(compact('mark', 'students'));
}


    // Private method to handle academic year and results
    private function handleAcademicYearAndResults($mark)
    {
        $studentId = $mark->student_id;
        $academicYear = $mark->academic_year;
        // Ensure that term1_total is set before using it
    $term1Total = $mark->term1_total; // Use the computed total
    $term2Total = $mark->term2_total;
    if (!isset($term1Total) || !is_numeric($term1Total)||
    !isset($term2Total) || !is_numeric($term2Total)) {
        $this->Flash->error(__('Term total marks are missing or invalid.'));
        return;
    }

        // Insert into academic_years table if it doesn't exist
        $this->loadModel('AcademicYears');
        if (!$this->AcademicYears->exists(['student_id' => $studentId, 'academic_year' => $academicYear])) {
            $academicYearEntity = $this->AcademicYears->newEntity([
                'student_id' => $studentId,
                'academic_year' => $academicYear,
            ]);
            $this->AcademicYears->save($academicYearEntity);
        }

        // Insert into results table
        $this->loadModel('Results');
        $term1Total = $mark->term1_total;
        $term2Total = $mark->term2_total;

        $term1Percent = ($term1Total / 700) * 100; // Adjust denominator as needed
        $term2Percent = ($term2Total / 700) * 100;

        // Determine grades based on percentages
        $term1Grade = $this->determineGrade($term1Percent);
        $term2Grade = $this->determineGrade($term2Percent);

        $resultEntity = $this->Results->newEntity([
            'student_id' => $studentId,
            'academic_year' => $academicYear,
            'term1_total_marks' => $term1Total,
            'term1_percentage' => $term1Percent,
            'term1_grade' => $term1Grade,
            'term2_total_marks' => $term2Total,
            'term2_percentage' => $term2Percent,
            'term2_grade' => $term2Grade,
        ]);

    // Check for successful save
    if (!$this->Results->save($resultEntity)) {
        // Debugging save failure
        debug($resultEntity->getErrors());
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
    public function edit($id = null)
    {
        $mark = $this->Marks->get($id, [
            'contain' => [],
        ]);
    
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mark = $this->Marks->patchEntity($mark, $this->request->getData());
    
            // Calculate Term 1 Total
            $term1Total = 0;
            for ($i = 1; $i <= 7; $i++) {
                $subjectKey = "term1_subject_{$i}_total";
                if (isset($mark->$subjectKey)) {
                    $term1Total += $mark->$subjectKey;
                }
            }
            $mark->term1_total = $term1Total;
    
            // Calculate Term 2 Total
            $term2Total = 0;
            for ($i = 1; $i <= 7; $i++) {
                $subjectKey = "term2_subject_{$i}_total";
                if (isset($mark->$subjectKey)) {
                    $term2Total += $mark->$subjectKey;
                }
            }
            $mark->term2_total = $term2Total;
    
            if ($this->Marks->save($mark)) {
                // Update academic year and results
                $this->updateAcademicYearAndResults($mark, $term1Total, $term2Total);
                $this->Flash->success(__('The mark has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
    
            $this->Flash->error(__('The mark could not be saved. Please, try again.'));
        }
    
        $students = $this->Marks->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('mark', 'students'));
    }
    // Private method to update academic year and results
private function updateAcademicYearAndResults($mark, $term1Total, $term2Total)
{
    $studentId = $mark->student_id;
    $academicYear = $mark->academic_year;

    // Update the academic years table if needed
    $this->loadModel('AcademicYears');
    if (!$this->AcademicYears->exists(['student_id' => $studentId, 'academic_year' => $academicYear])) {
        $academicYearEntity = $this->AcademicYears->newEntity([
            'student_id' => $studentId,
            'academic_year' => $academicYear,
        ]);
        $this->AcademicYears->save($academicYearEntity);
    }

    // Update results table
    $this->loadModel('Results');

    // Calculate percentages and grades
    $term1Percent = ($term1Total / 700) * 100; // Adjust denominator as needed
    $term2Percent = ($term2Total / 700) * 100; // Adjust denominator as needed

    $term1Grade = $this->determineGrade($term1Percent);
    $term2Grade = $this->determineGrade($term2Percent);

    // Update or create the result entry
    $result = $this->Results->find('all')->where(['student_id' => $studentId, 'academic_year' => $academicYear])->first();
    if ($result) {
        // Update existing result
        $result->term1_total_marks = $term1Total;
        $result->term1_percentage = $term1Percent;
        $result->term1_grade = $term1Grade;
        $result->term2_total_marks = $term2Total;
        $result->term2_percentage = $term2Percent;
        $result->term2_grade = $term2Grade;

        if (!$this->Results->save($result)) {
            $this->Flash->error(__('The result could not be updated. Please, try again.'));
        }
    } else {
        // If no result found, handle as new entry
        $this->handleAcademicYearAndResults($mark, $term1Total, $term2Total);
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
        $this->request->allowMethod(['post', 'delete']);
        $mark = $this->Marks->get($id);

        // Delete associated results and academic years
        $this->deleteAssociatedData($mark);

        if ($this->Marks->delete($mark)) {
            $this->Flash->success(__('The mark has been deleted.'));
        } else {
            $this->Flash->error(__('The mark could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    // Private method to delete associated data
    private function deleteAssociatedData($mark)
    {
        $studentId = $mark->student_id;
        $academicYear = $mark->academic_year;

        // Delete from results table
        $this->loadModel('Results');
        $this->Results->deleteAll(['student_id' => $studentId, 'academic_year' => $academicYear]);

        // Delete from academic years table
        $this->loadModel('AcademicYears');
        $this->AcademicYears->deleteAll(['student_id' => $studentId, 'academic_year' => $academicYear]);
    }

}
