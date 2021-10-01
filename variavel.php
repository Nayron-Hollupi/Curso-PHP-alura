<?php

$idade = 32 ; 


//echo "Minha idade eh $idade";

$idadeDaqui10Anos = $idade + 10;

//echo "Minha idade daqui a 10 anos $idadeDaqui10Anos";



$soma = 2 + 2;
$subtracao = 3 - 8;
$multiplicacao = 6 * 9;
$divisao = 50 / 2 ;
$doisAoCubo = 2 ** 3;
$modulo = 20 % 3 ; 


echo "Soma $soma subtração $subtracao
 multiplicacao $multiplicacao divisao $divisao
 Ao cubo $doisAoCubo Modulo $modulo ".PHP_EOL;





$salario = 1250.50  ;

$imposto = ($salario * 8) / 100;

//verificar tipo da variavel
//echo gettype($salario);

echo "Salario $salario" .PHP_EOL. "Imposto sobre o salario $imposto ";


$verdadeiro = true;
$falso = false;

echo gettype($falso);
