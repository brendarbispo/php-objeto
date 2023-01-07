<?php

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
        
    }
    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($e){
        #filtro de valores
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar (){
        if($this->email == "test@test.com" and $this->senha == "1234" ):
            echo "Logado!";
        else: 
            echo "Invalido";
        endif;

    }
}

$logar = new Login("test@test.com", "1234", "Brenda Rodrigues");
$logar->Logar();
echo "<br>";
echo $logar->getNome();
