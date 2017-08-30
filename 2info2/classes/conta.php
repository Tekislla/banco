<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 30/08/17
 * Time: 15:58
 */
class conta
{
    public $numero;
    public $dono;
    public $cpf;
    public $saldo;

    /**
     * @param float $valor
     * @return bool
     */
    public function saca(float $valor) :bool {
        if ($valor < $this->saldo) {
            $this->saldo = $this->saldo - $valor;
            return true;
        } else{
            return false;
        }
    }

    public function deposita(){
        //TODO escrever a funcao
    }

    public function transfere(){
        //TODO escrever a funcao transfere
    }
}