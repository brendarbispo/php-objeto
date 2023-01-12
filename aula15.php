<?php
//Ocorrencia anormal que afecta o funcionamento da aplicaçao 
//Exeption é a classe base para todas Excptions
// mesage, code, file, line

class Newsletter{

    public function cadastrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            throw new Exception("Este email é invalido", 1);

        }
        else{
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newletter = new Newsletter();
//$newletter->cadastrarEmail("contato@test.com");

try {
    $newletter->cadastrarEmail("contatotest.com");

} catch(Exception $e){

//tratamento da essecao com a mensagem
    echo "Mensagem: ".$e->getMessage()."<br>";
    //codigo
    echo "Codigo: " .$e->getCode()."<br>";
    //qual linha
    echo "Linha: " .$e->getLine()."<br>";
    //qual arquivo
    echo "Linha: " .$e->getFile()."<br>";
}