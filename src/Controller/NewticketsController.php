<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Newtickets Controller
 *
 * @property \App\Model\Table\NewticketsTable $Newtickets
 *
 * @method \App\Model\Entity\Newticket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewticketsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $newtickets = $this->paginate($this->Newtickets);

        $this->set(compact('newtickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Newticket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newticket = $this->Newtickets->get($id, [
            'contain' => []
        ]);

        $this->set('newticket', $newticket);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newticket = $this->Newtickets->newEntity();
        if ($this->request->is('post')) {
            $newticket = $this->Newtickets->patchEntity($newticket, $this->request->getData());
            if ($this->Newtickets->save($newticket)) {
                $this->Flash->success(__('The newticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newticket could not be saved. Please, try again.'));
        }
        $this->set(compact('newticket'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newticket = $this->Newtickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newticket = $this->Newtickets->patchEntity($newticket, $this->request->getData());
            if ($this->Newtickets->save($newticket)) {
                $this->Flash->success(__('The newticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newticket could not be saved. Please, try again.'));
        }
        $this->set(compact('newticket'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newticket = $this->Newtickets->get($id);
        if ($this->Newtickets->delete($newticket)) {
            $this->Flash->success(__('The newticket has been deleted.'));
        } else {
            $this->Flash->error(__('The newticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
