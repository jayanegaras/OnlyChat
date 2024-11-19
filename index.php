<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="register.php" method="POST">
        <p>Select Your Animal Spirit</p>

        <!-- Frog Option -->
        <img src="src/katak.jpg" alt="katak" class="radio-image" data-value="katak">
        <input type="radio" name="userAnimal" value="katak" id="radio-katak">

        <!-- Snake Option -->
        <img src="src/ular.jpg" alt="ular" class="radio-image" data-value="ular">
        <input type="radio" name="userAnimal" value="ular" id="radio-ular">

        <!-- Snail Option -->
        <img src="src/siput.jpg" alt="siput" class="radio-image" data-value="siput">
        <input type="radio" name="userAnimal" value="siput" id="radio-siput">

        <input type="password" id="password" name="password" placeholder="Enter your password">
        <input type="checkbox" onclick="togglePassword()"> Show Password
        <button type="submit">Submit</button>
    </form>
    <script src="login.js"></script>
</body>

</html>