<?php

class ModifyParasController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->loadModel('ModifyPara');
		$this->ModifyPara->ReadData();
	$this->set('complexities', $this->ModifyPara->find('all'));
	}


	public function add() {

		$this->loadModel('ModifyPara');
		$this->ModifyPara->ReadData();

	if ($this->request->is('post')) {
	$this->ModifyPara->create();
	var_dump($this->request->data);
	if ($this->ModifyPara->save($this->request->data)) {
	$this->Session->setFlash(__('Your Modify Parameter has been saved.'));
	return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Unable to add your Parameter.'));
	}
	}
}
?>
