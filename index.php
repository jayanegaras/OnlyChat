<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-container">
        <div class="nav">
            <div class="button clicked" data-target="login">
                <h2>Login</h2>
            </div>
            <div class="button" data-target="register">
                <h2>Register</h2>
            </div>
        </div>
        <div class="contain hidden show" id="login">
            <form action="login.php" method="POST">
                <ul>
                    <li>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" autocomplete="off" required placeholder="Enter your username">
                    </li>
                    <li>
                        <label for="password">Password:</label>
                        <input class="password" type="password" name="password" placeholder="Enter your password" id="passlog">
                    </li>
                    <li>
                        Show Password
                        <input data-target="passlog" type="checkbox" class="checklist">
                    </li>
                    <li>
                        <?php if (isset($_GET["error"])): ?>
                            <p class="ayam" style="color: red;">
                                <?= "Password atau Username Salah"; ?>
                            </p>
                        <?php endif; ?>
                    </li>
                    <li>
                        <button type="submit" name="sign" class="sign" action="">Sign</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="contain hidden" id="register">
            <form action="register.php" method="POST">
                <ul>
                    <li class="title">
                        <p>Select Your Animal Spirit</p>
                    </li>
                    <li>
                        <!-- Frog Option -->
                        <img src="src/katak.jpg" alt="katak" class="radio-image" data-value="katak">
                        <input type="radio" name="userAnimal" value="katak" id="radio-katak">

                        <!-- Snake Option -->
                        <img src="src/ular.jpg" alt="ular" class="radio-image" data-value="ular">
                        <input type="radio" name="userAnimal" value="ular" id="radio-ular">

                        <!-- Snail Option -->
                        <img src="src/siput.jpg" alt="siput" class="radio-image" data-value="siput">
                        <input type="radio" name="userAnimal" value="siput" id="radio-siput">
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" class="password" name="password" placeholder="Enter your password" id="passregister">
                    </li>
                    <li>
                        Show Password
                        <input data-target="passregister" type="checkbox" class="checklist">
                    </li>
                    <li>
                        <button type="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <script src="login.js"></script>
</body>

</html>