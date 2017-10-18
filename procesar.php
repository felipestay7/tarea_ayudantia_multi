<?php

function guardarFormularioRegistro($Id_Registro, $Nombre, $Email, $Direccion)

{	
	require 'conexion.php';
	$sql = "INSERT INTO registro(Id_Registro, Nombre, Email, Direccion) VALUES(?,?,?,?)";
	$smt = $conn->prepare($sql);
	$smt->bindParam(1, $Id_Registro);
	$smt->bindParam(2, $Nombre);
	$smt->bindParam(3, $Email);
	$smt->bindParam(4, $Direccion);
	$smt->execute();
	$conn = null;
}

if(isset($_REQUEST['Registro_formulario'])){
	$Id_Registro = $_REQUEST['Id_Registro'];
	$Nombre = $_REQUEST['Nombre'];
	$Email = $_REQUEST['Email'];
	$Direccion = $_REQUEST['Direccion'];
	guardarFormularioRegistro($Id_Registro, $Nombre, $Email,$Direccion);
}

 ?>