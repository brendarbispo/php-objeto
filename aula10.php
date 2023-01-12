<?php

//Métodos e Atributos Estáticos

class Login{
    //assism nao prescisa instaciar a classe
    //atributo estatico
    public static $user;

    public static function verificaLogin(){
        echo "O usuario " .self::$user. " esta logado!";
    }
    public function sairSistema(){
        echo "O usuario deslogou!";
    }
}
//this nao funciona com atribustos extático 
Login::$user = "admin";
Login::verificaLogin();


//$login = new Login();
//$login->sairSistema();