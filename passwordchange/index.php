<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <body>
        <div class="login-container">
            <div class="nav">
                <div class="button clicked" data-target="login">
                    <h2>Password Change</h2>
                </div>
            </div>
            <div class="contain hidden show" id="login">
                <form action="passwordchange.php" method="POST">
                    <ul>
                        <?php if (!isset($_POST["token"])): ?>
                            <li>
                                <label for="token">Token</label>
                                <input type="text" name="token" id="token" autocomplete="off" required placeholder="Enter your token">
                            </li>
                        <?php endif; ?>
                        <li>
                            <h2>Your Account</h2>
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
                            <button type="submit" name="sign" class="sign" action="">Change</button>
                        </li>
                    </ul>
                </form>
            </div>

        </div>
        <script src="../login.js"></script>
    </body>

</html>