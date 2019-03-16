<?php
//Metodo Magico - Construtor
class endereco
{

    private $logadouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {
        $this->logadouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        var_dump("Destruir");
    }

    public function __toString()
    {
        return $this->logadouro.", ".$this->numero. " - ".$this->cidade;
    }
}

$meuendereco = new endereco("Rua Antonio","123", "Ribeirão");

echo $meuendereco;


?>