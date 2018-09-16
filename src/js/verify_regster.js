// =======表单的验证-注  册页面=======//
$(function () {
    $('#defaultForm')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        stringLength: {//检测长度
                            min: 6,
                            max: 30,
                            message: '长度必须在6-30之间'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        stringLength: {//检测长度
                            min: 6,
                            max: 30,
                            message: '长度必须在6-30之间'
                        }
                    }
                },
                confirmPassword: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        stringLength: {//检测长度
                            min: 6,
                            max: 30,
                            message: '长度必须在6-30之间'
                        },
                        identical: {//与指定控件内容比较是否相同，比如两次密码不一致
                            field: 'confirmPassword',//指定控件name
                            message: '输入的内容不一致'
                        }
                    }
                },
                phoneNumer: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        regexp: {//正则验证
                            regexp: /^1(?:3\d|4[4-9]|5[0-35-9]|6[67]|7[013-8]|8\d|9\d)\d{8}$/,
                            message: '所输入的字符不符要求'
                        },
                    }
                },
                inputEmill: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        emailAddress: {//验证email地址
                            message: '不是正确的email地址'
                        },
                    }
                },
            }
        })
        .on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form inst nce
            var $form = $(e.target);
            // console.log($form)
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            //=======定 义 变 量保存数据= =======//
            // console.log(data);//user name=1111111&password=111111&confirmPassword=11
            // 				  // 1111&phoneNumer=13856456666&inputEmill=111111%40qq
            // Use Ajax to submit form data
            $.post(
                './Api/usernameApi.php',//地 址后台
                $form.serialize(),//数据
                function (result) {//  回来的数据
                    // console.log(result);
                    if (result.isSuccess) {
                        alert(result.msg);
                        location.href = './login.php';
                    } else {
                        alert(result.msg);
                    }
                },
                'json'
            );
        });
});

// =======表单的验证-登陆页面=======//
$(function () {
    $('#loginFrom')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username_login: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        stringLength: {//检测长度
                            min: 6,
                            max: 30,
                            message: '长度必须在6-30之间'
                        }
                    }
                },
                login_password: {
                    validators: {
                        notEmpty: {//检测非空,radio也可用
                            message: '文本框必须输入'
                        },
                        stringLength: {//检测长度
                            min: 6,
                            max: 30,
                            message: '长度必须在6-30之间'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post(
                './Api/userCheakApi.php',
                $form.serialize(),
                function (result) {
                   // console.log(result);
                    if (result.isSuccess) {
                        $('#msgShowTitle').text(result.msg);
                        $("#msgShowContent").html(`<span class='glyphicon glyphicon-ok'></span> ${result.msg}，等待<span id
                ='num'>6</span>秒后跳转到个人 中心`);
                        let num=6;
                        var timeT=setInterval(function () {
                            num--;
                            $("#num").text(num);
                            if(num==0){
                                clearInterval(timeT);
                                location.href="./PersonalCenter.php";
                            }
                        },1000);

                        // alert(result.msg);
                        $('#msgShowModal').modal('show')
                        // location.href = './register.php';
                    } else {
                        alert(result.msg);
                    }
                },
                'json'
            );
        });
});