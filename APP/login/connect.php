<?php

class Connect
{
    // bikin connection
    private $conn;
    public $query;

    public function __construct($query)
    {
        $this->conn = mysqli_connect("localhost", "root", "", "onlychat");
        $this->query = $query;
    }

    public function query()
    {
        mysqli_query($this->conn, $this->query);
        return 1;
    }
}
