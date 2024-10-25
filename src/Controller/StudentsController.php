<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\Exception\RecordNotFoundException;
use Authorization\Exception\ForbiddenException;


/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    $this->viewBuilder()->setLayout('uhome');

    // Add to the beforeFilter method of UsersController
// $this->Authentication->addUnauthenticatedActions(['login',]);
}

public function initialize(): void
    {
        parent::initialize();
        $this->fetchTable('Students'); // This loads the StudentsComponent
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();

        $students = $this->paginate($this->Students);

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
        $this->Authorization->skipAuthorization();

        $student = $this->Students->get($id, contain: []);

        $this->set(compact('student'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
try{
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
        

} catch (ForbiddenException $e) {
    $this->Flash->error(__('You are not authorized to perform this action.'));
    return $this->redirect(['action' => 'index']);
} catch (RecordNotFoundException $e) {
    $this->Flash->error(__('The record could not be found.'));
    return $this->redirect(['action' => 'index']);
}

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
        
try{
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

} catch (ForbiddenException $e) {
    $this->Flash->error(__('You are not authorized to perform this action.'));
    return $this->redirect(['action' => 'index']);
} catch (RecordNotFoundException $e) {
    $this->Flash->error(__('The record could not be found.'));
    return $this->redirect(['action' => 'index']);
}

    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
     
try{
    $this->request->allowMethod(['post', 'delete']);
    $student = $this->Students->get($id);
    $this->Authorization->authorize($student);

    if ($this->Students->delete($student)) {
        $this->Flash->success(__('The student has been deleted.'));
    } else {
        $this->Flash->error(__('The student could not be deleted. Please, try again.'));
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
}
