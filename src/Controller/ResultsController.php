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

        $this->viewBuilder()->setLayout('home');
    }

    public function finalview()
    {
        $this->viewBuilder()->setLayout('home');


    }

    // src/Controller/ResultsController.php
    public function marksheet()
    {
        $this->viewBuilder()->setLayout('home');

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Get roll number and term from form data
            $rollNo = isset($data['rollno']) ? $data['rollno'] : null;
            $term = isset($data['term']) ? $data['term'] : 'Term1';

            if ($rollNo) {
                // Fetch marks and related student data based on roll number
                $student = $this->Marks->find()
                    ->contain([
                        'Students',
                        'Results' => function ($q) {
                            return $q; // No need to specify rollno here if using student_id
                        }
                    ])
                    ->where(['Marks.rollno' => $rollNo]) // Search by roll number in Marks table
                    ->first();

                // Fetch excellence data
    $excellence = $this->Excellence->find()
    ->where(['student_id' => $student->student_id])
    ->first();

                if ($student) {
                    // Set the data for the view
                    $this->set('marks', $student); // Set marks
                    $this->set('student', $student->student); // Set student data
                    $this->set('results', $student->result); // Set results data
                    $this->set('term', $term); // Set term for conditional display
                    $this->set('excellence', $excellence);

                    // Load different views based on the selected term
                if ($term === 'Term1' || $term === 'Term2') {
                    // For either Term 1 or Term 2, load the single-term template
                    $this->viewBuilder()->setTemplate('marksheet'); // View for Term1 or Term2
                } elseif ($term === 'Term1+Term2') {
                    // For combined Term 1 + Term 2, load the combined-term template
                    $this->viewBuilder()->setTemplate('finalview'); // View for Term1+Term2
                }

                } else {
                    $this->Flash->error(__('Marks not found for the given Roll No.'));
                }
            } else {
                $this->Flash->error(__('Roll No is required.'));
            }
        } else {
            $this->Flash->error(__('Invalid request method.'));
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
