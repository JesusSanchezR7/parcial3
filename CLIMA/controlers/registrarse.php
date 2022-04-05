<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){


	$nom_completo = $_POST['nom_completo'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	

	require_once("../model/claseConeccion.php");
	$obj = new Connection();
	$resultado = $obj->registrarse($nom_completo,$correo,$password);
	echo json_encode(["estado"=>$resultado]);
}