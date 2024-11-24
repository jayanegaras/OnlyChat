<?php
session_start();
require_once __DIR__ . '/../APP/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION["username"];
    $message = $_POST["message"];

    $send = new Chat($message, $username);
    $send->sendChat();
}
