<?php

//metodos são as funcoes, ações das classes

class ContaBancaria{
    public $banco;
    public $conta = 12345;
    public $agencia = 32;
    public $titular = "Angela Leite";
    public $saldo = "1.000,00";

    public function __construct(){
        echo "Olá, sou o construtor";
    }

    public function obterSaldo(){
        return 'Olá, eu mostro o saldo';
    }
}

$conta = new ContaBancaria();
