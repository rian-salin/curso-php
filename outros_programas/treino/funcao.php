<?php

function criaAluno(
    string $nome,
    int $idade,
    string $serie
): Aluno {
    return new Aluno($nome, $idade, $serie);
}

function exibemensagem($aluno1): void{
 echo "Aluno: {$aluno1->nome}, idade: {$aluno1->idade}, serie é : {$aluno1->serie}";
}




?>