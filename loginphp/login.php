<?php
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['user_pass'];
    if($user_name=='admin@dandev.net' && $user_pass=='12345'){
        echo "Dang nhap thanh cong!";
    }
    else{
        echo "Ten dang nhap hoac mat khat khong dung!";
    }
?>
