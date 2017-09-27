<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/09/17
 * Time: 16:06
 */

require "classes/funcionario.php";

$funcionario = new funcionario();
$funcionario-> departamento = "compras";
$funcionario-> salario = 1000;
$funcionario-> dataEntrada = "agosto";
$funcionario-> setCpf("09343317905");
$funcionario-> recebeAumento(200);
$funcionario-> calculaGanhoAnual();

echo "O salário anual do funcionário é de {$funcionario->salarioAnual}\n";

print_r($funcionario);