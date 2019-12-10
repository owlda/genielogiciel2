<?php
// Controller 'Connect'
class Connect extends Controller {

    public function __construct() {

    }
    public function login(){

        $this->view('connect/login');
    }
     public function signup(){

         $this->view('connect/signup');
     }

     public function error(){
         $this->view('connect/error');
     }

}