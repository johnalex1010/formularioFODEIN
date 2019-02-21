<?php
//HORAS NOMINA CONTRAPARTIDA
	$nomInvesCE = $_POST['nomInvesCE'];
	if (!empty($nomInvesCE[0])) {
		for ($i=0; $i < count($nomInvesCE); $i++) { 
			if (!preg_match($permitidos,$nomInvesCE[$i])) {
				$msjNomInvesCE[$i] = "El campo es incorrecto";
				$error[7][1][$i] = "error";
			}
		}		
	}

//ESCALAFÓN
	$escalafonCE = $_POST['escalafonCE'];

//HORAS POR MES
	$HxMesCE = $_POST['HxMesCE'];

//HORAS POR MES
	$TotalHCE = $_POST['TotalHCE'];

//CONCEPTO
	$CEConcep = $_POST['CEConcep'];

//DESCRIPCIÓN
	$CEDesc = $_POST['CEDesc'];

//TOTAL EN PESOS
	$CETotal = $_POST['CETotal'];

//TOTAL VALOR DEL PROYECTO EN PESOS
	$TVPr = $_POST['TVPr'];
	if (empty($TVPr)) {
		$error[7][2] = "error";
		$msjTVPr = "El campo es oblogatorio";
	}
?>