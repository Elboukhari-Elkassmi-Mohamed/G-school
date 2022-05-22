<?php 
class Professeurs extends Controller {

    public function __construct(){

    $this->profmodel = $this->model('Professeur');

    }

    public function viewprof(){

        $data = $this->profmodel->getteachers();

        $this->view('pages/professeurs',$data);

    }

    public function addprof(){
        if (isset($_POST['add'])){
        $data = [
            'prof_Matricule' => $_POST['prof_Matricule'],
            'prof_NComplet' => $_POST['prof_NComplet'],
            'prof_Genre' => $_POST['prof_Genre'],
            'prof_Class' => $_POST['prof_Class'],
            'prof_Matiere' => $_POST['prof_Matiere'],
            'prof_Phone' => $_POST['prof_Phone'],
        ];

        }
        $data = $this->profmodel->addteachers($data);

        redirect('professeurs/viewprof');    }

}