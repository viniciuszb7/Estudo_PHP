<?php

class Cadastro{

   private $nome;
   private $idade;
    
    public function getNome()
    {
        return $this->nome;
    }

    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    
    public function getIdade()
    {
        return $this->idade;
    }

    
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    
    public function exibir(){

            echo $this->getNome();
            echo $this->getIdade();

    }

}

$aluno = new Cadastro();
$aluno->setNome("Wolverine");
$aluno->setIdade("230");

var_dump ($aluno->exibir());

?>