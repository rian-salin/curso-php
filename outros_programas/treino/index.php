<?php

require __DIR__ . "/Identidade.php";
require __DIR__ . "/Professor.php";
require __DIR__ . "/Genero.php";
require __DIR__ . "/Aluno.php";
require __DIR__ . "/funcao.php";

echo "\nBem vindo(a) XD \n";

$aluno1 = criaAluno(
    'Rian',
    19,
    Sexo::Masculino,
    'terceiro',
    1294
);


$professor1 = new Professor(
    'Maria',
    29,
    Sexo::Feminimo,
    'bacharelado',
    79887
);

$aluno1->exiberIdentidadeCompleta();

$professor1->exiberIdentidadeCompleta();

?>