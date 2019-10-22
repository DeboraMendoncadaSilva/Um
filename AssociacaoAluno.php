<?php

include_once "Aluno.class.php";
include_once "Turma.class.php";


//Instanciamentos da classe Aluno

$aluno1 = new Aluno1;
$aluno1->nome= "Debora Mendonca da Silva";
$aluno1->idade= 29;
$aluno1->turma= "Informatica";


$aluno2 = new Aluno2;
$aluno2->nome= "Thiago Mendonca da Silva";
$aluno2->idade= 25;
$aluno2->turma= "Informatica";

//Instaciamento da Turma


$turma = new turma ;
$turma->codigo =  "informatica04na";
$turma->descricao = "ccp";
$turma->ocupacao = "04";


//Exibindo os atributos na tela

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno1: ".$aluno1->nome. "<br>";
echo "Idade do Aluno1: ".$aluno1->idade. "<br>";
echo "Turma do Aluno1: ".$aluno1->turma->codigo. "<br>";
echo "Turma do Aluno1: ".$aluno1->turma->descricao. "<br>";
echo "Turma do Aluno1: ".$aluno1->turma->ocupacao. "<br>";

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno2: ".$aluno2->nome. "<br>";
echo "Idade do Aluno2: ".$aluno2->idade. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->codigo. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->descricao. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->ocupacao. "<br>";

