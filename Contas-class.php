<?php
class Contas{
    var $numAge;
    var $numConta;
    var $nome;
    var $cpf;
    var $tipoConta;
    var $saldo;

		// Método GET
    function getnumAge(){
        return this.$numAge;
		}
		
		//Método SET
    function set$numAge(var $numAge){
        this.$numAge = $numAge;
    } 
    function getnumConta(){
        return this.$numConta;
    }
    function set$numConta(var $numConta){
        this.$numConta = $numConta;
    }
    function getnome(){
        return this.$nome;
    }
    function set$nome(var $nome){
        this.$nome = $nome;
    }
    function getcpf(){
        return this.$cpf;
    }
    function set$cpf(var $cpf){
        this.$cpf = $cpf;
    }
    function gettipoConta(){
        return this.$tipoConta;
    }
    function set$tipoConta(var $tipoConta){
        this.$tipoConta = $tipoConta;
    }
    function getsaldo(){
        return this.$saldo;
    }
    function set$saldo(var $saldo){
        this.$saldo = $saldo;
    }

    function ExibeDados ()
    {
        print "Número da Agência: ".$this->numAge. "<br>";
        print "Número da Conta: " .$this->numConta. "<br>";
        print "Nome do Correntista: " .$this->nome. "<br>";
        print "Saldo Atual: ".$this->saldo. "<br>";
    }
    
}

?>
