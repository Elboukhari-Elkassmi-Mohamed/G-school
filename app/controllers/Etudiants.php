<?php
    
    class Etudiants extends Controller{

        public function __construct(){

        $this->studentModel = $this->model('Etudiant');
        
        }

        public function showStudents(){
            // Get posts
            $data = $this->studentModel->getStudents();

            $this->view('pages/etudiant', $data);
          }

          public function addStudents(){
            if(isset($_POST['addStudent'])){
      
              $data = [
                'Matricule' => trim($_POST['stud_Matricule']),
                'Name' => strtoupper(trim($_POST['stud_Name'])),
                'Genre' => trim($_POST['stud_Genre']),
                'Classe' => trim($_POST['stud_Classe']),
                'Adresse' => trim($_POST['stud_Adresse']),
                'Date' => trim($_POST['stud_Date_Naissance']),
                'studentParent' => trim($_POST['stud_Parent_Name']),
                'Email' => trim($_POST['stud_Email']),
                'foreign_key' => trim($_POST['parent_id'])
              ];
         
              $data = $this->studentModel->addStudent($data);

              redirect('etudiants/showStudents');
          }

      }
      public function etudiantEdit($id,$data) {

        
        if(isset($_POST['editStudent'])){

        $data = [
          'id' => $id ,
          'Matricule' => trim($_POST['stud_Matricule']),
          'Name' => trim($_POST['stud_Name']),
          'Genre' => trim($_POST['stud_Genre']),
          'Classe' => trim($_POST['stud_Classe']),
          'Adresse' => trim($_POST['stud_Adresse']),
          'Date' => trim($_POST['stud_Date_Naissance']),
          'studentParent' => trim($_POST['stud_Parent_Name']),
          'Email' => trim($_POST['stud_Email']),
          'foreign_key' => trim($_POST['parent_id'])
        ];

        $data = $this->studentModel->editStudent($data);

        redirect('etudiants/showStudents');
      }
      }

      
      public function deleteStudent($id){


        $this->studentModel->deleteStudent($id);

        redirect('etudiants/showStudents'); 


      }
  }