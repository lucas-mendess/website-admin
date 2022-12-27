<?php

//Classe abstrata não é instanciada
abstract class Cheque
{
    public float $value;
    public string $type;


    public function __construct(float $value, string $type)
    {
        $this->value = $value;
        $this->type = $type;
    }

    abstract function calcularJuros();

    public function getValue(): string
    {
        return "Valor do cheque {$this->type} é {$this->value}";
    }

    public function convertToReal(float $value): string
    {
        return number_format($value, '2', ',', '.');
    }

    public function getMonths(): array
    {
        return array(
            "Janeiro",
            "Fevereiro",
            "Março",
            "Abril"
        );
    }
}
