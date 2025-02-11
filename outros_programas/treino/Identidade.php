<?php

class Identidade{

    public function __construct(

        public readonly string $nome ,
        public readonly int $idade,
        public readonly  Sexo $sexo
    
     ){} 
       

public function exibirIdentidade():void{

    echo "\n Seu nome: {$this->nome}, idade: {$this->idade} e o sexo é: {$this->sexo->name} \n";
    
}


}

?>