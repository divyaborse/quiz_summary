<?php

class Studentsubjective extends CI_Controller{

    public function index() {
        $this->load->model('Model_final_quiz');

 $query['query']= $this->Model_final_quiz->display_subquiz_score();
       $this->load->view('Subjective_quiz_summary',$query);

    }

    

}


?>