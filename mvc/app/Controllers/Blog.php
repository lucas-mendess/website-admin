<?php

namespace App\Controllers;

use App\Models\ListBlog;
use Config\View;

class Blog extends View
{
    public function index(): void
    {
        $blog = new ListBlog();
        $data['artigos'] = $blog->fetch();

        $this->render("blog/index", $data);
    }
}
