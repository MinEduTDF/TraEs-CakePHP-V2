<?php
class IntegracionsController extends AppController {

	var $name = 'Integracions';

	function index() {
		$this->Integracion->recursive = 0;
		$this->set('integracions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Integracion no valido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('integracion', $this->Integracion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Integracion->create();
			if ($this->Integracion->save($this->data)) {
				$this->Session->setFlash(__('La Integracion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Integracion no fue grabada. Favor, intente nuevamente.'));
			}
		}
		$alumnos = $this->Integracion->Alumno->find('list', array('fields'=>array('id',                                                    'nombre_completo_alumno')));
		$centros = $this->Integracion->Centro->find('list');
		$this->set(compact('alumnos', 'centros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Integracion no valida'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Integracion->save($this->data)) {
				$this->Session->setFlash(__('La integracion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La integracion no fue grabada. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Integracion->read(null, $id);
		}
		$alumnos = $this->Integracion->Alumno->find('list', array('fields'=>array('id',                                                    'nombre_completo_alumno')));
		$centros = $this->Integracion->Centro->find('list', array('fields' => array('id', 'sigla')));
		$this->set(compact('alumnos', 'centros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para integracion.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Integracion->delete($id)) {
			$this->Session->setFlash(__('Integracion borrada.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Integracion no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>