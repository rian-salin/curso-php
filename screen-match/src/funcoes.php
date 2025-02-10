<?php

function ExibirPropriedades(Filme $filme1)
{
    echo "Filme: {$filme1->nome}\n";
    echo "Ano de Lançamento: {$filme1->anoLancamento}\n";
    echo "Gênero: {$filme1->genero->name}\n"; 
    echo "duração em minutos: {$filme1->duracaoEmMinutos}\n ";
}

function exibeMensagemLancamento(int $anoLancamento): void {
    if ($anoLancamento > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
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
    Genero $genero, 
    array $notas = [], 
    float $media = 0, 
    bool $atualizaMedia = true,
    int $duracaoEmMinutos
    ): Filme 
    {
    return new Filme($nome, $anoLancamento, $genero, $duracaoEmMinutos, $notas, $media, $atualizaMedia);
}
