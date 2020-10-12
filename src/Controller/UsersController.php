<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function index()
    {        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Registro salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Registro não foi salvo!'));
        }        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Registro salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Registro não foi salvo!'));
        }        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Registro deletado'));
        } else {
            $this->Flash->error(__('Registro não foi deletado!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
