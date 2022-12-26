<?php

class Connect
{
    private $host = "localhost";
    private $user = "root_";
    private $password = "root_";
    private $dbname = "lamp_docker";
    private $port = 3306;
    private $connect = null;

    public function conn()
    {
        try {
            $this->connect = new PDO("mysql:dbname=lamp_docker;host=mysql;port=3306;","root","root");

            return $this->connect;
        } catch (\Exception $e) {
           
            $message = "Conexão falhou";
            $code = 400;
            $error = $e->getMessage();
            echo $error;
            return array($message, $code, $error);
        }
    }
}
