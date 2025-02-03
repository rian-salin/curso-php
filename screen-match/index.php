<?php

require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "\nBem vindo(a)\n";

$filme = new Filme ();
$filme -> nome = 'gente grande';
$filme -> anoLancamento = 2022;
$filme -> genero = 'comedia';

$filme -> avalia (7.9);
$filme -> avalia (4.9);
$filme -> avalia (8.7);
$filme -> avalia (9);

var_dump($filme);

echo $filme -> media();
?>