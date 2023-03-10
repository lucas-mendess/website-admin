<?php

abstract class Database
{
    private string $host = "mysql";
    private string $user = "root";
    private string $password = "root";
    private string $dbname = "lamp_docker";
    private int $port = 3306;
    private object $connect;

    public function connect()
    {
        try {
            $config_db = "mysql:dbname={$this->dbname};host={$this->host};port={$this->port};";
            $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = 'America/Sao_Paulo'"];

            $this->connect = new PDO($config_db, $this->user, $this->password, $options);

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
