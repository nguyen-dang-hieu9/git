<?php
    //lay du lieu tu form gui len
    $u=$_POST['Username'];
    $p=$_POST['password'];
    //ket noi csdl
    $db=mysqli_connect("localhost","root","","csdldemo");
    //truy van du lieu 
    $sql="select* from users where username='$u' and password='$p'";
    //thuc thi truy van
    $rs=mysqli_query($db,$sql);
    if(mysqli_num_rows($rs)>0){
        echo "Dang nhap thanh cong";
    }
    else{
        echo "that bai";
        require_once "login.html";
    }
?>