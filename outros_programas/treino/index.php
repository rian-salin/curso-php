<?php

require __DIR__ . "/Identidade.php";
require __DIR__ . "/Professor.php";
require __DIR__ . "/Genero.php";
require __DIR__ . "/Aluno.php";
require __DIR__ . "/funcao.php";

echo "\nBem vindo(a) XD \n";

$aluno1 = new Aluno(
    'Rian',
    19,
    Sexo::Masculino,
    'terceiro',
    1294
);

exibemensagem($aluno1);



?>