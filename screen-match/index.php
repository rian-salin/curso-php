<?php

require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Genero.php";
require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "\nBem vindo(a)\n";

$filme1 = new Filme(
    'gente grande',
    2024,
    Genero::Comedia,
    108,
    [8.7, 7.6, 9.8, 8.3],
    0,
    true
);

var_dump($filme1);

echo "\nmedia filme: " . $filme1-> media() . "\n";

ExibirPropriedades($filme1);

exibeMensagemLancamento($filme1->anoLancamento);

echo "\n--------------------------------------------------------------------------------------------\n";

$serie1 = new Serie(
    'suits',
    2017,
    Genero::Drama,
    30,
    8,
    10,
    [9.8, 9.9, 9.7, 9.9],
    0,
    true
);

 var_dump($serie1);

 echo "\nmedia filme: " . $serie1-> media() . "\n";


?>