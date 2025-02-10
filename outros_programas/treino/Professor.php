<?php

    class Professor extends Identidade{

        public function __construct(
            string $nome ,
            int $idade,
            Sexo $sexo,
            protected string $grauEnsino,
            private int $rg
        )
        {
            parent::__construct($nome, $idade, $sexo);
        }

    }
?>