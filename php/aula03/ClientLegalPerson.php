<?php

class ClientLegalPerson extends Client
{
    public string $nomeFantasia;
    public int $cnpj;

    public function getInfoByLegalPerson(): string
    {
        $info = "<strong>Dados da Pessoa Jurídica:</strong> <br/>";
        $info .= "<strong>Nome Fantasia:</strong> {$this->nomeFantasia} <br/>";
        $info .= "<strong>CNPJ:</strong> {$this->cnpj} <br/>";
        $info .= "<strong>Endereço:</strong> {$this->logradouro} <br/>";
        $info .= "<strong>Bairro:</strong> {$this->bairro} <br/>";

        return "<p> $info </p>";
    }
}
