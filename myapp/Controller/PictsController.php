<?php
App::uses('AppController', 'Controller');
/**
 * Picts Controller
 *
 * @property Pict $Pict
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PictsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pict->recursive = 0;
		$this->set('picts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pict->exists($id)) {
			throw new NotFoundException(__('Invalid pict'));
		}
		$options = array('conditions' => array('Pict.' . $this->Pict->primaryKey => $id));
		$this->set('pict', $this->Pict->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pict->create();
			if ($this->Pict->save($this->request->data)) {
				$this->Session->setFlash(__('The pict has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pict could not be saved. Please, try again.'));
			}
		}
		$users = $this->Pict->User->find('list');
		$tags = $this->Pict->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pict->exists($id)) {
			throw new NotFoundException(__('Invalid pict'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pict->save($this->request->data)) {
				$this->Session->setFlash(__('The pict has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pict could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pict.' . $this->Pict->primaryKey => $id));
			$this->request->data = $this->Pict->find('first', $options);
		}
		$users = $this->Pict->User->find('list');
		$tags = $this->Pict->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pict->id = $id;
		if (!$this->Pict->exists()) {
			throw new NotFoundException(__('Invalid pict'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pict->delete()) {
			$this->Session->setFlash(__('The pict has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pict could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Pict->recursive = 0;
		$this->set('picts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Pict->exists($id)) {
			throw new NotFoundException(__('Invalid pict'));
		}
		$options = array('conditions' => array('Pict.' . $this->Pict->primaryKey => $id));
		$this->set('pict', $this->Pict->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Pict->create();
			if ($this->Pict->save($this->request->data)) {
				$this->Session->setFlash(__('The pict has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pict could not be saved. Please, try again.'));
			}
		}
		$users = $this->Pict->User->find('list');
		$tags = $this->Pict->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Pict->exists($id)) {
			throw new NotFoundException(__('Invalid pict'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pict->save($this->request->data)) {
				$this->Session->setFlash(__('The pict has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pict could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pict.' . $this->Pict->primaryKey => $id));
			$this->request->data = $this->Pict->find('first', $options);
		}
		$users = $this->Pict->User->find('list');
		$tags = $this->Pict->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Pict->id = $id;
		if (!$this->Pict->exists()) {
			throw new NotFoundException(__('Invalid pict'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pict->delete()) {
			$this->Session->setFlash(__('The pict has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pict could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
