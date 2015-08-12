<?php
class CursosController extends AppController {

	var $name = 'Cursos';
    var $paginate = array('Curso' => array('limit' => 4, 'order' => 'Curso.id DESC'));

	function index() {
		//$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['anio']))
		{
			$conditions['Curso.anio ='] = $this->params['named']['anio'];
		}
		if(!empty($this->params['named']['division']))
		{
			$conditions['Curso.division ='] = $this->params['named']['division'];
		}
		if(!empty($this->params['named']['turno']))
		{
			$conditions['Curso.turno ='] = $this->params['named']['turno'];
		}
		/*if(!empty($this->params['named']['day_f']) && !empty($this->params['named']['month_f']) && !empty($this->params['named']['year_f']))
		{
			$conditions['Inscripcion.fechaInscripcion >='] = $this->params['named']['year_f'].'-'.$this->params['named']['month_f'].'-'.$this->params['named']['day_f'];
		}
		if(!empty($this->params['named']['day_t']) && !empty($this->params['named']['month_t']) && !empty($this->params['named']['year_t']))
		{
			$conditions['Inscripcion.fechaInscripcion <='] = $this->params['named']['year_t'].'-'.$this->params['named']['month_t'].'-'.$this->params['named']['day_t'];
		}
		*/
		$cursos = $this->paginate('Curso',$conditions);
		$this->set(compact('cursos'));
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Curso no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curso', $this->Curso->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Curso->create();
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash(__('El curso ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El curso no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$centros = $this->Curso->Centro->find('list');
		$titulacions = $this->Curso->Titulacion->find('list');
		$modalidads = $this->Curso->Modalidad->find('list');
		$materias = $this->Curso->Materia->find('list');
		$ciclos = $this->Curso->Ciclo->find('list');
		$this->set(compact('centros', 'titulacions', 'modalidads', 'materias', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Curso no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash(__('El curso ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El curso no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curso->read(null, $id);
		}
		$centros = $this->Curso->Centro->find('list');
		$titulacions = $this->Curso->Titulacion->find('list');
		//$modalidads = $this->Curso->Modalidad->find('list');
		$ciclos = $this->Curso->Ciclo->find('list');
		$this->set(compact('centros', 'titulacions', 'modalidads', 'ciclos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para curso'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Curso->delete($id)) {
			$this->Session->setFlash(__('Curso borrado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Curso no fue borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
?>