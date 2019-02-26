<?php
//NOMBRE DE CO-INVESTIGADOR
	$nombreInvestigadorCO = $_POST['nombreInvestigadorCO'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($i=0; $i < count($nombreInvestigadorCO); $i++) {
			if (!empty($nombreInvestigadorCO[$i])) {
				if (!preg_match($permitidos,$nombreInvestigadorCO[$i])) {
					$error[6][1][$i] = "error";
					$msjNombreInvestigadorCO[$i] = "El campo es incorrecto";
				}
			}
		}
	}else{
		unset($nombreInvestigadorCO);
	}

//URL CVLAC
	$urlCvLACCO = $_POST['urlCvLACCO'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($j=0; $j <= count($urlCvLACCO); $j++) { 
			if (!empty($urlCvLACCO[$j])) {
				if (!empty($nombreInvestigadorCO[$j])) {
					if (!preg_match($permitirURL, $urlCvLACCO[$j])) {
						$error[6][2][$j] = "error";
						$msjUrlCvLACCO[$j] = "El campo es incorrecto";
					}
				}
			}
		}
	}else{
		unset($urlCvLACCO);
	}

//URL ORCID
	$urlORCIDCO = $_POST['urlORCIDCO'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($k=0; $k <= count($urlORCIDCO); $k++) { 
			if (!empty($urlORCIDCO[$k])) {
				if (!empty($nombreInvestigadorCO[$k])) {
					if (!preg_match($permitirURL, $urlORCIDCO[$k])) {
						$error[6][3][$k] = "error";
						$msjUrlORCIDCO[$k] = "El campo es incorrecto";
					}
				}
			}
		}
	}else{
		unset($urlORCIDCO);
	}

//URL Google Académico
	$urlGooAcaCO = $_POST['urlGooAcaCO'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($l=0; $l <= count($urlGooAcaCO); $l++) { 
			if (!empty($urlGooAcaCO[$l])) {
				if (!empty($nombreInvestigadorCO[$l])) {
					if (!preg_match($permitirURL, $urlGooAcaCO[$l])) {
						$error[6][4][$l] = "error";
						$msjUrlGooAcaCO[$l] = "El campo es incorrecto";
					}
				}
			}
		}
	}else{
		unset($urlGooAcaCO);
	}

//DIVISIÓN	
	$divisionCOI = $_POST['divisionCOI'];
	
//FACULTAD
	$facultadCOI = $_POST['facultadCOI'];

//PROGRAMA
	$programaCOI = $_POST['programaCOI'];

//LÍNEA ACTIVA
	$lineaActivaCOI = $_POST['lineaActivaCOI'];

//CAMPOS DE ACCIÓN
	$camposAccionCOI = $_POST['camposAccionCOI'];

//GRUPOS DE INVESTIGACIÓN
	$gInvestigacionCOI = $_POST['gInvestigacionCOI'];

//ESCALAFÓN-CO
	$esfalafonCOI = $_POST['esfalafonCOI'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($m=0; $m < count($esfalafonCOI); $m++) {
			if (empty($nombreInvestigadorCO[$m])) {
				unset($nombreInvestigadorCO[$m]);
			}
		}
	}else{
		unset($nombreInvestigadorCO);
	}

//HORAS POR MES-CO
	$hxmCOI = $_POST['hxmCOI'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($n=0; $n< count($hxmCOI); $n++) {
			if (empty($nombreInvestigadorCO[$n])) {
				unset($nombreInvestigadorCO[$n]);
			}
		}
	}else{
		unset($nombreInvestigadorCO);
	}

//TOTAL PESOS-CO
	$thCOI = $_POST['thCOI'];
	if (!empty($nombreInvestigadorCO[0])) {
		for ($o=0; $o< count($thCOI); $o++) {
			if (empty($nombreInvestigadorCO[$o])) {
				unset($nombreInvestigadorCO[$o]);
			}
		}
	}else{
		unset($nombreInvestigadorCO);
	}

//TOTAL FODEIN EN PESOS
	$TFodein = $_POST['TFodein'];
	if (empty($TFodein)) {
		$error[6][5] = "error";
		$msjTFodein = "El campo es obligatorio";
	}

$contCOI = count($nombreInvestigadorCO);
$rowspanCOI = $contCOI+1;
//For para coinvestigadores con URL
for ($iCO=0; $iCO<$contCOI; $iCO++) {
	$echo2 .= "<tr>";
    $echo2 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$nombreInvestigadorCO[$iCO]."</td>";
    $echo2 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$urlCvLACCO[$iCO]."</td>";
    $echo2 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$urlORCIDCO[$iCO]."</td>";
    $echo2 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$urlGooAcaCO[$iCO]."</td>";
    $echo2 .= "</tr>";
}
//For para coinvestigadores FODEIN
	for ($iCO=0; $iCO<$contCOI; $iCO++) {
		$echo3 .= "<tr>"; 
	    $echo3 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$nombreInvestigadorCO[$iCO]."</td>";
	    $echo3 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$esfalafonCOI[$iCO]."</td>";
	    $echo3 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>".$hxmCOI[$iCO]."</td>";
	    $echo3 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;'>$ ".$thCOI[$iCO]."</td>";
	    $echo3 .= "</tr>";
	}

	for ($iCO=0; $iCO<$contCOI; $iCO++) {
		$echo7 .= "<tr>";
       	$echo7 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;' width='16.666%'>".$divisionCOI[$iCO]."</td>";
       	$echo7 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;' width='16.666%'>".$facultadCOI[$iCO]."</td>";
       	$echo7 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;' width='16.666%'>".$programaCOI[$iCO]."</td>";
       	$echo7 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;' width='16.666%'>".$lineaActivaCOI[$iCO]."</td>";
       	$echo7 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;' width='16.666%'>".$camposAccionCOI[$iCO]."</td>";
       	$echo7 .= "<td style='padding: 0.3rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: center;' width='16.666%'>".$gInvestigacionCOI[$iCO]."</td>";
    	$echo7 .= "</tr>";
	}
?>