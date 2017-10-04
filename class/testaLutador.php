<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/10/17
 * Time: 16:09
 */

require_once "classes/lutador.php";

$saitama = new lutador("Saitama", 23, 78, 50, 0);
$saitama->ganhaLuta(3);
$saitama->perdeLuta(5);
$saitama->apresenta();
print_r($saitama);