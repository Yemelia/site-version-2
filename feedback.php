<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Обрантая свзять";
    require_once "blocks/head.php";
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/feedback.js"></script>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol">
        <input type="text" placeholder="Имя" id="name" name="name"><br/>
        <input type="text" placeholder="Email" id="email" name="email"><br/>
        <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br/>
        <textarea name="message" id="message" placeholder="Введите сообщение"></textarea><br/>
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" value="Отправить"><br/>
    </div>
    <?php require_once "blocks/rightCol.php"?>
</div>
<?php require_once "blocks/footer.php"?>

</body>
</html>