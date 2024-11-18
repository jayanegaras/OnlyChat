<?php
require_once 'connect.php';

class Login
{
    public $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->query = "SELECT * FROM users WHERE username = '$username'";
    }

    public function Check()
    {
        $connection = new Connect($this->query);
        $row = $connection->read($connection->query());
        var_dump($row);
        if (password_verify($this->password, $row["password"])) {
            return true;
        } else {
            return false;
        }
    }
}

// $Login = new Login("egagantengdad7a9c03397627e1e4e", "ayamgoreng");
// var_dump($Login->Check());
