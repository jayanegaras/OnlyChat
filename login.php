<?php
session_start();
require_once 'APP/init.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect the form data
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    // Create Object
    $login = new Login($username, $password);

    if ($login->Check()) {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location: main/");
        exit;
    } else {
        session_unset();
        session_destroy();
        header("Location: ../SLEBEW?error=true");
    };
}
