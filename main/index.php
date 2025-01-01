<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlychat</title>
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <img src="" alt="">
        <h1>ONLYCHAT</h1>
    </header>
    <div class="main">
        <div class="profile">

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