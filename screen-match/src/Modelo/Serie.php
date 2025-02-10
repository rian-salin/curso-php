<?php 

class Serie extends Titulo {

    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $minutosPorEpisodio,
        public int $temporadas,
        public int $episodiosPorTemporadas,
        array $notas = [],
        float $media = 0,
        bool $atualizaMedia = true
    ) {
        parent::__construct($nome, $anoLancamento, $genero, $notas, $media, $atualizaMedia);
    }

}

?>