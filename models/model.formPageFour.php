<?php
//MISIÓN
	$mision = trim($_POST['mision']);
	if (empty($mision)) {
		$msjMision = "La contribución del proyecto al cumplimiento a la misión institucional es obligatorio, máximo de 2000 caracteres.";
		$error[4][1] = "error";
	}elseif(strlen($mision)>=2000){
		$msjMision = "Recuerde que la contribución del proyecto al cumplimiento a la misión institucional es de maxímo 2000 caracteres";
		$error[4][1] = "error";
	}

//LÍNEAS PIM
	$PIM = array();
	if (isset($_POST['PIM'])) {
		$PIM = $_POST['PIM'];
		$PIMcount = count($PIM);
		for ($pimcont=0; $pimcont < $PIMcount; $pimcont++) { 
			$echoPIM .= $PIM[$pimcont]."<br>";	
		}
	}else{
		$PIM = [];
		if ($PIM == "" || count($PIM) < 1) {
			$msjPIM = "Por favor seleccione las líneas del PIM que abarca el proyecto";
			$error[4][2] = "error";
		}
	}	

//PLAN GENERAL
	$PGD = trim($_POST['PGD']);
	if (empty($PGD)) {
		$msjPGD = "Las Acciones del Plan General de Desarrollo 2016-2019 con el que se articula el proyecto, máximo de 2000 caracteres.";
		$error[4][3] = "error";
	}elseif(strlen($PGD)>=2000){
		$msjPGD = "Recuerde que  las Acciones del Plan General de Desarrollo 2016-2019 con el que se articula el proyecto es de maxímo 2000 caracteres";
		$error[4][3] = "error";
	}
?>	