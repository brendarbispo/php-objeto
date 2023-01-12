<?php
//classe abstrata serve como um modelo para as classes que estenderes a classe "banco"
//nao pode instanciar uma classe abstrata
abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo ($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{
//tem que ter esses metodos::

    public function Sacar($s){
        
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }
    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }

}

$itau = new Itau();
$itau->setSaldo(55);
echo"<hr> Saldo:".$itau->getSaldo();
$itau->Sacar(5);
echo"<hr> Saldo:".$itau->getSaldo();
$itau->Depositar(3000);
echo"<hr> Saldo:".$itau->getSaldo();
