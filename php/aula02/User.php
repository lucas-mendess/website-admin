<?php

require "../../db/Database.php";

class User extends Database
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

    public function edit(array $form): bool
    {
        try {
            $query = "UPDATE users 
                SET name = :name, email = :email, modify_at = NOW()
                WHERE id = :id";

            $editUser = $this->connect()->prepare($query);
            $editUser->bindParam(":id",  $form['id']);
            $editUser->bindParam(":name", $form['name']);
            $editUser->bindParam(":email",  $form['email']);

            $editUser->execute();

            if ($editUser->rowCount()) {
                return true;
            }

            return false;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function view(int $id): array
    {
        $query = "SELECT * FROM users WHERE id = {$id} LIMIT 1";

        $result = $this->connect()->prepare($query);
        $result->execute();

        $data = $result->fetch();

        if ($data) {
            return $data;
        }


        return array();
    }

    public function formatDate($date): string
    {
        return date('d/m H:i', strtotime($date));
    }
}
