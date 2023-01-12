<?php

//Associaçao
//Acontece quando um objeto "ultiliza" outro, porem, sem que els dependam um do outro.

class Pedido{
    public $numero;
    public $cliente;

}
class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome =  "Gabriel";
$cliente->endereco = "Rua Abc, numero 234";

$pedido = new Pedido ();
$pedido->numero = "12";
$pedido->cliente = $cliente;

//aqui acontece a associacao 

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome, 
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);

