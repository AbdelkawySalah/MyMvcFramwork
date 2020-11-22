<?php
namespace MVC\controllers;
use MVC\core\controller;

class usercontroller extends controller{
        
    public function index(){
        $title='homeindexy';
        $this->view("user/index",['title'=>$title,'h1'=>'abdelkawy4']);

    }


}
