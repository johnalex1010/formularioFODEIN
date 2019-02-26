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

// //CONCEPTO
// 	if (!empty($_POST['FEConcep'][0])) {
// 		$c = count($_POST['FEConcep']);

// 		for ($i=0; $i < $c; $i++) { 
// 			$_POST['FEConcep'][$i];
// 		}
// 	}

// //DESCRIPCIÓN
// 	if (!empty($_POST['FEDesc'][0])) {
// 		$c = count($_POST['FEDesc']);

// 		for ($i=0; $i < $c; $i++) { 
// 			$_POST['FEDesc'][$i];
// 		}
// 	}

// //TOTAL EN PESOS
// 	if (!empty($_POST['FETotal'][0])) {
// 		$c = count($_POST['FETotal']);

// 		for ($i=0; $i < $c; $i++) { 
// 			$_POST['FETotal'][$i];
// 		}
// 	}

//Validar o recorriendo los valores de FODEIN
	$FEConcep = $_POST['FEConcep'];
	$FEDesc = $_POST['FEDesc'];
	$FETotal = $_POST['FETotal'];
	$contInvesFEConcep = count($FEConcep);
	for ($iFEConcep=0; $iFEConcep<$contInvesFEConcep; $iFEConcep++) {
	    $echo1 .= "<tr>";
	    $echo1 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$FEConcep[$iFEConcep]."</td>";
	    $echo1 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$FEDesc[$iFEConcep]."</td>";
	    $echo1 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>$ ".$FETotal[$iFEConcep]."</td>";
	    $echo1 .= "</tr>";
	}
?>