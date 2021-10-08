<?php 

Class About extends Controller
{

    function index()
    {
        $data['page_title'] = "About";
        $this->view("Minima_template/about",$data);
    }


}