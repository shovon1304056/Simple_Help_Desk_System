<?php
/**
 * Created by PhpStorm.
 * User: SHUVOJOTY
 * Date: 2/3/2019
 * Time: 1:02 AM
 */


namespace App\Controller;

use App\Controller\AppController;
use phpDocumentor\Reflection\Types\Null_;

class HomeController extends AppController
{



    public function index()
    {
        //$this->autoRender = false;
        $this->loadModel('Newtickets');

        $this->set('$newtickets', $this->Newtickets->find('all'));
        //$this->set('posts', $this->Posts->find('all'));
    }

    public function add()
    {
        //$this->autoRender = false;
        $this->loadModel('Newtickets');
        $newticket = $this->Newtickets->newEntity();
        if ($this->request->is('post')) {
            $newticket = $this->Newtickets->patchEntity($newticket, $this->request->getData());
            if ($this->Newtickets->save($newticket)) {
                $this->Flash->success('Post added successfully', ['key' => 'message_add']);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('unable to add post'));
        }
        $this->set('post', $newticket);
    }




}


?>

