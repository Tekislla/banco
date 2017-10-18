<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Data.php";
    require_once "classes/Gerente.php";
    require_once "classes/ControleBonificacoes.php";

    $dataEntrada = new Data();
    $dataEntrada-> dia = 10;
    $dataEntrada-> mes = 8;
    $dataEntrada-> ano = 2000;

    $jorgin = new Gerente("Jorgin");
    $jorgin-> setSalario(3000);
    $jorgin->setDataEntrada($dataEntrada);
    $jorgin->mostra();

    $bonus = new ControleBonificacoes();
    $bonus->registra($jorgin);
    $bonus->mostra();