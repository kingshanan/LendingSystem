<?php
$username=$_POST["username"];
$password=md5($_POST["password"]);
$phoneNumer=$_POST["phoneNumer"];
$inputEmill=$_POST["inputEmill"];

 $link=mysqli_connect("localhost","root","root","php",3306);

     $sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$password."','".$phoneNumer."','".$inputEmill."')";

    $result=mysqli_query($link,$sql);
    if($result){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
    echo json_encode($rsArray);
    }
    else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败!"];
    echo json_encode($rsArray);
    }
    
?>