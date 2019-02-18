<?php
//PASO1
	//TITULO
	$titulo = trim(htmlspecialchars(mb_convert_case($_POST['titulo'], MB_CASE_TITLE, "UTF-8")));

	if (empty($titulo)) {
		$msjTitulo = "El campo es obligatorio";
		$error[1][1] = "error";
	}else{
		for ($i=0; $i < count($noValidos); $i++) { 
			preg_match("/".$noValidos[$i]."/", $titulo, $conteo);
			if (count($conteo) > 0) {
				$msjTitulo = "El titulo es incorrecto";
				$error[1][1] = "error";
			}
		}
	}

	//DURACIÓN
	$duracion = trim(htmlspecialchars(mb_convert_case($_POST['duracion'], MB_CASE_TITLE, "UTF-8")));
	if (empty($duracion)) {
		$msjDuracion = "El campo es obligatorio";
		$error[1][2] = "error";
	}else{
		for ($i=0; $i < count($noValidos); $i++) { 
			preg_match("/".$noValidos[$i]."/", $duracion, $conteo);
			if (count($conteo) > 0) {
				$msjDuracion = "El campo es incorrecto";
				$error[1][1] = "error";
			}
		}
	}

	//LUGAR
	$lugar = trim(htmlspecialchars(mb_convert_case($_POST['lugar'], MB_CASE_TITLE, "UTF-8")));
	if (empty($lugar)) {
		$msjLugar = "El campo es obligatorio";
		$error[1][3] = "error";
	}else{
		for ($c=0; $c < count($noValidos); $c++) { 
			preg_match("/".$noValidos[$c]."/", $lugar, $conteo);
			if (count($conteo) > 0) {
				$msjLugar = "El campo es incorrecto";
				$error[1][3] = "error";
			}
		}
	}

	//NOMBRES Y APELLIDOS DEL INVESTIGADOR PRINCIPAL
	$nombresIN = trim(htmlspecialchars(mb_convert_case($_POST['nombresIN'], MB_CASE_TITLE, "UTF-8")));
	if (empty($nombresIN)) {
		$msjNombresIN = "El campo es obligatorio";
		$error[1][4] = "error";
	}elseif(!preg_match($permitidos,$nombresIN)){
		$msjNombresIN = "El campo es incorrecto";
		$error[1][4] = "error";
	}

	//URL CvLAC
	$urlCvLAC = $_POST["urlCvLAC"];
	if (empty($urlCvLAC)) {
		$msjUrlCVLAC = "El campo es obligatorio";
		$error[1][5]= "error";
	}elseif(!preg_match($permitirURL, $urlCvLAC)){
		$msjUrlCVLAC = "La URL ingresada no es valida.";
		$error[1][5]= "error";
	}

	//URL ORCID
	$urlORCID = $_POST["urlORCID"];
	if (empty($urlORCID)) {
		$msjUrlORCID = "El campo es obligatorio";
		$error[1][6]= "error";
	}elseif(!preg_match($permitirURL, $urlORCID)){
		$msjUrlORCID = "La URL ingresada no es valida.";
		$error[1][6]= "error";
	}

	//URL Google Acádemico
	$urlGooAca = $_POST["urlGooAca"];
	if (empty($urlGooAca)) {
		$msjUrlGooAca = "El campo es obligatorio";
		$error[1][7]= "error";
	}elseif(!preg_match($permitirURL, $urlGooAca)){
		$msjUrlGooAca = "La URL ingresada no es valida.";
		$error[1][7]= "error";
	}

	//DIVISION
	$division = $_POST['division'];
	if (empty($_POST['division'])) {
		$msjDivision = "El campo es obligatorio";
		$error[1][8]= "error";
	}

	//FACULTAD
	$facultad = $_POST['facultad'];
	if (empty($_POST['facultad'])) {
		$msjFacultad = "El campo es obligatorio";
		$error[1][9]= "error";
	}

	//PROGRAMA
	$programa = $_POST['programa'];
	if (empty($_POST['programa'])) {
		$msjPrograma = "El campo es obligatorio";
		$error[1][10]= "error";
	}

	//LÍNEA DE ACCIÓN
	$lineaActiva = $_POST['lineaActiva'];
	if (empty($_POST['lineaActiva'])) {
		$msjlineaActiva = "El campo es obligatorio";
		$error[1][11]= "error";
	}

	//CAMPOS DE ACCIÓN
	$camposAccion = $_POST['camposAccion'];
	if (empty($_POST['camposAccion'])) {
		$msjcamposAccion = "El campo es obligatorio";
		$error[1][12]= "error";
	}

	//GRUPO DE INVESTIGACIÓN
	$gInvestigacion = $_POST['gInvestigacion'];
	if (empty($_POST['gInvestigacion'])) {
		$msjgInvestigacion = "El campo es obligatorio";
		$error[1][13]= "error";
	}	
?>