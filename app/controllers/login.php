<?php 

Class Login extends Controller
{

    function index()
    {
        $data['page_title'] = "Login";
        $this->view("Minima_template/login", $data);   
    }
    
}