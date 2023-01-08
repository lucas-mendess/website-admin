<?php

namespace Config;

class View
{
    public function render(string $name, array $data)
    {
        $filename = "app/Views/{$name}.php";

        if (file_exists($filename)) {
            return include_once $filename;
        }

        echo "Página não encontrad!!a";
    }
}
