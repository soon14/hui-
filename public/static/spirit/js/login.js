var baseUrl = 'http://172.26.2.215:8089';

window.onload = function () {
    var spans = document.getElementById("change").getElementsByTagName("span")
    // ;
    console.log(spans);
    var divs = document.getElementById("userInfo").getElementsByClassName("phone_user")

    this.console.log(divs)
    for (var i = 0; i < spans.length; i++) {
        spans[i].index = i //创建按钮索引
        spans[i].onclick = function () { //每一个按钮点击事件的方法
            for (var i = 0; i < spans.length; i++) {
                spans[i].classList.remove("active");
                divs[i].style.display = "none";
            }
            //	将对应的索引绑定到一起,点击对应的按钮,对应的内容div就会显示
            spans[this.index].classList.add("active");

            divs[this.index].style.display = "block"
        }
    }

};

//登录注册模块
var login_module = (function () {
    //手机号登录
    var phone_login_info = function phone_login_info(objthis){
        var url = baseUrl + '/api/portal/login';
        var phone = $(objthis).parent().find('.phone_input').val();
        var check_phones = check_phone(phone);
        if(check_phones == false){
            //layer.msg('手机号不合法',{icon:2,time:2000});return;
        }
        var data = new Object();
        data.userMobile = phone;
        $.ajax({
            type:"post",
            url: url,
            data: data,
            headers:{
                "Content-Type": "application/json",
            },
            dataType:'json',
            success: function(ret) {
                if(ret.status == true){
                    location.href = '/home/index/index';
                }
            },
            error: function(data) {
                console.log(data)
            }
        });
    };
    //账号登录
    var account_login_info = function account_login_info(objthis){
        var url = baseUrl + '/api/portal/login';
        var phone = $(objthis).parent().find('.accout_input');
        var check_phones = check_phone(phone);
        if(check_phones == false){
            //layer.msg('手机号不合法',{icon:2,time:2000});return;
        }

        var data = {};
        data.userMobile = phone;
        $.ajax({
            type:"post",
            url: url,
            data: JSON.stringify(data),
            headers:{
                "Content-Type": "application/json",
            },
            success: function(ret) {

                location.href = '/home/index/index';
            },
            error: function(data) {
                console.log(data)
            }
        });
    };
    //电话号码验证
    function check_phone(phone){
        var tel_reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
        if(tel_reg.test(phone)){
            return true;
        }else {
            return false;
        }
    };

    return {
        phone_login_info:phone_login_info,
        account_login_info:account_login_info,
    };
})();