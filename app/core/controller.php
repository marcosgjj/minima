<?php

Class Controller 
{
	protected function view($view)
    {
        if(file_exists("../app/views/". $view .".php"))
        {
            include "../app/views/". $view .".php";
        }else{
            include "../app/views/404.php";
        }
    }
    protected function loadModel($model)
    {
        if(file_exists("../app/model/". $model .".php"))
        {
            include "../app/model/". $model .".php";
            return $model = new $model();
        }
        
        return false;
    }

    
}