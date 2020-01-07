<?php

class  App
{
    //http://localhost/liveMvc/home/sayHi/1/2/3
    protected $controller="home";
    protected $action;
    protected $params;
    // dùng đe chuyen hướng sang các controller tuong ung
    public function __construct()
    {

        require_once "./mvc/controllers/home.php";
        $this->controller= new $this->controller;
         call_user_func(['home','getdata'],'');
    }
}

?>