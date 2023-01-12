<?php

use Veiculo as GlobalVeiculo;

class Veiculo{
   //protected 
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andar!";
    }

    public function Parar(){
        echo "Parou!";
    }

    public function mostrarAcao(){
        $this->Andar();
    }
}

class Carro extends GlobalVeiculo{

    public function limparLimpador(){
        echo "Limpando!";
    }
    public function mostrarAcao(){
        $this->Andar();

    }
}
