<?php session_start();
if (!isset($_SESSION["username"])) {
    header('Location: ../index.php');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlychat</title>
    <link rel="stylesheet" href="chat.css">
    <link rel="shortcut icon" href="../src/icon.svg" type="image/x-icon">
</head>

<body>
    <!-- Header Section -->
    <header>
        <img src="../src/onlychat.png" alt="Onlychat">
    </header>
    <div class="main">
        <div class="profile">
            <h2>Change Password</h2>
            <img src="../src/meng.webp" alt="Meng" loading="lazy">
        </div>
        <!-- Forum Container -->
        <div class="forum-container" id="forumContainer">
            <!-- Chat Display Area -->
            <div class="chat-box" id="contain">
                <!-- <div class="message message-left">
                    <span class="username">User123:</span>
                    <p>Hey, anyone here?</p>
                </div>
                <div class="message message-left">
                    <span class="username">EgaGanteng123:</span>
                    <p>Slebew banget gak sih?</p>
                </div>
                <div class="message message-right">
                    <span class="username">Anon456:</span>
                    <p>Yeah, what's up?</p>
                </div> -->
            </div>

            <!-- Message Input Area -->
            <div class="chat-form">
                <input type="text" placeholder="Type your message..." name="message" id="input" required>
                <button id="button">Send</button>
            </div>
        </div>
    </div>
    <script src="chat.js"></script>
</body>

</html>