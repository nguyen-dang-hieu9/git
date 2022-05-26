<?php

class DB{
    //ket noi co so du lieu
    public $con;
    protected $servername="localhost";
    protected $username="root";
    protected $password="";
    protected $dbname="mvc";

    function __construct(){
        $this->con=mysqli_connect($this->servername,$this->username,$this->password);//connect db
        mysqli_select_db($this->con,$this->dbname);//chon db
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }

}

?>