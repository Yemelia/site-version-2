
$(document).ready(function () {

    $("#done").click(function () {
        $('#messageShow').hide();
        var name =$("#name").val();
        var email =$("#email").val();
        var subject =$("#subject").val();
        var message =$("#message").val();
        var fail="";
        if(name.length <3){
            fail="Имя должно быть больше 3ех симвалов <br/>";
            $("#name").css("border-color", "red");
        }
        else $("#name").css("border-color", "#106a1b");

        if(email.split('@').length-1 == 0 || email.split('.').length-1==0){
            fail += "Неккоректный email <br/>";
            $("#email").css("border-color", "red");
        }
        else $("#email").css("border-color", "#106a1b");

        if(subject.length<5) {
            fail = fail + "Тема сообщений не меньше 5 символов <br/>";
            $("#subject").css("border-color", "red");
        }
        else $("#subject").css("border-color", "#106a1b");

        if(message.length<5) {
            fail = fail + "Тема сообщений не меньше 20 символов <br/>";
            $("#message").css("border-color", "red");
        }
        else $("#message").css("border-color", "#106a1b");

        if(fail != "") {
            $('#messageShow').html(fail + "<div class='clear'><br></div>");
            $('#messageShow').show();
            return false;
        }

        $.ajax({
            url:"ajax/feedback_ajax.php",
            type:"POST",
            data :{'name':name, 'email':email, 'subject':subject, 'message':message},
            success:function (data) {
                $('#messageShow').html(data + "<div class='clear'><br></div>");
                $("#messageShow").css("color", "#106a1b");
                $('#messageShow').show();
            }
        })



    })




})