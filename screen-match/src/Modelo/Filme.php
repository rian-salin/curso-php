<?php

class Filme {

public string $nome = 'nome padrao';
public int $anoLancamento = 2025;
public string $genero = 'ação';
private array $notas = [];
private float $media = 0;
private bool $atualizaMedia = false;

function avalia(float $nota): void
{
     $this ->notas[] = $nota;
     $this ->atualizaMedia= true;
}

function media ():float
{
    if($this->atualizaMedia){
        $somaNotas = array_sum ($this->notas);
        $quantidadeNotas = count($this->notas);

        $this->media =  $somaNotas / $quantidadeNotas;
        $this->atualizaMedia= false;
    }
    return $this->media;

}

public function getanoLancamento(): int
{
    return $this -> anoLancamento;
}

public function settAnoLancamento(int $anoLancamento): void
    {
        $this->anoLancamento = $anoLancamento;
    }

public function getNome():string
    {
        return $this -> nome;
    }


public function settnome(string $nome):void
{
    $this -> nome = $nome;
}

public function getGenero():string
{
    return $this -> genero;
}

public function settGenero(string $genero):void
{
    $this -> genero = $genero;
}

}

?>