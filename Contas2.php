<?php
//inserindo as classes

include_once "Contas.class.php";
include_once "Corrente.class.php";
include_once "Investimentos.class.php";


//criando um objeto daclasse corrente, ou seja, uma conta corrente
$conta = new Correntes;
//criando um objeto da classe investimentos, ou seja uma conta investimento
$conta2 = new Investiementos;

//atribuindo valores a conta corrente
$conta1 ->numAge = 0215;
$conta1 ->numConta = 13001023;
$conta1 ->nome = "Jean Carlos da Silva";
$conta1 ->saldo = 100.89;
$conta1 ->limiteCredito = 500.33;
$conta1 ->sacar (20.32) ;
$conta1 ->ExibirDados() ;
echo "<p>Próxima Conta</p>";

//atribuindo valores a conta investimento

