<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;
class controller{
    // public function view($path){
    //     require_once(VIEWS.$path.".php");
    // }
    public function view($path,$param){
        extract($param);
        require_once(VIEWS.$path.".php");
    }

    // public function db(){
    //     $options=[
    //         'username'=>'root',
    //         'database'=>'proflioproj',
    //         //optional
    //         'password'=>'',
    //         'type'=>'mysql',
    //         'charset'=>'utf8',
    //         'host'=>'localhost',
    //         'port'=>'3306'
    //     ];

    //     return $db=new Database($options);
    // }

}