<?php
    header("Content-Type:text/html;charset=utf-8;");
    session_start();
    session_destroy();
echo ' <script>alert(\'退出登陆成功！！！！\');location.href=\'http://localhost/login.php\';</script>';
?>