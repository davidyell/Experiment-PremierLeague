<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teams Controller
 *
 * @property \App\Model\Table\TeamsTable $Teams
 */
class TeamsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [
                'HomeMatches',
                'AwayMatches'
            ]
        ];
        $this->set('teams', $this->paginate($this->Teams));
        $this->set('_serialize', ['teams']);
    }

    /**
     * View method
     *
     * @param string|null $id Team id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => ['Players']
        ]);
        $this->set('team', $team);
        $this->set('_serialize', ['team']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $team = $this->Teams->newEntity();
        if ($this->request->is('post')) {
            $team = $this->Teams->patchEntity($team, $this->request->data);
            if ($this->Teams->save($team)) {
                $this->Flash->success('The team has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The team could not be saved. Please, try again.');
            }
        }
        $players = $this->Teams->Players->find('list', ['keyField' => 'id', 'valueField' => 'FullName']);
        $this->set(compact('team', 'players'));
        $this->set('_serialize', ['team']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => ['Players']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $team = $this->Teams->patchEntity($team, $this->request->data());
            if ($this->Teams->save($team)) {
                $this->Flash->success('The team has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The team could not be saved. Please, try again.');
            }
        }
        $players = $this->Teams->Players->find('list', ['keyField' => 'id', 'valueField' => 'FullName']);
        $this->set(compact('team', 'players'));
        $this->set('_serialize', ['team']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $team = $this->Teams->get($id);
        if ($this->Teams->delete($team)) {
            $this->Flash->success('The team has been deleted.');
        } else {
            $this->Flash->error('The team could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
