<?php

declare(strict_types = 1);

class Curso{
    public string $nome;
    public float $cargaHoraria;
    public string $descricao;

    public function getNome():string
    { 
        return $this->nome;
    }
    public function setNome(string $nomeCurso):void
    {
        $this->nome = $nomeCurso;
    }
    public function getCargaHoraria():float
    { 
        return $this->cargaHoraria;
    }
    public function setCargaHoraria(float $cargaHorariaCurso):void
    {
        $this->cargaHoraria = $cargaHorariaCurso;
    }
    public function getDescricao():string
    { 
        return $this->descricao;
    }
    public function setDescricao(string $descricaoCurso):void
    {
        $this->descricao = $descricaoCurso;
    }

}






