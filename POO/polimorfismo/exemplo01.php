<?php

abstract Class  Animal {
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar()
    {
        return "Late";
    }
}

Class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}

Class Passaro extends Animal{

    public function  falar()
    {
        return "Canta";
    }
    public  function  mover()
    {
        return "Voa e" . parent::mover();
    }


}

$sebastiao = new Gato();

$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo  $pluto->mover(). "<br/>";

$loro = new Passaro();
echo  $loro->mover();

?>