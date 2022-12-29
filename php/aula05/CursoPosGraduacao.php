<?php
require_once "./Curso.php";

class CursoPosGraduacao implements Curso
{
    private string $nomeDisciplina;
    private string $nomeProfessor;

    public function disciplina(string $nome): string
    {
        $this->nomeDisciplina = $nome;
        return $this->nomeDisciplina;
    }

    public function professor(string $nome): string
    {
        $this->nomeProfessor = $nome;
        return $this->nomeProfessor;
    }
}
