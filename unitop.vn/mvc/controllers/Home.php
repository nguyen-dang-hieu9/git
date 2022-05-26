<?php
class Home extends Controller{
    function SayHi(){
        $teo=$this->model("sinhvienmodel");
        echo $teo->GetSV();
    }

    function Show($a,$b){
        $teo=$this->model("sinhvienmodel");
        $tong= $teo->Tong($a,$b);//3
        $this->view("aoxau",[
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SV"=>$teo->SinhVien()
        ]);
    }
}
?>