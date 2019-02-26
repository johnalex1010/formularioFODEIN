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




$nomInvesCE = $_POST['nomInvesCE'];
$escalafonCE = $_POST['escalafonCE'];
$HxMesCE = $_POST['HxMesCE'];
$TotalHCE = $_POST['TotalHCE'];
$contInvesCE = count($nomInvesCE);
$rowspanInvesCE = $contInvesCE+1;
for ($iCE=0; $iCE<$contInvesCE; $iCE++) { 
 	$echo4 .= "<tr>";           
    $echo4 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$nomInvesCE[$iCE]."</td>";
    $echo4 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$escalafonCE[$iCE]."</td>";
    $echo4 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$HxMesCE[$iCE]."</td>";
    $echo4 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>$ ".$TotalHCE[$iCE]."</td>";
    $echo4 .= "</tr>";
}

// Validando conceptos de los investigadores de la contrapartida externa
$CEConcep = $_POST['CEConcep'];
$CEDesc = $_POST['CEDesc'];
$CETotal = $_POST['CETotal'];

$contInvesCEConcep = count($CEConcep);
for ($iCEConcep=0; $iCEConcep<$contInvesCEConcep; $iCEConcep++) {
    $echo5 .= "<tr>";
    $echo5 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$CEConcep[$iCEConcep]."</td>";
    $echo5 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$CEDesc[$iCEConcep]."</td>";
    $echo5 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>$ ".$CETotal[$iCEConcep]."</td>";
    $echo5 .= "</tr>";
}



$TCE=$_POST['TCE'];

//TOTAL VALOR DEL PROYECTO EN PESOS
	$TVPr = $_POST['TVPr'];
	if (empty($TVPr)) {
		$error[7][2] = "error";
		$msjTVPr = "El campo es oblogatorio";
	}
?>