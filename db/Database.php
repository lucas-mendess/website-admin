<?php

class Database
{
    private $host = "mysql";
    private $user = "root";
    private $password = "root";
    private $dbname = "lamp_docker";
    private $port = 3306;
    private $connect;

    public function connect()
    {
        try {
            $config_db = "mysql:dbname={$this->dbname};host={$this->host};port={$this->port};";

            $this->connect = new PDO($config_db, $this->user, $this->password);

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
