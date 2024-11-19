<?php
require_once 'APP/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect the form data
    $userAnimal = $_POST['userAnimal'] ?? null;
    $password = $_POST['password'] ?? null;
    $profile = $userAnimal . ".jpg";

    // Create Object
    $newUser = new CreateUser($userAnimal, $password, $profile);
    $token = $newUser->create();
    $username = $newUser->callUsername();

    $url = "token?username=" . $username . "&token=" . $token;

    header("Location:" . $url);
    exit;
}
