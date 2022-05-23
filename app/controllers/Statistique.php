<?php 
    class Statistique extends Controller{
        public function __construct(){

            $this->studentModel = $this->model('Etudiant');
            $this->profmodel = $this->model('Professeur');
            
            }        
        public function showStatistics(){
            $data = [
                "studentNumber"=>$this->studentModel->GetStudentNumber(),
                "maleCount"=>$this->studentModel->getMaleCount(),
                "femaleCount"=>$this->studentModel->getFemaleCount(),
                "classNumber"=>$this->studentModel->getNumberClass(),
                "profNumber"=>$this->studentModel->getProfsNumber()
            ];
            $this->view('pages/statistique', $data);

        }
    }
?>