<?php
require_once 'connectChat.php';

class Chat
{
    private $message;
    private $username;
    private $query;

    public function __construct($message, $username)
    {
        $this->message = $message;
        $this->username = $username;
        $this->query = "INSERT INTO forum VALUES('', '$this->username', '$this->message')";
    }
    public function sendChat()
    {
        $connect = new connectChat($this->query);
        $connect->query();
    }
    public function fetchChat()
    {
        $fetchQuery = "SELECT * FROM forum";
        $dataPull = new connectChat($fetchQuery);

        $result = $dataPull->fetchAll($dataPull->query());
        $messages = [];

        foreach ($result as $res) {
            $messages[] = $res;
        }

        return $messages;
    }
}
