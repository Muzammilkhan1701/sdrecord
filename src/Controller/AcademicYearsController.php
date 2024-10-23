<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AcademicYears Controller
 *
 * @property \App\Model\Table\AcademicYearsTable $AcademicYears
 * @method \App\Model\Entity\AcademicYear[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademicYearsController extends AppController
{
    
public function initialize(): void
{
    parent::initialize();
    $this->fetchTable('Students'); // This loads the StudentsComponent
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


        $query = $this->AcademicYears->find()
        ->contain(['Students']); // Adjust this if you have other associations

    // Paginate the query
    $academicYears = $this->paginate($query);
        $this->set(compact('academicYears'));
    }

    /**
     * View method
     *
     * @param string|null $id Academic Year id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();

        $academicYear = $this->AcademicYears->get($id, contain: ['Students']);

        $this->set(compact('academicYear'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academicYear = $this->AcademicYears->newEmptyEntity();
        $this->Authorization->authorize($academicYear);

        if ($this->request->is('post')) {
            $academicYear = $this->AcademicYears->patchEntity($academicYear, $this->request->getData());
            if ($this->AcademicYears->save($academicYear)) {
                $this->Flash->success(__('The academic year has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic year could not be saved. Please, try again.'));
        }
        $students = $this->AcademicYears->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('academicYear', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic Year id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academicYear = $this->AcademicYears->get($id, contain: []);
        $this->Authorization->authorize($academicYear);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $academicYear = $this->AcademicYears->patchEntity($academicYear, $this->request->getData());
            if ($this->AcademicYears->save($academicYear)) {
                $this->Flash->success(__('The academic year has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic year could not be saved. Please, try again.'));
        }
        $students = $this->AcademicYears->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('academicYear', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic Year id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academicYear = $this->AcademicYears->get($id);
        $this->Authorization->authorize($academicYear);

        if ($this->AcademicYears->delete($academicYear)) {
            $this->Flash->success(__('The academic year has been deleted.'));
        } else {
            $this->Flash->error(__('The academic year could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
