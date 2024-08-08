<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Serveer Controller
 *
 */
class ServeerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Serveer->find();
        $serveer = $this->paginate($query);

        $this->set(compact('serveer'));
    }

    /**
     * View method
     *
     * @param string|null $id Serveer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serveer = $this->Serveer->get($id, contain: []);
        $this->set(compact('serveer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serveer = $this->Serveer->newEmptyEntity();
        if ($this->request->is('post')) {
            $serveer = $this->Serveer->patchEntity($serveer, $this->request->getData());
            if ($this->Serveer->save($serveer)) {
                $this->Flash->success(__('The serveer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serveer could not be saved. Please, try again.'));
        }
        $this->set(compact('serveer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Serveer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serveer = $this->Serveer->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serveer = $this->Serveer->patchEntity($serveer, $this->request->getData());
            if ($this->Serveer->save($serveer)) {
                $this->Flash->success(__('The serveer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serveer could not be saved. Please, try again.'));
        }
        $this->set(compact('serveer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Serveer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serveer = $this->Serveer->get($id);
        if ($this->Serveer->delete($serveer)) {
            $this->Flash->success(__('The serveer has been deleted.'));
        } else {
            $this->Flash->error(__('The serveer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
