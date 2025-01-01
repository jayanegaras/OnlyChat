<?php
require_once 'connect.php';

class CreateUser
{
    public $username;
    public $password;
    public $profile;
    public $token;
    private $query;

    public function __construct($username, $password, $profile)
    {
        $this->username = $username . mt_rand(10000, 99999);
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->profile = $profile;
        $this->token = base64_encode($this->username . time());


        $this->query = "INSERT INTO users VALUES('$this->username', '', '$this->password', '$profile', '$this->token')";
    }

    public function create()
    {
        if (!$this->CheckUsername()) {
            $connect = new Connect($this->query);
            $connect->query();
            return $this->token;
        } else {
            return false;
        }
    }
    public function callUsername()
    {
        return $this->username;
    }
    public function CheckUsername()
    {
        $checkQuery = "SELECT username FROM users WHERE username = '$this->username'";
        $userCheck = new Connect($checkQuery);
        if ($userCheck->read($userCheck->query())) {
            return true;
        } else {
            return false;
        };
    }
}



// This is Da Test
// $UserBaru = new CreateUser("egaganteng", "ayamgoreng", "ayam.jpg");
// $UserBaru->create();
