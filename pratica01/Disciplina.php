<?php

declare(strict_types = 1);

class Disciplina{
    public string $nome;
    public string $ementa;

    public function getNome():string 
    { 
        return $this->nome;
    }
    public function setNome(string $nomeDisciplina):void
    {
        $this->nome = $nomeDisciplina;
    }
    public function getEmenta():string 
    {
        return $this->ementa;
    }
    public function setEmenta(string $ementaDisciplina):void
    {
        $this->ementa = $ementaDisciplina;
    }
}