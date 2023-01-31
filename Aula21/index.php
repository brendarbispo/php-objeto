<?php

require_once 'vendor/autoload.php';

use \App\Model\Produto;

//$produto = new Produto();
//$produto->setId(2);

//$produto->setNome('Iphone X');
//$produto->setDescricao('Celular Apple');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto);
$produtoDao->delete(2);
//$produtoDao->update($produto);
//$produtos = $produtoDao->read();

foreach($produtoDao->read() as $produto){
    echo $produto['nome']. "<br>". $produto['descricao']. "<hr>";
}


