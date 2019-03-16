<?php

class Pessoa
{

    public $nome; // atributo

    public function falar()
    {//Metodo
        return "O meu nome é " . $this->nome;

    }
}


$vinicius = new Pessoa();
$vinicius->nome = "Batarra";
echo $vinicius->falar();

$vinicius->nome = "Zaqueu";
echo $vinicius->falar();

?>