<?php
class Venta{
    private $numero;    
    private $fecha;
    private $cliente;
    private $colMotos;
    private $precioFinal;

    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getColMotos(){
        return $this->colMotos;
    }

    public function setNumero($numeroNew){
        $this->numero = $numeroNew;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setFecha($fechaNew){
        $this->fecha = $fechaNew;
    }

    public function setCliente($clienteNew){
        $this->cliente = $clienteNew;
    }

    public function setColMotos($colMotosNew){
        $this->colMotos = $colMotosNew;
    }

    public function setPrecioFinal($precioFinalNew){
        $this->precioFinal = $precioFinalNew;
    }

    public function __toString(){
        $i=1;
        $string = "\nnumero: " . $this->getNumero()."\nfecha: " . $this->getFecha()."\ndatos cliente: " . $this->getCliente()."\nmotos vendidas";
        foreach($this->getColMotos() as $moto){
            $string = $string . "moto " . $i . ": " . $moto . " \n";
            $i++;
        }
        $string = $string . "\nprecio final: " . $this->getPrecioFinal();
        return $string;
    }


}

?>