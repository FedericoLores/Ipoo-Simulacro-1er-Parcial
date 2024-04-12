<?php
class Venta{
    private $numero;    
    private $fecha;
    private $objCliente;
    private $colMotos;
    private $precioFinal;

    public function __construct($numeroCnstr, $fechaCnstr, $objClienteCnstr, $colMotosCnstr, $precioFinalCnstr){
        $this->numero = $numeroCnstr;
        $this->fecha = $fechaCnstr;
        $this->objCliente = $objClienteCnstr;
        $this->colMotos = $colMotosCnstr;
        $this->precioFinal = $precioFinalCnstr;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getObjCliente(){
        return $this->objCliente;
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

    public function setObjCliente($objClienteNew){
        $this->objCliente = $objClienteNew;
    }

    public function setColMotos($colMotosNew){
        $this->colMotos = $colMotosNew;
    }

    public function setPrecioFinal($precioFinalNew){
        $this->precioFinal = $precioFinalNew;
    }

    public function __toString(){
        $i=1;
        $string = "\nnumero: " . $this->getNumero()."\nfecha: " . $this->getFecha()."\ndatos cliente: " . $this->getObjCliente()."\nmotos vendidas";
        foreach($this->getColMotos() as $moto){
            $string = $string . "moto " . $i . ": " . $moto . " \n";
            $i++;
        }
        $string = $string . "\nprecio final: " . $this->getPrecioFinal();
        return $string;
    }

    public function incorporarMoto($objMoto){
        $precioMoto = $objMoto->darPrecioVenta();
        $coleccionMotos = $this->getColMotos();
        if($precioMoto!= -1 && !($this->getObjCliente()->getDadoBaja())){
            $coleccionMotos[count($coleccionMotos)] = $objMoto;
            $this->setPrecioFinal($this->getPrecioFinal() + $precioMoto);
            $this->setColMotos($coleccionMotos);
        }
    }

}

?>