<?php 

Class Home extends Controller
{

    function index()
    {
        $DB = new Database();
        show($DB->read("SELECT * FROM images"));

        $this->view("home");   
    }
    
}