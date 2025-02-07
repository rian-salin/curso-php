<?php

class Filme {

    public function __construct(
        public  string $nome,
        public   int $anoLancamento,
        public readonly Genero $genero,
        private array $notas = [],
        private float $media = 0,
        private bool $atualizaMedia = true
    ) {}


function avalia(float $nota): void
{
     $this->notas[] = $nota;
     $this->atualizaMedia= true;
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





}

?>