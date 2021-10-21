<?php 

Class Teste extends Controller
{

    function index()
    {
        $data['page_title'] = "teste";
        $this->view("notus-js-main/teste", $data);   
    }
    
}