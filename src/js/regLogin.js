$(function () {

    //对哪个表单做验证
    $('#regForm')
        .bootstrapValidator({
            message: 'This value is not valid', //全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对那些字段做验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 3, //最小
                            max: 12, //最大
                            message: '用户名长度必须在3~12位之间'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_]+$/,
                            message: '用户名只能包含大写、小写、数字和下划线'
                        },
                        remote: {
                            url: 'api/mysqlVerify.php',
                            message: '用户已存在',
                            delay: 10,
                            type: 'POST'
                        }
                    }

                },
                password: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                        // ,
                        // regexp: {
                        //     regexp: /^[a-zA-Z0-9_]+$/,
                        //     message: '用户名只能包含大写、小写、数字和下划线'
                        // }

                    }

                },
                repeatPassword: {
                    message: '确认密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '确认密码长度必须在6~18位之间'
                        },
                        //密码相同性的验证
                        identical: {
                            field: 'password', //对哪个字段做比较
                            message: '两次输入的密码不一致'
                        }
                    }
                },
                mobile: {
                    message: '手机号码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '手机号码必须填写'
                        },
                        //手机号码正则表达式验证
                        regexp: {
                            regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                            message: '手机号码格式不正确'
                        }
                    }
                },
                email: {
                    message: '电子邮件验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '电子邮件必须填写'
                        },
                        //电子邮件的规则
                        emailAddress: {
                            message: '电子邮件格式不正确'
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


            // Use Ajax to submit form data
            // var reqUrl="/api/usersReg.php"; 请求地址
            var reqData = $form.serialize(); //表单数据
            console.log(reqData);
            $.post('api/usersReg.php', reqData, function (data) {
                // console.log(data);
                // if (data.isSuccess) {
                //     // alert(data.msg);
                //  
                // } else {
                //     // alert(data.msg);
                // }
                $('#msgShowModal').modal('show');
                $('#save').on('click',function(){
                    location.href="./login.php";
                })
            }, 'json');
        });
});





//  登录
$(function () {
    $('#loginForm')
        .bootstrapValidator({
            message: 'This value is not valid', //全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对那些字段做验证，注意使用name属性
            fields: {
                //对用户名做验证
                userName: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 3, //最小
                            max: 12, //最大
                            message: '用户名长度必须在3~12位之间'
                        }
                    }
                },
                passWord: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                        // ,
                        // regexp: {
                        //     regexp: /^[a-zA-Z0-9_]+$/,
                        //     message: '用户名只能包含大写、小写、数字和下划线'
                        // }

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
            $.post('/api/usersLogin.php', $form.serialize(), function (data) {
                if (data.isSuccess) {
                    $('#msgShowTitle').text('登录成功~~~');
                    $("#msgShowContent").html(`<span class='glyphicon glyphicon-ok'></span> ${data.msg}，等待<span id
                ='num'>6</span>秒后跳转到个人中心`);
                    let num = 6;
                    var timesID = setInterval(() => {
                        num--;
                        $("#num").text(num);
                        if (num == 0) {
                            clearInterval(timesID);
                            location.href = "./personal.php"; //跳转到登录页面
                        }
                    }, 1000);
                } else {
                    $('#msgShowTitle').text('登录失败~~~');
                    $("#msgShowContent").html(`<span class='glyphicon glyphicon-remove'></span> ${data.msg}`);

                }

                $('#msgShowModal').modal('show');
            }, 'json');
        });


});