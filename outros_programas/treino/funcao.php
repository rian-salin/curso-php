<?php

function criaAluno(
    string $nome,
    int $idade,
    Sexo $sexo,
    string $serie,
    int $cpf

): Aluno {
    return new Aluno($nome, $idade, $sexo, $serie, $cpf);
}

function exibemensagem($aluno1): void{
    echo "Aluno: {$aluno1->nome}, idade: {$aluno1->idade}, sexo é : {$aluno1->sexo->name}, serie é: {$aluno1->serie}, CPF é: {$aluno1->cpf}  \n";
   }

?>