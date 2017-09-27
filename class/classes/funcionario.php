<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/09/17
 * Time: 15:58
 */
class Funcionario
{
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $salarioAnual;
    private $cpf;
    const SALARIO_DECIMO_TERCEIRO_E_FERIAS = 13.3;

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function recebeAumento(float $aumento) {
        $this->salario = $this->salario + $aumento;
        return $this->salario;

    }

    public function calculaGanhoAnual() :float {
        $this->salarioAnual = $this->salario * self::SALARIO_DECIMO_TERCEIRO_E_FERIAS;
        return $this->salarioAnual;

}

}