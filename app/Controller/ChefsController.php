<?php
App::uses('AppController', 'Controller');
/**
 * Chefs Controller
 *
 * @property Chef $Chef
 */
class ChefsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Chef->recursive = 0;
		$this->set('chefs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Chef->id = $id;
		if (!$this->Chef->exists()) {
			throw new NotFoundException(__('Invalid chef'));
		}
		$this->set('chef', $this->Chef->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chef->create();
			if ($this->Chef->save($this->request->data)) {
				$this->Session->setFlash(__('The chef has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chef could not be saved. Please, try again.'));
			}
		}
		$users = $this->Chef->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Chef->id = $id;
		if (!$this->Chef->exists()) {
			throw new NotFoundException(__('Invalid chef'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Chef->save($this->request->data)) {
				$this->Session->setFlash(__('The chef has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chef could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Chef->read(null, $id);
		}
		$users = $this->Chef->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Chef->id = $id;
		if (!$this->Chef->exists()) {
			throw new NotFoundException(__('Invalid chef'));
		}
		if ($this->Chef->delete()) {
			$this->Session->setFlash(__('Chef deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Chef was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
