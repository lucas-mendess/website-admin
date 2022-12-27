<?php

class ChequeEspecial extends Cheque
{
    public float $juros_anual;
    public float $juros_mensal;

    public function calcularJuros(): void
    {
        /*
            Parent => usar método da Classe Pai
            Posso ter duas funções com o mesmo nome
            $this->algumaCoisa e parent::algumaCoisa 
        */
        $this->getJurosMensal();
        $months = parent::getMonths();
        $baseValue = $this->value;

        foreach ($months as $key => $month) {
            $valueWithJuros = ($this->juros_mensal * $baseValue) + $baseValue;
            $baseValue = $valueWithJuros;

            $valueInTheMonth = parent::convertToReal($valueWithJuros);
            $message = "Valor do cheque {$this->type} é R$ {$valueInTheMonth} no mês de {$month}";

            echo "<p>{$message}</p>";
        }
    }

    private function getJurosMensal()
    {
        $meses = 12;
        $jurosAnual = $this->juros_anual / 100;
        $jurosMensal = $jurosAnual / $meses;

        $this->juros_mensal = $jurosMensal;
    }
}
