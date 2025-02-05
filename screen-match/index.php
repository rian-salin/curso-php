<?php

require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "\nBem vindo(a)\n";

$filme = new Filme ();
$filme->settAnoLancamento (2022);
$filme->settNome ('gente grande');
$filme->settGenero ('terror');

$filme->avalia (7.9);
$filme->avalia (4.9);
$filme->avalia (8.7);
$filme->avalia (9);

var_dump($filme);

echo "\n media filme: " . $filme -> media() . "\n";

echo " esse e o ano laçamento: " . $filme -> getanoLancamento();
echo "\n esse é o nome do filme: " . $filme -> getNome();
echo "\n esse é o genero: " . $filme -> getGenero();

?>