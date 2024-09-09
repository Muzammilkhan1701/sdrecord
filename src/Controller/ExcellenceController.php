<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Excellence Controller
 *
 * @property \App\Model\Table\ExcellenceTable $Excellence
 * @method \App\Model\Entity\Excellence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExcellenceController extends AppController
{
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
        $excellence = $this->paginate($this->Excellence);

        $this->set(compact('excellence'));
    }

    /**
     * View method
     *
     * @param string|null $id Excellence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $excellence = $this->Excellence->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('excellence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $excellence = $this->Excellence->newEmptyEntity();
        if ($this->request->is('post')) {
            $excellence = $this->Excellence->patchEntity($excellence, $this->request->getData());
            if ($this->Excellence->save($excellence)) {
                $this->Flash->success(__('The excellence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The excellence could not be saved. Please, try again.'));
        }
        $students = $this->Excellence->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('excellence', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Excellence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $excellence = $this->Excellence->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $excellence = $this->Excellence->patchEntity($excellence, $this->request->getData());
            if ($this->Excellence->save($excellence)) {
                $this->Flash->success(__('The excellence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The excellence could not be saved. Please, try again.'));
        }
        $students = $this->Excellence->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('excellence', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Excellence id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $excellence = $this->Excellence->get($id);
        if ($this->Excellence->delete($excellence)) {
            $this->Flash->success(__('The excellence has been deleted.'));
        } else {
            $this->Flash->error(__('The excellence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
