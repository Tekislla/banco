<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 30/08/17
 * Time: 16:11
 */


require 'classes/conta.php';

$minhaConta = new conta();
$minhaConta -> dono = "João Pedro Lazarim";
$minhaConta -> saldo = 800;
$conseguiSacar = $minhaConta -> saca(1000);
echo ($conseguiSacar) ? 'consegui sacar' : 'nao consegui sacar';

var_dump($minhaConta);

$meuSonho = new conta();
$meuSonho -> dono = "João Pedro Lazarim";
$meuSonho -> saldo = 1000000;

var_dump($meuSonho);