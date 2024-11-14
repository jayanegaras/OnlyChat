<?php
require_once 'connect.php';

class CreateUser
{
    public $username;
    public $password;
    public $profile;
    private $query;

    public function __construct($username, $password, $profile)
    {
        $this->username = $username;
        $this->password = $password;
        $this->profile = $profile;
        $this->query = "INSERT INTO users VALUES('$username', '', '$password', '$profile')";
    }

    public function create()
    {
        $connect = new Connect($this->query);
        $connect->query();
    }
}



// This is Da Test
// $UserBaru = new CreateUser("egaganteng", "ayamgoreng", "ayam.jpg");
// $UserBaru->create();
