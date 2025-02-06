<?php

require __DIR__ . "/classe.php";
require __DIR__ . "/funcao.php";

echo "\nBem vindo(a) XD \n";

$aluno1 = criaAluno(
    'Rian',
    19,
    'terceiro'
);

exibemensagem($aluno1);



?>