<?php

require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "\nBem vindo(a)\n";

$filme1 = new Filme(
    'gente grande',
    2022,
    'comedia',
    [8.7, 7.6, 9.8, 8.3]
);

var_dump($filme1);

echo "\n media filme: " . $filme1-> media() . "\n";

echo " esse e o ano laçamento: " . $filme1 -> getanoLancamento();
echo "\n esse é o nome do filme: " . $filme1-> getNome();
echo "\n esse é o genero: " . $filme1-> getGenero();

?>