<?php
session_start();
require_once __DIR__ . '/../APP/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $username = $_SESSION["username"];
    $message = "template";

    $fetch = new Chat($message, $username);
    echo json_encode($fetch->fetchChat());
}
