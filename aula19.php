<?php
//clone
//construct
//invoke
//tostring
//get
//set


class Pessoa {
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){

        return $this->dados[$nome];
    }
    public function __toString()
    {
        return "tentei imprimir o objeto";
    }
    public function __invoke()
    {
        return "Objeto como funcao";
        
    }

}

$pessoa = new Pessoa();
$pessoa->nome = "Danilo";
$pessoa->idadde = 30;
$pessoa->sexo = "M";
//echo $pessoa();

//var_dump($pessoa);
echo $pessoa->nome;