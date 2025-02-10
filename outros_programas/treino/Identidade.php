<?php

class Identidade{

    public function __construct(

        public readonly string $nome ,
        public readonly int $idade,
        public readonly  Sexo $sexo
    
     ){} 
       
}


?>