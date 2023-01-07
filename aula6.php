<?php
/* MODIFICADORES DE ACESSO::

public - fará com que nao haja ocultacao nenhuma, toda propriedade ou metodo declarado com public serao 
acessiveis por todos que quiserem acessá-los

protected (protegido) - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou metodos 
protegidos como se fossem publicos 

private - ao contrario do public, esse modificador faz com que qualquer metodo ou propriedade seja visivel só
e somente pela classe que declarou
*/

use Carro as GlobalCarro;
use Veiculo as GlobalVeiculo;

class Veiculo{
   //protected 
    private $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andar!";
    }

    public function Parar(){
        echo "Parou!";
    }
    public function setModelo ($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
    }
}
class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando";
    }

}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Randandannn";
    }
}
/*
$veiculo = new Veiculo();
$veiculo->setModelo("Hilux");
echo $veiculo->getmodelo();
*/

$carro = new Carro();
$carro->setModelo("peugeot 208");
echo $carro->getModelo();