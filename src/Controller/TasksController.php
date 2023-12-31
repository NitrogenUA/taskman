<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 *
 * @method \App\Model\Entity\Task[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TasksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $uid = $this->Auth->User('id');
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $tasks = $this->paginate($this->Tasks->find()->where(['user_id' => $uid]));

        $this->set(compact('tasks'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uid = $this->Auth->User('id');
        $task = $this->Tasks->newEntity();
        if ($this->request->is('post')) {
            $task = $this->Tasks->patchEntity($task, $this->request->withData('user_id', $uid)->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The task could not be saved. Please, try again.'));
        }
        $users = $this->Tasks->Users->find('list', ['limit' => 200]);
        $this->set(compact('task', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uid = $this->Auth->User('id');
        $task = $this->Tasks->get($id, [
            'contain' => [],
        ]);
        if ($task->get('user_id') != $uid) {
            $this->Flash->error(__('Unauthorized.'));
            return $this->redirect(['action' => 'index']);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The task could not be saved. Please, try again.'));
        }
        $users = $this->Tasks->Users->find('list', ['limit' => 200]);
        $this->set(compact('task', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $uid = $this->Auth->User('id');
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Tasks->get($id);
        if ($task->get('user_id') != $uid) {
            $this->Flash->error(__('Unathrorized.'));
            return $this->redirect(['action' => 'index']);
        }
        if ($this->Tasks->delete($task)) {
            $this->Flash->success(__('The task has been deleted.'));
        } else {
            $this->Flash->error(__('The task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
