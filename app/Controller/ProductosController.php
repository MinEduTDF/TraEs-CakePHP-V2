<?php
class ProductosController extends AppController {

	var $name = 'Productos';

	function index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Producto no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('producto', $this->Producto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Producto->create();
			if ($this->Producto->save($this->data)) {
				$this->Session->setFlash(__('El producto ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El producto no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$inventarios = $this->Producto->Inventario->find('list');
		$this->set(compact('inventarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Producto no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Producto->save($this->data)) {
				$this->Session->setFlash(__('El producto ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El producto no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Producto->read(null, $id);
		}
		$inventarios = $this->Producto->Inventario->find('list');
		$this->set(compact('inventarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para producto.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Producto->delete($id)) {
			$this->Session->setFlash(__('Producto borrado.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Producto no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>