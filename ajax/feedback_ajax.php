<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);
if ($name == '' || $email == '' || $email == '' || $message == ''){
    echo "Запоните все поля";
    exit;
}
//Отправка

$subject = "=?utf-8?".base64_encode($subject)."?=";
$headers = "From: $email\rnReply-to: $email\r\nContent-type: text/html; charset = utf-8\r\n";
//if (mail("your_address@gmail.com", $subject, $message, $headers ))
  //  echo "Сообщение отрпавлено";
//else
    echo "Ошибка при отправке";
