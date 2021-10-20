<?php 

Class Teste extends Controller
{

    function index()
    {
        $data['page_title'] = "teste";
        $this->view("Minima_template/teste", $data);   
    }
    
}