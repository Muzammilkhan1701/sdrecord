<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log; // Make sure to include this line
use Cake\Http\Exception\NotFoundException;

// use Cake\Http\Exception\NotFoundException;

/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 * @property \Authorization\Controller\Component\AuthorizationComponent $Authorization
 */
class StudentsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {

        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('uhome');

        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        // $this->Authentication->addUnauthenticatedActions(['login', 'marksheet', 'rform']);
    }
    /**
     * Initialize controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Authorization.Authorization');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();

        $query = $this->Students->find();
        // $query = $this->Authorization->applyScope($query);
        $students = $this->paginate($query);

        $this->set(compact('students'));
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Students->get($id, contain: ['Excellence']);
        $this->Authorization->authorize($student);
        $this->set(compact('student'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Students->newEmptyEntity();
        $this->Authorization->authorize($student);
        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $this->set(compact('student'));
    }
    public function getClass()
    {
        $this->request->allowMethod(['ajax', 'get']);
        $studentId = $this->request->getQuery('student_id');

        if (!$studentId) {
            throw new NotFoundException(__('Invalid student ID'));
        }

        // Fetch the student's class
        $student = $this->Students->find()
            ->select(['class']) // Only select the 'class' field
            ->where(['id' => $studentId])
            ->first();

        if ($student) {
            $this->set('class', $student->class);
        } else {
            $this->set('class', null);
        }

        $this->viewBuilder()->setOption('serialize', ['class']); // Serialize the response
    }


    



    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Students->get($id, contain: []);
        $this->Authorization->authorize($student);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $this->set(compact('student'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        $this->Authorization->authorize($student);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
