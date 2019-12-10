<?php
// Controller 'Pages'
class Pages extends Controller {

    public function __construct() { }

    public function home(){
        $data = ['title' => 'Title here'];
        $this->view('pages/home', $data);
    }


    public function index(){

        $this->view('pages/index');
    }

    public function about(){

        $this->view('pages/about');
    }


}
