<?php
// The router
Class App 
{

    private $controller = "home";
    private $method = "index";
    private $params = []; 

    public function __construct() // initial function 
    {   
        /// var url gets push into the split function and gets separated to a array (params)
        $url = $this->splitURL();

        /// analyse the position of array and garants the positions at home page from controller.
        if(file_exists("../app/controllers/". strtolower($url[0]) .".php"))
        {
            $this->controller = strtolower($url[0]);
            unset($url[0]); //takes out the value
        }
        
        require "../app/controllers/". $this->controller .".php";
        $this->controller = new $this->controller; // the var object

        /// if exists any at the position, access the index
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]); //takes out the value
            }
        }
        ///run the class and method
        $this->params = array_values($url);
        call_user_func_array([$this->controller,$this->method], $this->params);
    }
    
    /// explode separates, filter_var security from external inputs, trim separates
    private function splitURL() // splits the URL by the denominator /
    {
        
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
    }

}
