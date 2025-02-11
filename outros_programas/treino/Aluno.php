<?php

class Aluno extends Identidade {

   public function __construct(

    string $nome ,
    int $idade,
    Sexo $sexo,
    public readonly string $serie,
    public readonly int $cpf

 ){
      parent::__construct($nome, $idade, $sexo);
 } 

   public function exiberIdentidadeCompleta():void 
   {
      parent::exibirIdentidade();
      echo " serie é: {$this->serie}, e CPF: {$this->cpf} \n";
   }



}

?>