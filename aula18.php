<?php
//Composicao: uma classe cria a instancia de outra classe dentro de si própria, sendo assim quando ela for destruida, a outra classe tambem será

class Pessoa {
    public function atribuiNome($nome)
    {
        return "O nome da pessoa é ".$nome;

    }
}

// Cria se um dentro do outro

class Exibe {

    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
        
    }

    public function exibeNome()
    {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Abigail");
$exibe->exibeNome();
