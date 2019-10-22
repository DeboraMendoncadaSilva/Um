<?php

include_once "Aluno.class.php";
include_once "Turma.class.php";


//Instanciamentos da classe Aluno

$aluno = new Aluno;
$aluno->nome= "Debora Mendonca da Silva";
$aluno->idade= 29;
$aluno->turma= "Informatica";


$aluno = new Aluno;
$aluno->nome= "Thiago Mendonca da Silva";
$aluno->idade= 25;
$aluno->turma= "Informatica";

//Instaciamento da Turma


$turma = new turma ;
$turma->codigo =  "informatica04na";
$turma->descricao = "ccp";
$turma->ocupacao = "04";


//Exibindo os atributos na tela

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno: ".$aluno->nome. "<br>";
echo "Idade do Aluno: ".$aluno->idade. "<br>";
echo "Turma do Aluno: ".$aluno->turma->codigo. "<br>";
echo "Turma do Aluno: ".$aluno->turma->descricao. "<br>";
echo "Turma do Aluno: ".$aluno->turma->ocupacao. "<br>";

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno2: ".$aluno2->nome. "<br>";
echo "Idade do Aluno2: ".$aluno2->idade. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->codigo. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->descricao. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->ocupacao. "<br>";

