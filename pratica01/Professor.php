<?php

declare(strict_types = 1);

class Professor{
    private string $name;
    private string $matricula;
    private float $salario;

    public function getNome():string
    {
        return $this->name;
    } 
    Public function setNome(string $nomeProfessor):void
    {
        $this->name = $nomeProfessor;
    }
    public function getMatricula():string
    {
        return $this->matricula;
    }
    public function setMatricula(string $matriculaProfessor):void
    {
        $this->matricula = $matriculaProfessor;
    }
    public function getSalario():float
    {
        return $this->salario;
    }
    public function setSalario(float $salarioProfessor):void
    {
        $this->salario = $salarioProfessor;
    }
}