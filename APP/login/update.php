<?php
require_once 'connect.php';

class Update
{
    public $token;
    public $password;
    public $profile;
    private $query;

    public function __construct($password,  $token)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->token = $token;
        $this->query = "UPDATE users SET
		password = '$this->password'
		WHERE token = '$token';
	";
    }
    public function update()
    {
        $connect = new Connect($this->query);
        $connect->query();
    }
    public function tokenVerify(){
        $queryToken = "SELECT * FROM users WHERE token = '$this->token'"
        $verify = new Connect($queryToken);
        return $verify->read($verify->query());
    }
}

// This is da test
// $UpdateUser = new Update("Egasukaayam", "ZWdhZ2FudGVuZ2U4Zjc0NGQ0NDgzMTZjY2QzN2QwNzg4N2QwNmNkZmQy");
// $UpdateUser->update();
