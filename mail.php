<?php

$name = $_POST['user_name'];
$tel = $_POST['user_tel'];
$msg = $_POST['user_msg'];

ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "ivanovanya201915@gmail.com";
$to = "shynganator@gmail.com";
$subject = "Заявка на запись";
$message = '' . $name . ' оставил заявку,<br> Его телефон ' . $tel . '<br>Сообщение: <br>' . $msg;
$headers = "From:" . $from;;

if (mail($to, $subject, $message, $headers)) {
    header('location: thank-you.html');
} else {
    echo 'Error';
}
