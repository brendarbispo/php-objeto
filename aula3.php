<?php

class Login {
    private $email;
    private $senha;

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

$logar = new Login();
$logar->setEmail("test@test.com");
$logar->setSenha("1234");
$logar->Logar();
