<?php

$mysqli = false;

function connectDB(){
    global $mysqli;
    $mysqli = new mysqli('emelya_learning', 'root', '', 'mysitebase');
    $mysqli ->query("SET NAMES 'utf-8'");
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}


function getNews($limit, $id){
    global $mysqli;
    connectDB();
    if($id){
        $where = "WHERE `id` = ".$id;
        $result = $mysqli->query("SELECT * FROM `news`$where ORDER BY `id` DESC LIMIT $limit");
    }
    else
        $result = $mysqli->query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray($result);
    else
        return $result->fetch_assoc();
}

function resultToArray($result){
    $array = array();
    while (($row = $result -> fetch_assoc()) != false){
        $array[] = $row;
    }
    return $array;

}


function addNewUser(){
    global $mysqli;
    connectDB();
    if(isset($_POST['done'])){
        $login_name = htmlspecialchars($_POST['login_name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $mysqli->query("INSERT INTO `users` VALUES(NULL, '$login_name', '$email', '$password')");
    }
    closeDB();

}