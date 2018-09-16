<?php
//=====接受数据 判断 =====//
    session_start();

    if (isset($_SESSION['username'])) {
        $rsArray = ["isSuccess" => true, "msg" => "用户查询成功成功!", "username" => $_SESSION['username']];
        echo json_encode($rsArray);
    } else {
        $rsArray = ["isSuccess" => false, "msg" => "用户没查询成功!"];
        echo json_encode($rsArray);
    }
?>
