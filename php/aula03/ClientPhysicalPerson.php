<?php

class ClientPhysicalPerson extends Client
{
    public string $nome;
    public int $cpf;

    public function getInfoByPhysicalPerson(): string
    {
        $info = "<strong>Dados da Pessoa Física:</strong> <br/>";
        $info .= "<strong>Nome:</strong> {$this->nome} <br/>";
        $info .= "<strong>CPF:</strong> {$this->cpf} <br/>";
        $info .= "<strong>Endereço:</strong> {$this->logradouro} <br/>";
        $info .= "<strong>Bairro:</strong> {$this->bairro} <br/>";

        return "<p> $info </p>";
    }
}
