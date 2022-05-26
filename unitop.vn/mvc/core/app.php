<?php
class app{

    protected $controller="Home";
    protected $action="SayHi";
    protected $param=[];
    function __construct(){
        //Array ( [0] => Home [1] => Sayhi )
        $arr=$this->Urlprocess(); 
        //print_r($arr);     
        //Xu li controller kt co ton tai file 
        if(  file_exists("./mvc/controllers/".$arr[0].".php")   ){
            $this->controller=$arr[0];
            unset($arr[0]);
        }  
        require_once "./mvc/controllers/". $this->controller.".php"; 
        $this->controller=new $this->controller;
        //Xu li action
        if(isset ($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action=$arr[1];               
            }
            unset ($arr[1]);
        }
        

        //Xu li param
        $this->params=$arr?array_values($arr):[];
        call_user_func_array([$this->controller,$this->action],$this->params);
    }   

    function Urlprocess(){
        if (isset ($_GET["url"])){           
            return explode("/",filter_var(trim($_GET["url"],"/")));  
        }       
    }
}
?>