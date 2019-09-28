<?php
//CLASSE DE CONTROLE

include_once "Contas.class.php";

$conta = new Contas;

$conta->numAge = 0215;
$conta->numconta = 13001023;
$conta->nome = "Jean Carlos da Silva";
$conta->saldo = 100.89;

$conta->ExibeDados();
?>
