<?php

class Aluno{

   public function __construct(

    private  string $nome ,
    private  int $idade,
    private  string $serie

 ){} 

 public function getnome(): string {
    return $this->nome;
 }

 public function setnome(string $nome): void {
    $this->nome = $nome;
 }


}

?>