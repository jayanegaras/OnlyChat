<?php

class connectChat
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
        $result = mysqli_query($this->conn, $this->query);
        return $result;
    }
    public function read($dataTable)
    {
        return mysqli_fetch_assoc($dataTable);
    }
}
