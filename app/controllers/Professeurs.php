<?php 
class professeurs extends {

    public function __construct(){

    $this->profmodel = $this->model('Professeur');

    }

    public function viewprof(){

        $data = $this->profmodel->getteacher();

        $this->view('pages/professeurs');

    }

    
}