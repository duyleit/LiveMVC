<?php
// trung gian de ket noi model
class Controll
{
    public function init($model)
    {
        return new $model;
    }
 public  function model($model)
 {
     require_once "./mvc/models/".$model."php";
     return new $model;
 }

 public function view($view)
 {
     require_once "./mvc/views/".$view."php";
 }


}

?>