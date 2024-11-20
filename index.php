<?php

class Car {

    private $numTelaio;

    public function __construct($telaio){
        $this->numTelaio = $telaio;
    }

    public function printTelaio(){
        return $this->numTelaio;
    }
}

// $newcar = new Car("fxhdrt3");
// $newcar->printTelaio();

class Opel extends Car{

    protected $license;
    protected $name;

    public function __construct($targa, $nome){
        $this->license = $targa;
        $this->name = $nome;
    }

}


  







?>