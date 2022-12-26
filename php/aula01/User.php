<?php

class User
{
    public $name, $email;

    public function create($name, $email): String
    {
        $this->name = $name;
        $this->email = $email;

        return "Usuário <strong> {$this->name} </strong> criado com o email <strong> {$this->email} </strong>";
    }
}
