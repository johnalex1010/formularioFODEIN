<?php

// ESCALAFÓN
	$FEescalafon = $_POST["FEescalafon"];
	if (empty($FEescalafon)) {$msjFEescalafon = "El escalafón es obligatorio.";$error[5][1] = "error";}

//HORAS INVESTIGADOR PRINCIPAL
	$FEHxMes = $_POST["FEHxMes"];
	if (empty($FEHxMes)) {$msjFEHxMes = "Las horas del mes son obligatorias.";$error[5][2] = "error";}

//TOTAL PESOS HORAS DEL INVESTIGADOR PRINCIAPL
	$FETortl = $_POST["FETortl"];
	if (empty($FETortl)) {$msjFETortl = "Las horas totales son obligatorias.";$error[5][3] = "error";}

//CONCEPTO
	if (!empty($_POST['FEConcep'][0])) {
		$c = count($_POST['FEConcep']);

		for ($i=0; $i < $c; $i++) { 
			echo $_POST['FEConcep'][$i] . "<br>	";
		}
	}

//DESCRIPCIÓN
	if (!empty($_POST['FEDesc'][0])) {
		$c = count($_POST['FEDesc']);

		for ($i=0; $i < $c; $i++) { 
			echo $_POST['FEDesc'][$i] . "<br>	";
		}
	}

//TOTAL EN PESOS
	if (!empty($_POST['FETotal'][0])) {
		$c = count($_POST['FETotal']);

		for ($i=0; $i < $c; $i++) { 
			echo $_POST['FETotal'][$i] . "<br>	";
		}
	}
?>