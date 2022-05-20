<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
     
     
      $this->view('pages/index');
    }

    public function admin(){
     
     
      $this->view('pages/admin');
    }

    public function etudiant(){
     
     
      $this->view('pages/etudiant');
    }

    public function parents(){
     
     
      $this->view('pages/parents');
    }

    // public function professeurs(){
     
     
    //   $this->view('pages/professeurs');
    // }

    
    public function statistique(){
     
     
      $this->view('pages/statistique');
    }

    
  }