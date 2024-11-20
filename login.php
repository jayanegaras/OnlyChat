<?php
require_once 'APP/init.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect the form data
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    // Create Object
    $login = new Login($username, $password);

    if ($login->Check()) {
        header("Location: main/");
        session_start();
    } else {
        header("Location: ../SLEBEW?error=true");
    };
}
