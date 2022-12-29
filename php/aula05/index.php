<?php
require "./CursoGraduacao.php";
require "./CursoPosGraduacao.php";

$cursoPG = new CursoPosGraduacao();
$disciplina = $cursoPG->disciplina("Gestão de Projetos");
$professor = $cursoPG->professor("Andreia");

echo $disciplina;
echo "<br>";
echo $professor;

echo "<hr>";
$cursoG = new CursoGraduacao();
$disciplina = $cursoG->disciplina("Análise de Projetos");
$professor = $cursoG->professor("André");

echo $disciplina;
echo "<br>";
echo $professor;
