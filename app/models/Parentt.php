<?php 

    class Parentt {
            
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getparent(){
            $this->db->query('SELECT * FROM parent');

            // excute query 

            $result= $this->db->resultSet();
            if(is_null($result))
            {
                echo ' no result !';           
             }
             return $result;
        }


            public function ajouteparent($data){
                $this->db->query("INSERT INTO  parent (`Matricule`, `Nom_complet`, `Genre`, `Job`, `Adresse`, `Phone`) 
                VALUES(:Matricule,:Nom_complet,:Genre,:Job,:Adresse,:Phone)");
            
            // bind the values with placeholders 

           $this->db->bind(':Matricule', $data['Matricule']);
           $this->db->bind(':Nom_complet', $data['Nom_complet']);
           $this->db->bind(':Genre', $data['Genre']);
           $this->db->bind(':Job', $data['Job']);
           $this->db->bind(':Adresse', $data['Adresse']);
           $this->db->bind(':Phone', $data['Phone']);

           if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }



      }

      public function deleteparent($id){

        $this->db->query("DELETE FROM parent WHERE `id`= :id");
        $this->db->bind(':id',$id);

        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }


     }

    }