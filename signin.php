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
    <div id="leftCol">
        <input type="text" placeholder="Login name" id="login_name" name="login_name"><br/>
        <input type="text" placeholder="Email" id="email" name="email"><br/>
        <input type="text" placeholder="Password" id="password" name="password"><br/>
        <input type="text" placeholder="Repeat password" id="repeat_password" name="repeat_password"><br/>
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" value="Sign IN"><br/>
    </div>
    <?php require_once "blocks/rightCol.php"?>
</div>
<?php require_once "blocks/footer.php"?>

</body>
</html>