<?php 
class Professeur {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }

      public function getteacher($id){
       $this->db->query('SELECT * FROM professeurs WHERE prof_id = :id');
       $this->db->bind(':id',$id);
       
         // execution de la query / fetch all
         $result = $this->database->single();

         return $result;

      }

}
