<?php

class Disciplina
{
    public string $aluno;
    public float $notaTrabalho;
    public float $notaProva;
    public static $notaFinal;

    public function __construct(string $aluno, float $notaTrabalho, float $notaProva)
    {
        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;

        self::$notaFinal = $notaProva + $notaTrabalho;
    }

    public function situacao(): string
    {
        $nota = self::$notaFinal;
        $message = null;

        if ($nota >= 70) {
            $message = "Aluno {$this->aluno} está <b> Aprovado </b> com média: " . $nota;
        } elseif ($nota < 70 && $nota >= 50) {
            $message = "Aluno {$this->aluno} está em <b> Recuperação </b> com média: " . $nota;
        } else {
            $message = "Aluno {$this->aluno} está em <b> Reprovado </b> com média: " . $nota;
        }

        return $message;
    }

    static function situacaoAluno($nota): string
    {
        self::$notaFinal = $nota;

        if ($nota >= 70) {
            $message = "Aluno está <b> Aprovado </b> com média: " . $nota;
        } elseif ($nota < 70 && $nota >= 50) {
            $message = "Aluno está em <b> Recuperação </b> com média: " . $nota;
        } else {
            $message = "Aluno está em <b> Reprovado </b> com média: " . $nota;
        }

        return $message;
    }
}
