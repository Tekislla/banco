<?php

class Funcionario
{
    public $departamento;
    public $salario;
    private $cpf;
    private $dataEntrada;
    const SALARIO_DECIMO_TERCEIRO_E_FERIAS = 13.3;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function recebeAumento(float $aumentoPercentual) {

        $this->salario += $this->salario * $aumentoPercentual;
        return $this->salario;

    }

    public function calculaGanhoAnual() :float {

        $ganhoAnual = $this->salario * self::SALARIO_DECIMO_TERCEIRO_E_FERIAS;
        return $ganhoAnual;

    }

    public function setDataEntrada(data $dataEntrada) {

        $this->dataEntrada = $dataEntrada;
    }

    public function mostra() {

        echo "O funcionário {$this->getCpf()} trabalha no departamento {$this->departamento} e tem o salário de {$this->salario}.\n";

        echo "Seu ganho anual é de {$this->calculaGanhoAnual()}. \n";

        echo "Sua data de entrada foi {$this->dataEntrada->formatada()}.";

        echo "\n\n";
    }

}