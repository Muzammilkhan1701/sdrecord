<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\Exception\RecordNotFoundException;
use Authorization\Exception\ForbiddenException;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authorization\Controller\Component\AuthorizationComponent $Authorization
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('uhome');
    
        // Add to the beforeFilter method of UsersController
    $this->Authentication->addUnauthenticatedActions(['login',]);
    }
    
   
    /**
     * Initialize controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Marks = $this->fetchTable('Marks');
        $this->Students = $this->fetchTable('Students');
        $this->Results = $this->fetchTable('Results');
        $this->AcademicYears = $this->fetchTable('AcademicYears');
        $this->Excellence = $this->fetchTable('Excellence');
        $this->loadComponent('Authorization.Authorization');
    }
    public function dashboard()
{
     // Authorize the user for the dashboard
    //  $this->Authorization->authorize($this->Users->newEmptyEntity());
    $this->Authorization->skipAuthorization();

    
    $this->viewBuilder()->setLayout('uhome');
    

    // Get the count of students
    $studentCount = $this->Students->find()->count();

    // Set the count to the view
    $this->set('studentCount', $studentCount);
  // Get the count of results
    // $resultCount = $this->Results->find()->count();

    // // Set the count to the view
    // $this->set('resultCount', $resultCount);

}
    
    public function login()
{
    $this->Authorization->skipAuthorization();
    $this->viewBuilder()->setLayout('home');


    $this->request->allowMethod(['get', 'post']);
    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        // redirect to /articles after login success
        $redirect = $this->request->getQuery('redirect', [
            'controller' => 'Users',
            'action' => 'dashboard',
        ]);

        return $this->redirect($redirect);
    }
    // display error if user submitted and authentication failed
    if ($this->request->is('post') && !$result->isValid()) {
        $this->Flash->error(__('Invalid username or password'));
    }
}
public function logout()
{
    $this->Authorization->skipAuthorization();
    $this->viewBuilder()->setLayout('home');


    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        $this->Authentication->logout();

        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
}


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Users->find();
        // $query = $this->Authorization->applyScope($query);
        $this->Authorization->skipAuthorization();

        $users = $this->paginate($query);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();

        $user = $this->Users->get($id, contain: []);
        // $this->Authorization->authorize($user);
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
try{
    // $this->Authorization->skipAuthorization();

    $user = $this->Users->newEmptyEntity();
    $this->Authorization->authorize($user);
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));

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
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {        
try{
    $user = $this->Users->get($id, contain: []);
    $this->Authorization->authorize($user);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));

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
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {       
try{
    $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $this->Authorization->authorize($user);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
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

