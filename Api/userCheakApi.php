<?php
$username = $_POST["username_login"];
$password = md5($_POST["login_password"]);

$link = mysqli_connect("localhost", "root", "root", "php", 3306);
$sql = "select * from  userinfo where username ='" . $username . " ' and pwd='" . $password . "'";

// $rs=mysqli_fetch_assoc($sql);
$result = mysqli_query($link, $sql);
$rs = mysqli_fetch_assoc($result);
//var_dump($rs);
// var_dump($result);
if ($rs != null) {
    $rsArray = ["isSuccess" => true, "msg" => "用户登陆成功!"];
    echo json_encode($rsArray);

    //记录session对象
    //===创建session-start对象====//
    session_start();
    //====获取变量======//
    $_SESSION['username']=$rs['username'];
//    var_dump($_SESSION['username']) ;
    $_SESSION['userId']=$rs['userid'];
//        var_dump($_SESSION['userId']) ;
//    var_dump($_SESSION['username']);


} else {
    $rsArray = ["isSuccess" => false, "msg" => "用户登陆失败!"];
    echo json_encode($rsArray);
}
mysqli_free_result($result);
mysqli_close($link);
?>

