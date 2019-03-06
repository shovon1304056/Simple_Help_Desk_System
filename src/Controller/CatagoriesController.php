<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catagories Controller
 *
 * @property \App\Model\Table\CatagoriesTable $Catagories
 *
 * @method \App\Model\Entity\Catagory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatagoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $catagories = $this->paginate($this->Catagories);

        $this->set(compact('catagories'));
    }

    /**
     * View method
     *
     * @param string|null $id Catagory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catagory = $this->Catagories->get($id, [
            'contain' => []
        ]);

        $this->set('catagory', $catagory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catagory = $this->Catagories->newEntity();
        if ($this->request->is('post')) {
            $catagory = $this->Catagories->patchEntity($catagory, $this->request->getData());
            if ($this->Catagories->save($catagory)) {
                $this->Flash->success(__('The catagory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catagory could not be saved. Please, try again.'));
        }
        $this->set(compact('catagory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Catagory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catagory = $this->Catagories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catagory = $this->Catagories->patchEntity($catagory, $this->request->getData());
            if ($this->Catagories->save($catagory)) {
                $this->Flash->success(__('The catagory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catagory could not be saved. Please, try again.'));
        }
        $this->set(compact('catagory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Catagory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catagory = $this->Catagories->get($id);
        if ($this->Catagories->delete($catagory)) {
            $this->Flash->success(__('The catagory has been deleted.'));
        } else {
            $this->Flash->error(__('The catagory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
