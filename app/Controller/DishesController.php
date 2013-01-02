<?php
App::uses('AppController', 'Controller');
/**
 * Dishes Controller
 *
 * @property Dish $Dish
 */
class DishesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dish->recursive = 0;
		$this->set('dishes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		$this->set('dish', $this->Dish->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dish->create();
			if ($this->Dish->save($this->request->data)) {
				$this->Session->setFlash(__('The dish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
			}
		}
		$chefs = $this->Dish->Chef->find('list');
		$this->set(compact('chefs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dish->save($this->request->data)) {
				$this->Session->setFlash(__('The dish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dish->read(null, $id);
		}
		$chefs = $this->Dish->Chef->find('list');
		$this->set(compact('chefs'));
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
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		if ($this->Dish->delete()) {
			$this->Session->setFlash(__('Dish deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dish was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
