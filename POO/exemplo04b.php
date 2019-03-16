<?php

class cadastro{

    private $nome;
    private $cpf;
    private  $salario;

    public function __construct($a, $b, float $c)
    {

        $this->nome = $a;
        $this->cpf = $b;
        $this->salario = $c;


        if($c>1999){
           $this->salario-=150;
        }
        else{
            $this->salario-=100;
        }

    }

}


$funcionario = new cadastro("João", "3873424234", 1500);

$arrayObj[]= $funcionario;

$funcionario = new cadastro("Fran", "3873424234", 1600);

foreach ($arrayObj as $value){

    if($value->nome=="João"){
        $arrayObj[$value]= $funcionario;
    }else{
        echo "não é o João";
    }

    $arrayObj[]= $funcionario;

}

$arrayObj[]= $funcionario;

var_dump($arrayObj);



?>