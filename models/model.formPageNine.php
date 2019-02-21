<?php
//POSIBLES EVALUADORES
	$PEval = $_POST['PEval'];

//REFERENCIAS
	$ref = $_POST['ref'];

//La carta de aval del grupo
	$tipoFileCAP = $_FILES['CAP']['type'];
	$pesoCAP = $_FILES['CAP']['size'];
	$fileNameCAP = $_FILES['CAP']['name'];
	$tmpCAP = $_FILES['CAP']['tmp_name'];

	if ($tmpCAP == "") {
		$msjCAP = "La carta de aval del grupo es obligatoria.";
		$error[9][1] = "error";
	}elseif($tipoFileCAP == "application/pdf"){
		if ($pesoCAP > 1500000) {
			$msjCAP = "El archivo debe ser un PDF, máximo de 1Mb";
			$error[9][1] = "error";
		}
	}else{
		$msjCAP = "El archivo debe ser un PDF, máximo de 1Mb";
		$error[9][1] = "error";
	}

// Validando la Copia del acta del comité de investigación del programa
	$tipoFileCACIP = $_FILES['CACIP']['type'];
	$pesoCACIP = $_FILES['CACIP']['size'];
	$fileNameCACIP = $_FILES['CACIP']['name'];
	$tmpCACIP = $_FILES['CACIP']['tmp_name'];

	if ($tmpCACIP == "") {
		$msjCACIP = "La copia del acta del comité de investigación del programa es obligatoria.";
		$error[9][2] = "error";
	}elseif($tipoFileCACIP == "application/pdf"){
		if ($pesoCACIP > 1500000) {
			$msjCACIP = "El archivo debe ser un PDF, máximo de 1Mb";
			$error[9][2] = "error";
		}
	}else{
		$msjCACIP = "El archivo debe ser un PDF, máximo de 1Mb";
		$error[9][2] = "error";
	}

// Validando las cartas de autenticación de las entidades externas
	$tipoFileCAEE = $_FILES['CAEE']['type'];
	$pesoCAEE = $_FILES['CAEE']['size'];
	$fileNameCAEE = $_FILES['CAEE']['name'];
	$tmpCAEE = $_FILES['CAEE']['tmp_name'];

	if (!$tmpCAEE == "") {
		if($tipoFileCAEE == "application/pdf"){
			if ($pesoCAEE > 1500000){
				$msjCAEE = "El archivo debe ser un PDF, máximo de 1Mb";
				$error[9][3] = "error";
			}
		}else{
			$msjCAEE = "El archivo debe ser un PDF, máximo de 1Mb";
			$error[9][3] = "error";
		}
	}

//EMAIL COPIA
	$emailCopia = $_POST['emailCopia'];
	if (!$emailCopia == ""){
		if (!filter_var($emailCopia, FILTER_VALIDATE_EMAIL)){
			$msjEmailCopia = "El email no es valido";
			$error[9][4] = "error";
		}
	}

//TÉRMINOS Y CONDICIONES
	$terminos = $_POST['terminos'];

	if (empty($terminos)) {
		$error[9][5] = "error";
		$msjTerminos = "Debe aceptar los términos y condiciones.";
	}
?>