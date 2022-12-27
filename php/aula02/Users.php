<?php

require "../../db/Database.php";

class Users extends Database
{
    public function fetch(): array
    {
        $query = "SELECT * FROM users ORDER BY id DESC LIMIT 10";

        $result = $this->connect()->prepare($query);
        $result->execute();

        return $result->fetchAll();
    }

    public function create(array $form): bool
    {
        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";

        $createUser = $this->connect()->prepare($query);
        $createUser->bindParam(":name", $form['name']);
        $createUser->bindParam(":email",  $form['email']);

        $createUser->execute();

        if ($createUser->rowCount()) {
            return true;
        }

        return false;
    }
}
