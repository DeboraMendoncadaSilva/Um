<?php

include_once "Conta.class.php";
include_once "Corrente.class.php";

//criando um objeto daclasse Deposito
$deposito = new Correntes;


//atribuindo o primeiro valor de deposito
$deposito ->numAge = 0215;
$deposito ->numConta = 13001023;
$deposito ->nome = "Débora M. Silva";
$deposito ->saldo = 20.30;
$deposito ->saldo = 57.40;
$deposito ->saldo = 1204.17;
$deposito->ExibirDados() ;


?>