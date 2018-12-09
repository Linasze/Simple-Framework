<?php

class Pages extends Controller {
   

    public function index(){

        $data = [
            'title' => 'Welcome',
            'description' => 'to Simple MVC Framework'            
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'about' => 'About Us'
        ];
        $this->view('pages/about', $data);
          
    } 
}