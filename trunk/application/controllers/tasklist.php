<?php

class Tasklist extends Controller {

	function __construct() {
		parent::Controller();
		$this->load->model('tasklist_model', 'tasklist');
		$this->load->model('task_model', 'task');
	}
	
	function index() {
		$this->load->view('tasklist/index');
	}
	
	function add() {
		$return = array('tasklist_id'=>rand(1000,9999));
		echo json_encode($return);
	}
		
	function update($format=NULL) {
		$return = array('success'=>1);
		echo json_encode($return);
	}
	
	function delete($format=NULL) {
		$return = array('success'=>1);
		echo json_encode($return);
	}
}

?>
