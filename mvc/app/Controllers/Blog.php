<?php

namespace App\Controllers;

use App\Models\ListBlog;

class Blog
{
    public function index(): void
    {
        $blog = new ListBlog();
        $data = $blog->fetch();

        echo "<ul>";
            foreach ($data as $key => $value) {
                echo "<li>
                        <div>
                            <h3>Titulo: {$value['titulo']}</h3>
                            <p>{$value['conteudo']}</p>
                        </div>
                    </li>";
            }
        echo "</ul>";
    }
}
