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


?>