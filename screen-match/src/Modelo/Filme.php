<?php

class Filme extends Titulo {

    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
        array $notas = [],
        float $media = 0,
        bool $atualizaMedia = true
        
    ) {
        parent::__construct ($nome, $anoLancamento, $genero, $notas, $media, $atualizaMedia);
    }

}

?>