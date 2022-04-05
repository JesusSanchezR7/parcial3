<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	
	require_once("../model/claseConeccion.php");
	$obj = new Connection();
	$resultado = $obj->wep_sp_login($correo,$password);
	echo json_encode(["estado"=>$resultado]);
}