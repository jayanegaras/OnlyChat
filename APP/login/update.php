<?php
require_once 'connect.php';

class Update
{
    private $username;
    private $password;
    private $profile;
    private $query;

    public function __construct($username, $password, $profile, $id)
    {
        $this->username = $username;
        $this->password = $password;
        $this->profile = $profile;
        $this->query = "UPDATE users SET
		username = '$username',
		password = '$password',
		profile = '$profile'
		WHERE id = $id;
	";
    }
    public function update()
    {
        $connect = new Connect($this->query);
        $connect->query();
    }
}


$UpdateUser = new Update("Egasukaayam", "AyamSukaEga", "bukanayam.jpg", 5);
$UpdateUser->update();
