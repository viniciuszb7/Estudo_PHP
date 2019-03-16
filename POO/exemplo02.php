<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){

        return $this->modelo;
    }

    public function setModelo($modelo){

        $this->modelo = $modelo;
    }


    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getMotor(){

        return $this->motor;
    }


    public function getAno():int{
        return $this->ano;
    }


    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

    $gol =new Carro();
    $gol-> setModelo("Gol GTI");
    $gol-> setMotor("1.8");
    $gol-> setAno("1997");

var_dump ($gol->exibir());



?>