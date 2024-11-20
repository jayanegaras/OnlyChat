<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Token</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contain">
        <div class="head">
            <h2>Your Token</h2>
        </div>
        <img src="../src/<?= substr($_GET["username"], 0, -5) . ".jpg" ?>" alt="profile">
        <br>
        <p><?= $_GET["token"] ?></p>
        <p><?= $_GET["username"] ?></p>
        <br>
        <a href="../index.php">Back to Login Page</a>
    </div>
</body>

</html>