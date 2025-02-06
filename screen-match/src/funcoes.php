<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(
    string $nome, 
    int $anoLancamento, 
    string $genero, 
    array $notas = [], 
    float $media = 0, 
    bool $atualizaMedia = true
    ): Filme 
    {
    return new Filme($nome, $anoLancamento, $genero, $notas, $media, $atualizaMedia);
}
