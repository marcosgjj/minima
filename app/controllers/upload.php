<?php 

Class Upload extends Controller
{

    function index()
    {
        header("Location:". ROOT . "upload/image");
        die;
    }
    
    function image()
    {    
        /*
        if(!$result = $user->check_logged_in())
        {
            header("Location:". ROOT . "login");
            die;
        }
        $data['page_title'] = "Upload";
        $this->view("Minima_template/upload", $data);

        */
        
        $user = $this->loadModel("user");
        
        if(!$result = $user->check_logged_in())
        {
            header("Location:". ROOT . "login");
            die;
        }
        $data['page_title'] = "Upload";
        $this->view("minima_template/upload", $data);   
    }
    
}