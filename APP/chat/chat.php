<?php
class Chat
{
    private $message;
    private $username;
    private $timestamp;
    private $query;
    private $forum;

    public function __construct($message, $username, $forum)
    {
        $this->message = $message;
        $this->username = $username;
        $this->timestamp = time();
    }
    public function sendChat() {}
    public function fetchChat() {}
}
