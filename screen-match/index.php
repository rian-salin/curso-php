<?php

require __DIR__ . "/src/Genero.php";
require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "\nBem vindo(a)\n";

$filme1 = criaFilme(
    'gente grande',
    2024,
    Genero::Comedia,
    [8.7, 7.6, 9.8, 8.3],
    180,
    0,
    true
);

var_dump($filme1);

echo "\nmedia filme: " . $filme1-> media() . "\n";

ExibirPropriedades($filme1);

exibeMensagemLancamento($filme1->anoLancamento);
?>