<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Sign in";
    require_once "blocks/head.php";
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/sign_in.js"></script>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol" style="width: 100%">
        <input type="text" placeholder="Login name" id="login_name" name="login_name"><br/>
        <input type="text" placeholder="Email" id="email" name="email"><br/>
        <input type="password" placeholder="Password" id="password" name="password"><br/>
        <input type="password" placeholder="Repeat password" id="r_password" name="repeat_password"><br/>
        <div id="messageShow"></div>
        <button id="sign_in">Sign IN</button><br/>
        <div class="success" style="display: none">You are registered</div>
    </div>
</div>
<?php require_once "blocks/footer.php"?>

</body>
</html>