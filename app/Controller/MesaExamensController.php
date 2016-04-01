<?php
App::uses('AppController', 'Controller');
/**
 * MesaExamens Controller
 *
 * @property MesaExamen $MesaExamen
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MesaExamensController extends AppController {

/**
 * Components
 *
 * @var array
 */
   	var $name = 'MesaExamens';
    var $helpers = array('Session', 'Form', 'Time', 'Js');
	public $components = array('Paginator', 'Flash', 'Auth','Session', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MesaExamen->recursive = 0;
		$this->set('mesaExamens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MesaExamen->exists($id)) {
			throw new NotFoundException(__('Invalid mesa examen'));
		}
		$options = array('conditions' => array('MesaExamen.' . $this->MesaExamen->primaryKey => $id));
		$this->set('mesaExamen', $this->MesaExamen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MesaExamen->create();
			if ($this->MesaExamen->save($this->request->data)) {
				$this->Flash->success(__('The mesa examen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesa examen could not be saved. Please, try again.'));
			}
		}
		$ciclos = $this->MesaExamen->Ciclo->find('list');
		$titulacions = $this->MesaExamen->Titulacion->find('list');
		$materias = $this->MesaExamen->Materia->find('list');
		$this->set(compact('ciclos', 'titulacions', 'materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MesaExamen->exists($id)) {
			throw new NotFoundException(__('Invalid mesa examen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MesaExamen->save($this->request->data)) {
				$this->Flash->success(__('The mesa examen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesa examen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MesaExamen.' . $this->MesaExamen->primaryKey => $id));
			$this->request->data = $this->MesaExamen->find('first', $options);
		}
		$ciclos = $this->MesaExamen->Ciclo->find('list');
		$titulacions = $this->MesaExamen->Titulacion->find('list');
		$materias = $this->MesaExamen->Materia->find('list');
		$this->set(compact('ciclos', 'titulacions', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MesaExamen->id = $id;
		if (!$this->MesaExamen->exists()) {
			throw new NotFoundException(__('Invalid mesa examen'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MesaExamen->delete()) {
			$this->Flash->success(__('The mesa examen has been deleted.'));
		} else {
			$this->Flash->error(__('The mesa examen could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
