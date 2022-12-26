<?php

class Client
{
    public string $logradouro;
    public string $bairro;

    public function getAddress(): string
    {
        $address = "Endereço: {$this->logradouro} <br/> Bairro: {$this->bairro}";
        return $address;
    }
}
