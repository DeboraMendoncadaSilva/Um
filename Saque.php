<?php
include_once "Corrente.class.php";

//criando um objeto daclasse corrente, ou seja, uma conta corrente
$conta = new Correntes;
//criando um objeto da classe investimentos, ou seja uma conta investimento
$conta2 = new Investiementos;

//atribuindo o primeiro valor de saque
$conta1 ->numAge = 0215;
$conta1 ->numConta = 13001023;
$conta1 ->nome = "Debora M. Silva";
$conta1 ->saldo = 100.89;
$conta1 ->limiteCredito = 500.33;
$conta1 ->sacar (20.32) ;
$conta1 ->ExibirDados() ;


//atribuindo o segundo valor de saque 
$conta1 ->numAge = 0215;
$conta1 ->numConta = 13001023;
$conta1 ->nome = "Débora M. Silva";
$conta1 ->saldo = 100.89;
$conta1 ->limiteCredito = 500.33;
$conta1 ->sacar (1.10) ;
$conta1 ->ExibirDados() ;

//atribuindo o terceiro valor de saque 
$conta1 ->numAge = 0215;
$conta1 ->numConta = 13001023;
$conta1 ->nome = "Débora M. Silva";
$conta1 ->saldo = 100.89;
$conta1 ->limiteCredito = 500.33;
$conta1 ->sacar (20.32) ;
$conta1 ->ExibirDados() ;

?>
