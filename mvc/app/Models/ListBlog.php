<?php

namespace App\Models;

class ListBlog extends Connection
{
    public function fetch(): array
    {
        $query = "SELECT titulo, conteudo FROM artigos ORDER BY id DESC LIMIT 10";

        $result = $this->connect()->prepare($query);
        $result->execute();

        return $result->fetchAll();
    }
}
