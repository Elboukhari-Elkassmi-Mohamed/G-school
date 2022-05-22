<?php 

    class Parents extends Controller {

        public function __construct(){
            $this->parentmodel = $this ->model('Parentt');

        }

        public function viewparent(){
            $data = $this->parentmodel->getparent();

            $this->view('pages/parents',$data);
        }
        
        public function addparent(){
            if(isset($_POST['add'])){
                $data = [
                'Matricule' => $_POST['Matricule'],
                'Nom_complet' => $_POST['Nom_complet'],
                'Genre' => $_POST['Genre'],
                'Job' => $_POST['Job'],
                'Adresse' => $_POST['Adresse'],
                'Phone' => $_POST['Phone'],
                ];
            }
            $data = $this->parentmodel->ajouteparent($data);
            redirect('parents/viewparent');
        }
    }

