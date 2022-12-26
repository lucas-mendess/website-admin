<?php

require "../../database/Connect.php";

class Users
{
    private $connect;

    public function fetch()
    {
        $conection = new Connect();
        $this->connect = $conection->conn();

        $query = "SELECT * FROM users ORDER BY id LIMIT 10";

        $result = $this->connect->prepare($query);
        $result->execute();

        $data = $result->fetchAll();

        return $data;
    }
}
