<?php 
class Professeur {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }

      public function getteachers(){
       $this->db->query('SELECT * FROM professeurs');
       
         // execution de la query / fetch all
        $result = $this->db->resultSet();

        if (is_null($result))
   {
       echo "no resault my friendt";
    }

        return $result;
    
      }

      public function addteachers($data){
      $this->db->query("INSERT INTO professeurs (`Matricule`,`Nom_complet`,`Genre`,`Classe`,`Matiere`,`Phone`) 
          VALUES(:prof_Matricule,:prof_NComplet,:prof_Genre,:prof_Class,:prof_Matiere,:prof_Phone)");

        // bind the values with placeholders

           $this->db->bind(':prof_Matricule', $data['prof_Matricule']);
           $this->db->bind(':prof_NComplet', $data['prof_NComplet']);
           $this->db->bind(':prof_Genre', $data['prof_Genre']);
           $this->db->bind(':prof_Class', $data['prof_Class']);
           $this->db->bind(':prof_Matiere', $data['prof_Matiere']);
           $this->db->bind(':prof_Phone', $data['prof_Phone']);

           if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

        
      }

      
      public function deletteacher($id){

        $this->db->query("DELETE FROM professeurs WHERE `id`= :id");
        $this->db->bind(':id',$id);

        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }


     }
     // ---------------------------------------------
     public function getProfsNumber(){
      $this->db->query("SELECT COUNT(*) FROM professeurs");

      if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
     }
     

}