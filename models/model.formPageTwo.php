<?php
//RESUMEN
	$resumenPro = trim(htmlspecialchars($_POST['resumenPro']));
	if (empty($resumenPro)) {
		$msjResumen = "El resumen es obligatorio, máximo de 1000 caracteres.";
		$error[2][1] = "error";
	}elseif(strlen($resumenPro)>1011){
		$msjResumen = "Recuerde que el resumen es de maxímo 1000 caracteres";
		$error[2][1] = "error";
	}

//PALABRAS CLAVE
	$palabrasClave = trim($_POST['palabrasClave']);
	if ($palabrasClave == "") {
		$msjPalabrasClave = "Las palabras clave son obligatorias, separar por comas (,).";
		$error[2][2] = "error";
	}elseif(strlen($palabrasClave)>2022){
		$msjPalabrasClave = "Recuerde que las palabras clave son de maxímo 2000 caracteres";
		$error[2][2] = "error";
	}

//PLANTEAMIENTO
	$planteamiento = trim($_POST['planteamiento']);
	if ($planteamiento == "") {
		$msjPlanteamiento = "El planteamiento es obligatorio, máximo de 2000 caracteres.";
		$error[2][3] = "error";
	}elseif(strlen($planteamiento)>2022){
		$msjPlanteamiento = "Recuerde que el planteamiento es de maxímo 2000 caracteres";
		$error[2][3] = "error";
	}

//JUSTIFICACIÓN
	$justificacion = trim($_POST['justificacion']);
	if ($justificacion == "") {
		$msjJustificacion = "La justificación es obligatoria, máximo de 2000 caracteres.";
		$error[2][4] = "error";
	}elseif(strlen($justificacion)>2022){
		$msjJustificacion = "Recuerde que la justificación es de maxímo 2000 caracteres";
		$error[2][4] = "error";
	}

//OBJETIVO GENERAL
	$ObjGen = trim($_POST['ObjGen']);
	if ($ObjGen == "") {
		$msjObjGen = "El objetivo general es obligatorio, máximo de 2000 caracteres.";
		$error[2][5] = "error";
	}elseif(strlen($ObjGen)>2022){
		$msjObjGen = "Recuerde que el objetivo general es de maxímo 2000 caracteres";
		$error[2][5] = "error";
	}

//OBJETIVO ESPECÍFICO
	$ObjEsp = trim($_POST['ObjEsp']);
	if ($ObjEsp == "") {
		$msjObjEsp = "Los objetivos específicos son obligatorios, máximo de 2000 caracteres.";
		$error[2][6] = "error";
	}elseif(strlen($ObjEsp)>2022){
		$msjObjEsp = "Recuerde que los objetivos específicos son de un maxímo 2000 caracteres";
		$error[2][6] = "error";
	}

//MARCO TEÓRICO -- falta

//METODOLOGÍA
	$metodologia = trim($_POST['metodologia']);
	if ($metodologia == "") {
		$msjMetodologia = "La metodologia es obligatoria, máximo de 2000 caracteres.";
		$error[2][8] = "error";
	}elseif(strlen($metodologia)>2202){
		$msjMetodologia = "Recuerde que la metodologia es de maxímo 2000 caracteres";
		$error[2][8] = "error";
	}
?>