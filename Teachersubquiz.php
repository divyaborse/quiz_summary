<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Teachersubquiz extends CI_Controller {
	public function index(){
		$this->load->model('Model_subquiz');
		$data['data'] = $this->Model_subquiz->fetch_detail();
		$this->load->view('accountheader');
		$this->load->view('sample');

		$this->load->view('Views_quiz',$data);
		$this->load->view('accountfooter');


	}

	public function display(){
		if(isset($_POST['submit'])){
			$score = $_POST['score'];
			$this->load->model('Model_subquiz');
			$this->Model_subquiz->store_score($score);
			echo "Score saved";

		}
	}

}
?>