
$(document).ready(function () {

    $("#sign_in").click(function () {
        $('#messageShow').hide();
        var name =$("#login_name").val();
        var email =$("#email").val();
        var password =$("#password").val();
        var repeat_password =$("#repeat_password").val();
        var fail="";
        if(name.length <3){
            fail="Имя должно быть больше 3ех симвалов <br/>";
            $("#login_name").css("border-color", "red");
        }
        else if (/[^a-zA-Z0-9_-]/.test(name))
            return "В имени пользователя разрешены только a-z, A-Z, 0-9, - и _.\n"
        else $("#login_name").css("border-color", "#106a1b");

        if(!((email.indexOf(".") > 0) &&
            (email.indexOf("@") > 0)) ||
            /[^a-zA-Z0-9.@_-]/.test(email)){
            fail += "Неккоректный email <br/>";
            $("#email").css("border-color", "red");
        }
        else $("#email").css("border-color", "#106a1b");

        if(password.length<5) {
            fail = fail + "Тема сообщений не меньше 5 символов <br/>";
            $("#password").css("border-color", "red");
        }
        else if (password != repeat_password){
            fail = fail + "Пароли не совпадают <br/>";
        }
        else $("#password").css("border-color", "#106a1b");

        if(fail != "") {
            $('#messageShow').html(fail + "<div class='clear'><br></div>");
            $('#messageShow').show();
            return false;
        }

        $.ajax({
            url:"ajax/feedback_ajax.php",
            type:"POST",
            data :{'login_name':name, 'email':email, 'password':password},
            success:function (data) {
                $('#messageShow').html(data + "<div class='clear'><br></div>");
                $("#messageShow").css("color", "#106a1b");
                $('#messageShow').show();
            }
        })



    })




})