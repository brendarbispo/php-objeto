<?php

//Agregaçao
//Na agregaçao, uma classe precisa de outra para executar sua açao, ou seja, uma classe utiliza a outra como parte de si propria


class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    { 
        $this->nome = $nome;
        $this->valor = $valor;
        
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;

    }

    public function exibe(){
        foreach ($this->produtos as $produto){
            echo $produto->nome.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "R$1500");
$produto2 = new Produtos("iPad", "R$2000");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();

