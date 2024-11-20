<?php

class Car {

    private $numTelaio;


    protected function setCarTelaio($string){

        return $this->numTelaio = $string;
    }

    protected function getCarTelaio(){
        return $this->numTelaio;
    }

}


class Fiat extends Car{

    protected $license;
    protected $name;

    public function __construct($targa, $nome){

        $this->licence = $targa;
        $this->name = $nome;

    }

    public function setMyCarTelaio($string){

        return $this->setCarTelaio($string);

    }

    public function getMyCarTelaio(){
        return $this->getCarTelaio();
    }

    public function printMessage(){
        echo "La mia macchina è $this->name con targa $this->licence e un numero di telaio " . $this->getMyCarTelaio() . "\n";
    }

}


$car = new Fiat ("ND123OJ", "Opel");
$car->setMyCarTelaio("1234");
$car->printMessage();







?>