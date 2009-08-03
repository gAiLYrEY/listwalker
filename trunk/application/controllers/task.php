<?php

class Task extends Controller {
	function __construct() {
		parent::Controller();
		$this->load->model('task_model', 'task');
	}
	
	function index() {
		redirect('tasklist');
		exit;
	}
	
	function add($format=NULL) {
		$return = array('task_id'=>rand(1, 500));
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
