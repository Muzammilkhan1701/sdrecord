<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Results Controller
 *
 * @property \App\Model\Table\ResultsTable $Results
 * @method \App\Model\Entity\Result[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResultsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Students');
        $this->loadModel('Marks');
        $this->loadModel('Results');
        $this->loadModel('AcademicYears');
        $this->loadModel('Excellence');
        // Load other models if needed
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {

        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('uhome');

        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'marksheet', 'rform']);
    }
    public function rform()
    {

        // $this->viewBuilder()->setLayout('home');
        $this->viewBuilder()->setLayout('home');
       

        // Fetch academic years from the academic_years table
        $academicYears = $this->Marks->find('list', [
            'keyField' => 'academic_year',
            'valueField' => 'academic_year'
        ])->toArray();
    
        // Pass academic years to the view
        $this->set(compact('academicYears'));
    
    }

    public function finalview()
    {
        $this->viewBuilder()->setLayout('home');


    }

    // // src/Controller/ResultsController.php
    // public function marksheet()
    // {
    //     $this->viewBuilder()->setLayout('home');

    //     if ($this->request->is('post')) {
    //         $data = $this->request->getData();

    //         // Get roll number and term from form data
    //         $rollNo = isset($data['rollno']) ? $data['rollno'] : null;
    //         $term = isset($data['term']) ? $data['term'] : 'Term1';
    //         $motherName = isset($data['mother_name']) ? $data['mother_name'] : null;
    //         $academicYear = isset($data['academic_year']) ? $data['academic_year'] : null;
    

    //         if ($rollNo || $motherName || $academicYear ) {
    //             // Fetch marks and related student data based on roll number
    //             $student = $this->Marks->find()
    //                 ->contain([
    //                     'Students',
    //                     'Results' => function ($q) {
    //                         return $q; // No need to specify rollno here if using student_id
    //                     }
    //                 ])
    //                 ->where(['Marks.rollno' => $rollNo, ]) // Search by roll number in Marks table
    //                 ->first();

    //             // Fetch excellence data
    // $excellence = $this->Excellence->find()
    // ->where(['student_id' => $student->student_id])
    // ->first();

    //             if ($student) {
                    
    //                 // Set the data for the view
    //                 $this->set('marks', $student); // Set marks
    //                 $this->set('student', $student->student); // Set student data
    //                 $this->set('results', $student->result); // Set results data
    //                 $this->set('term', $term); // Set term for conditional display
    //                 $this->set('excellence', $excellence);

    //                 // Load different views based on the selected term
    //             if ($term === 'Term1' || $term === 'Term2') {
    //                 // For either Term 1 or Term 2, load the single-term template
    //                 $this->viewBuilder()->setTemplate('marksheet'); // View for Term1 or Term2
    //             } elseif ($term === 'Term1+Term2') {
    //                 // For combined Term 1 + Term 2, load the combined-term template
    //                 $this->viewBuilder()->setTemplate('finalview'); // View for Term1+Term2
    //             }

    //             } else {
    //                 $this->Flash->error(__('Marks not found for the given Roll No.'));
    //                 $this->render('rform');
    //             }
    //         } else {
    //             $this->Flash->error(__('Roll No is required.'));
    //             $this->render('rform');
    //         }
    //     } else {
    //         $this->Flash->error(__('Invalid request method.'));
    //         $this->render('rform');
    //     }
    // }

    public function marksheet()
    {
        $this->viewBuilder()->setLayout('home');

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            

            // Get form data
            $rollNo = isset($data['rollno']) ? $data['rollno'] : null;
            $term = isset($data['term']) ? $data['term'] : 'Term1';
            $motherName = isset($data['mother_name']) ? $data['mother_name'] : null;
            $academicYear = isset($data['year']) ? $data['year'] : null;
            $results = isset($data['results']) ? $data['results'] : null;

            // Validate that all form fields are provided
            if (!$rollNo || !$motherName || !$academicYear) {
                $this->Flash->error(__('All fields (Roll No, Term, Mother\'s Name, Academic Year) are required.'));
                return $this->redirect(['action' => 'rform']);
            }

            // 1. Check if Roll Number exists in Marks table for the given Academic Year
            $markEntry = $this->Marks->find()
                ->where(['Marks.rollno' => $rollNo, 'Marks.academic_year' => $academicYear])
                ->first();

            // Debugging: Check if any record is found in Marks
            if (!$markEntry) {
                $this->Flash->error(__('No record found for the given Roll Number and Academic Year.'));
                return $this->redirect(['action' => 'rform']);
            }

            // 2. Check if Mother's Name matches in the Students table
            $student = $this->Marks->Students->find()
                ->where(['Students.mother_name' => $motherName, 'Students.student_id' => $markEntry->student_id])
                ->first();

            // Debugging: Check if the mother's name matches for the student
            if (!$student) {
                $this->Flash->error(__('Mother\'s name does not match for this Roll Number.'));
                return $this->redirect(['action' => 'rform']);
            }

            // // 3. Check if Academic Year exists in AcademicYears table (optional, as you are already using the value)
            // $academicYearRecord = $this->AcademicYears->find()
            //     ->where(['academic_year' => $academicYear])
            //     ->first();

            // if (!$academicYearRecord) {
            //     $this->Flash->error(__('Invalid Academic Year selected.'));
            //     return $this->redirect(['action' => 'rform']);
            // }

            // If all checks pass, proceed to fetch excellence data
            $excellence = $this->Excellence->find()
                ->where(['student_id' => $student->student_id])
                ->first();

            $results = $this->Results->find()
                ->where(['student_id' => $student->student_id, 'academic_year' => $academicYear])
                ->first();
                

            // Set the data for the view
            $this->set('marks', $markEntry); // Set marks
            $this->set('student', $student); // Set student data
            $this->set('term', $term); // Set term for conditional display
            $this->set('excellence', $excellence);
            $this->set('results', $results);

            // Load different views based on the selected term
            if ($term === 'Term1' || $term === 'Term2') {
                // For either Term 1 or Term 2, load the single-term template
                $this->viewBuilder()->setTemplate('marksheet');
            } elseif ($term === 'Term1+Term2') {
                // For combined Term 1 + Term 2, load the combined-term template
                $this->viewBuilder()->setTemplate('finalview');
            }

        } else {
            $this->Flash->error(__('Invalid request method.'));
            return $this->redirect(['action' => 'rform']);
        }
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
        $results = $this->paginate($this->Results);

        $this->set(compact('results'));
    }



    /**
     * View method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $result = $this->Results->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('result'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $result = $this->Results->newEmptyEntity();
        if ($this->request->is('post')) {
            $result = $this->Results->patchEntity($result, $this->request->getData());
            if ($this->Results->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $students = $this->Results->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('result', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $result = $this->Results->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Results->patchEntity($result, $this->request->getData());
            if ($this->Results->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $students = $this->Results->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('result', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $result = $this->Results->get($id);
        if ($this->Results->delete($result)) {
            $this->Flash->success(__('The result has been deleted.'));
        } else {
            $this->Flash->error(__('The result could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
