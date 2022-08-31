<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

 abstract class Funcionario extends Pessoa
 {
    private string $cargo;
    private float $salario;
 
    public function __construct (string $nome, Cpf $cpf, string $cargo, float $salario)
    {
       parent::__construct($nome, $cpf);
       $this->cargo = $cargo;   
       $this->salario = $salario;
    }

    //getter
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

    public function recebeAumento(float $valorAumento)
    {
        if ($valorAumento < 0)
        {
            echo "aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

}

