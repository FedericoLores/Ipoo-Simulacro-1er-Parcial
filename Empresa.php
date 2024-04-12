<?php
class Empresa {
    private $denominacion;
    private $direccion;
    private $colClientes;
    private $colMotos;
    private $colVentas;

    public function __construct($denominacionCnstr, $direccionCnstr, $colClientesCnstr, $colMotosCnstr, $colVentasCnstr){
        $this->denominacion = $denominacionCnstr;
        $this->direccion = $direccionCnstr;
        $this->colClientes = $colClientesCnstr;
        $this->colMotos = $colMotosCnstr;
        $this->colVentas = $colVentasCnstr;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getColClientes(){
        return $this->colClientes;
    }

    public function getColMotos(){
        return $this->colMotos;
    }

    public function getColVentas(){
        return $this->colVentas;
    }

    public function setDenominacion($denominacionNew){
        $this->denominacion = $denominacionNew;
    }

    public function setDireccion($direccionNew){
        $this->direccion = $direccionNew;
    }

    public function setColClientes($colClientesNew){
        $this->colClientes = $colClientesNew;
    }

    public function setColMotos($colMotosNew){
        $this->colMotos = $colMotosNew;
    }

    public function setColVentas($colVentasNew){
        $this->colVentas = $colVentasNew;
    }

    public function __toString(){
        $i=1;
        $string = "denominacion: " . $this->getDenominacion() . "\ndireccion: " . $this->getDireccion() . "\nclientes: ";
        foreach($this->getColClientes() as $cliente){
            $string = $string . "cliente " . $i . ": " . $cliente . " \n";
            $i++;
        }
        $string = $string . "\nmotos: ";
        foreach($this->getColMotos() as $moto){
            $string = $string . "moto " . $i . ": " . $moto . " \n";
            $i++;
        }
        $string = $string . "\nventas" ;
        foreach($this->getColVentas() as $venta){
            $string = $string . "venta " . $i . ": " . $venta . " \n";
            $i++;
        }
        return $string;
    }

}

?>