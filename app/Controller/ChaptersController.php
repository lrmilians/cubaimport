<?php
App::uses('AppController', 'Controller');
/**
 * Chapters Controller
 *
 * @property Chapter $Chapter
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ChaptersController extends AppController {

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
		$this->Chapter->recursive = 0;
		$this->set('chapters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Chapter->exists($id)) {
			throw new NotFoundException(__('Invalid chapter'));
		}
		$options = array('conditions' => array('Chapter.' . $this->Chapter->primaryKey => $id));
		$this->set('chapter', $this->Chapter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chapter->create();
			if ($this->Chapter->save($this->request->data)) {
				$this->Session->setFlash(__('The chapter has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chapter could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Chapter->id = $id;
		if (!$this->Chapter->exists($id)) {
			throw new NotFoundException(__('Invalid chapter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Chapter->save($this->request->data)) {
				$this->Session->setFlash(__('The chapter has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chapter could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Chapter.' . $this->Chapter->primaryKey => $id));
			$this->request->data = $this->Chapter->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Chapter->id = $id;
		if (!$this->Chapter->exists()) {
			throw new NotFoundException(__('Invalid chapter'));
		}
		if ($this->Chapter->delete()) {
			$this->Session->setFlash(__('Chapter deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Chapter was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
