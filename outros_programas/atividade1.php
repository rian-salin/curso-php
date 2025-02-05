<?php

class Conta
{
    private int $saldoEmCentavos = 2000;
    private string $nomeTitular = 'Rian';
    private string $numeroConta = 'qwe123';

    public function sacar(int $valorAsacar):void
    {
        if($valorAsacar > 0 && $valorAsacar <= $this-> saldoEmCentavos) 
        {
            $this->saldoEmCentavos -= $valorAsacar;
        }
    }

    public function depositar (int $valorDepositar):void
    {
        if($valorDepositar > 0)
        {
            $this -> saldoEmCentavos += $valorDepositar;
        }
    }


    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}

echo "bem vindo(a) \n";

$conta = new Conta();

$valorAsacar = 500;
$valorDepositar = 1000;

echo"\n valor no banco: $" . $conta -> getSaldoEmCentavos();

$conta->sacar($valorAsacar);
echo "\n valor do saque $$valorAsacar, saldo atual: $" . $conta -> getSaldoEmCentavos();

$conta->depositar($valorDepositar);
echo"\n valor a depositar $$valorDepositar, saldo atual: $" . $conta->getSaldoEmCentavos();



?>