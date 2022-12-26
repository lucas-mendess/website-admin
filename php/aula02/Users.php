<?php

require "../../db/Database.php";

class Users
{
    private $connect;

    public function fetch()
    {
        $conection = new Database();
        $this->connect = $conection->connect();

        $query = "SELECT * FROM users ORDER BY id DESC LIMIT 10";

        $result = $this->connect->prepare($query);
        $result->execute();

        $data = $result->fetchAll();

        return $data;
    }
}
