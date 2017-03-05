<?php
require_once "../functions/functions.php";


function addNewUser(){
    global $mysqli;
    connectDB();
    $login_name = trim(htmlspecialchars($_POST['login_name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $mysqli->query("INSERT INTO `users` VALUES(NULL, '$login_name', '$email', '$password')");
    closeDB();
}

if(isset($_POST['done'])){
    addNewUser();
}

