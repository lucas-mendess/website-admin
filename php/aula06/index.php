<?php

require "./Disciplina.php";

$nota = Disciplina::$notaFinal;
$situacao = Disciplina::situacaoAluno(55);
echo "Nota final: {$nota} <br>";
echo "Situação: {$situacao} <br>";

$disciplina = new Disciplina("Lucas", 20, 50);
echo $disciplina->situacao();
