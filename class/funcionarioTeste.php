<?php

    require "classes/Funcionario.php";
    require_once "classes/Data.php";

    $dataEntrada = new Data();
    $dataEntrada-> dia = 10;
    $dataEntrada-> mes = 8;
    $dataEntrada-> ano = 2000;

    $funcionario = new funcionario();
    $funcionario-> departamento = "compras";
    $funcionario-> salario = 1000;
    $funcionario-> setDataEntrada($dataEntrada);
    $funcionario-> setCpf("09343317905");
    $funcionario-> recebeAumento(0.2);
    $funcionario-> calculaGanhoAnual();
    $funcionario-> mostra();

    print_r($funcionario);