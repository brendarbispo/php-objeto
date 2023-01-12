<?php
// Referencia e Clonagem de objetos

class Pessoa{

    public $idade;


    public function __clone()
    {
        echo "Clonagem de objetos";
    }

}

$pessoa = new Pessoa();
$pessoa->idade = 25;

//$pessoa2 nao é uma nova isntancia da classe Pessoae sim um objeto que faz referencia ao objeto $pessoa

$pessoa2 = $pessoa;

//Assim ela se torna um clone: 
//$pessoa2 = clone $pessoa;

$pessoa2->idade = 35;

echo $pessoa->idade;



