<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Canned Controller
 *
 * @property \App\Model\Table\CannedTable $Canned
 *
 * @method \App\Model\Entity\Canned[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CannedController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $canned = $this->paginate($this->Canned);

        $this->set(compact('canned'));
    }

    /**
     * View method
     *
     * @param string|null $id Canned id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $canned = $this->Canned->get($id, [
            'contain' => []
        ]);

        $this->set('canned', $canned);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $canned = $this->Canned->newEntity();
        if ($this->request->is('post')) {
            $canned = $this->Canned->patchEntity($canned, $this->request->getData());
            if ($this->Canned->save($canned)) {
                $this->Flash->success(__('The canned has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canned could not be saved. Please, try again.'));
        }
        $this->set(compact('canned'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canned id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $canned = $this->Canned->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $canned = $this->Canned->patchEntity($canned, $this->request->getData());
            if ($this->Canned->save($canned)) {
                $this->Flash->success(__('The canned has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canned could not be saved. Please, try again.'));
        }
        $this->set(compact('canned'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canned id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $canned = $this->Canned->get($id);
        if ($this->Canned->delete($canned)) {
            $this->Flash->success(__('The canned has been deleted.'));
        } else {
            $this->Flash->error(__('The canned could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
