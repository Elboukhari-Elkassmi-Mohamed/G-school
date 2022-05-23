<?php 
// This is a Modal 
class Etudiant {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }

    public function getStudents(){

       $this->db->query('SELECT * FROM `etudiants`');
       
         // execution de la query / fetch all
       $results = $this->db->resultSet(); 

       return $results;

      }

      public function addStudent($data) {

        $this->db->query("INSERT INTO `etudiants` (`Matricule` , `Nom` , `Genre`, `Classe`, `Adresse` , `Date_de_naissance`, `Email` ,`Nom_parents` , `fk_parent`)
                          VALUES (:stud_Matricule,:stud_Nom,:stud_Genre,:stud_Classe ,:stud_Adresse,:stud_Date_de_naissance,:stud_Email,:stud_Nom_parents,:stud_parent_id)");

        $this->db->bind(':stud_Matricule', $data['Matricule']);  
        $this->db->bind(':stud_Nom', $data['Name']);                 
        $this->db->bind(':stud_Genre', $data['Genre']);                 
        $this->db->bind(':stud_Classe', $data['Classe']);                 
        $this->db->bind(':stud_Adresse', $data['Adresse']);                 
        $this->db->bind(':stud_Date_de_naissance', $data['Date']);                 
        $this->db->bind(':stud_Email', $data['Email']);           
        $this->db->bind(':stud_Nom_parents', $data['studentParent']);    
        $this->db->bind(':stud_parent_id', $data['foreign_key']);    

        if ($this->db->execute()) {
          return true;
        } else {
          return false;
      }
      }
      
      public function editStudent($id ,$data) {

        $this->db->query("UPDATE `etudiants` SET `Matricule`=:stud_Matricule,`Nom`=:stud_Nom,`Genre`=:stud_Genre,`Classe`=:stud_Classe,`Adresse`=:stud_Adresse,`Date_de_naissance`=:stud_Date_de_naissance,`Email`=:stud_Email,`Nom_parents`=:stud_Nom_parents,`fk_parent`=:stud_parent_id WHERE `id`=:stud_id");

        $this->db->bind(':stud_Matricule', $data['Matricule']);  
        $this->db->bind(':stud_Nom', $data['Name']);                 
        $this->db->bind(':stud_Genre', $data['Genre']);                 
        $this->db->bind(':stud_Classe', $data['Classe']);                 
        $this->db->bind(':stud_Adresse', $data['Adresse']);                 
        $this->db->bind(':stud_Date_de_naissance', $data['Date']);                 
        $this->db->bind(':stud_Email', $data['Email']);           
        $this->db->bind(':stud_Nom_parents', $data['studentParent']);    
        $this->db->bind(':stud_parent_id', $data['foreign_key']);
        $this->db->bind(':stud_id', $id);        

      if ($this->db->execute()) {
        return true;
      } else {
        return false;
    }
      }

      public function deleteStudent($id) {

          $this->db->query("DELETE FROM `etudiants` WHERE `id`= :id");
          $this->db->bind(':id',$id);
  
          if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
  
  
      }

      public function getStudentDataById($id) {
        $this->db->query(" SELECT * FROM `etudiants` WHERE `id`= :id");
        $this->db->bind(":id",$id);

        $results = $this->db->single();
        return $results ;
      }
      // ----------------------------------------
      public function GetStudentNumber(){
        $this->db->query("SELECT COUNT(*) FROM `etudiants`");
        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }

      }
      public function getMaleCount(){
        $this->db->query("SELECT COUNT(*) FROM `etudiants` WHERE genre='M'");
        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
      }
      public function getFemaleCount(){
        $this->db->query("SELECT COUNT(*) FROM `etudiants` WHERE genre='F'");
        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
      }
      
      public function getNumberClass(){
        $this->db->query("SELECT  COUNT(DISTINCT class) FROM `etudiants` ");
        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
      }
}
