<?php

class Aluno{

   public function __construct(

    public readonly string $nome ,
    public readonly int $idade,
    public readonly  string $serie

 ){} 

 public function getnome(): string {
    return $this->nome;
 }

 public function setnome(string $nome): void {
    $this->nome = $nome;
 }


}

?>