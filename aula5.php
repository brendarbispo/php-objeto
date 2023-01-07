<?php
/*herança é um recurso que permite classes compartilharem atributos e metodos 
afim de reaproveitar codigos ou comportamentos */


class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andar!";
    }

    public function Parar(){
        echo "Parou!";
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

$carro = new Carro();
$carro->modelo = "Pegeout 208";
$carro->cor = "Preto";
$carro->ano= 2023;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
//var_dump($carro);


$moto = new Moto();
$moto->modelo = "Honda Elite";
$moto->cor = "Vermelho";
$moto->ano = 2019;
echo "<br>";
$moto->Andar();
echo "<br>";
$moto->darGrau();





