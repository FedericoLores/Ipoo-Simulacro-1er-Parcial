<?php
include_once 'Empresa.php';
include_once 'Venta.php';
include_once 'Cliente.php';
include_once 'Moto.php';

$objCliente1 = new Cliente("Jorge", "Ramirez", false, "DNI", 11022030);
$objCliente2 = new Cliente("Don", "Ramon", false, "DNI", 44055060);
$obMoto1 = new Moto(11, 2230000, 2022, "Benelli Imperiale 400", 85, true);
$obMoto2 = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);
$obMoto3 = new Moto(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false);
$objEmpresa = new Empresa("Alta Gama", "Av Argenetina 123", [$objCliente1, $objCliente2 ], [$obMoto1, $obMoto2, $obMoto3], []);

$objEmpresa->registrarVenta([11,12,13], $objCliente2);
$objEmpresa->registrarVenta([0], $objCliente2);
$objEmpresa->registrarVenta([2], $objCliente2);
$objEmpresa->retornarVentasXCLiente("DNI", 11022030);
$objEmpresa->retornarVentasXCLiente("DNI", 44055060);

echo $objEmpresa;

?>