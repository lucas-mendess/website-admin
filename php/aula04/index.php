<?php


require "./ChequeComum.php";
require "./ChequeEspecial.php";


$chequeComum = new ChequeComum(94.87, "Comum");
$value = $chequeComum->calcularJuros();

echo $value;

echo "<br>";

$chequeEspecial = new ChequeEspecial(100.00, "Especial");
$chequeEspecial->juros_anual = 10;

$value = $chequeEspecial->calcularJuros();

echo $value;
