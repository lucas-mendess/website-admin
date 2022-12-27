<?php

require "./Cheque.php";

class ChequeComum extends Cheque
{
    public function calcularJuros(): string
    {
        // return $this->getValue();

        $value = $this->convertToReal($this->value);
        return "Valor do cheque {$this->type} é R$ {$value}";
    }
}
