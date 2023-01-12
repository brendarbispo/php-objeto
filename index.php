<?php

require 'classes/produto.php';
require 'models/produto.php';

//busca da pasta referente das duas maneiras::

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

//////////// OU
use models\Produto;

$produto = new Produto;
$produto->mostrarDetalhes();

//pode se dar um apelido usando 'as'
//$produto = new \classes\Produto() as ProductClass;