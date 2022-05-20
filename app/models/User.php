<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    // public function register($data){
    //   $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
    //   // Bind values
    //   $this->db->bind(':name', $data['name']);
    //   $this->db->bind(':email', $data['email']);
    //   $this->db->bind(':password', $data['password']);

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM admins WHERE Email = :email AND Pwd = :password ');
      $this->db->bind(':email', $email);
      $this->db->bind(':password', $password);

      $row = $this->db->single();

      if(!empty($row)){
        return $row;
      } else {
        return false;
      }
    }

    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM admins WHERE Email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }