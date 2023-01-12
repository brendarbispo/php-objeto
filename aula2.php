<?php

//criar uma classe
class Pessoa {
    //adicionar atributos:
    public $nome;
    public $idade;
    //adc funcao
    public function Falar(){
        echo $this->nome." de ".$this->idade." anos, acabou de falar";

    }
}

//cria um novo objeto
$brenda = new Pessoa();

// adc informacoes 
$brenda->idade = 25;
$brenda->nome = "Brenda Rodrigues";
//var_dump($brenda);

// executar funçao: 
$brenda->Falar();
