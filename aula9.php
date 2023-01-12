<?php

//COSNTANTES
class Pessoa{
    const nome = "Brenda";

    public function exibirNome(){
        //referenciar uma instance dentro dos escopo da classe ultilizamos "self::nomeDaConstante"
        echo self::nome;
    }
}

class Brenda extends Pessoa{
    const nome = "Rodrigues";

    public function exibirNome()
    {
        //quando se usa o self, ele entende que é a de dentro da classe
        //echo self::nome;
        echo parent::nome;
    }
}


$brenda = new Brenda();
$brenda->exibirNome();