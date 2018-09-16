//登陆验证
$.get("/Api/Chickuser.php", function (data) {
    // console.log(data.isSuccess);
    if (!data.isSuccess) {
        alert("请登陆在做操作！！！");
        location.href = './login.php';
    }
}, 'json');