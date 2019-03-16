<?php

Class Veiculo {
    private $proprietario;
    private $ano;
    private $valor;

}

class Carro extends Veiculo{
    private $marca;
    private $modelo;
    private $cor;

    public function __construct($marca, $modelo, $cor, $prop, $valor, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->setProprietario($prop);
        $this->setValor($valor);
        $this->setAno($ano);
    }


    public function getProprietario()
    {
        return $this->proprietario;
    }

    public function setProprietario($proprietario)
    {
        $this->proprietario = $proprietario;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function  exibir(){
        echo $this->getProprietario();
        echo "<br>";
        echo $this->getMarca();
        echo "<br>";
        echo $this->getModelo();
        echo "<br>";
        echo $this->getCor();

    }

} 

$doc = new Carro ("Ferrari","F40", "Vermelha", "Sebastião",500000, "2000" );
$doc->exibir();




