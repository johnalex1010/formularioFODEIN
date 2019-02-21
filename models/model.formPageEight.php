<?php
//ACTIVIDAD
	$actividad = $_POST['actividad'];
	if (!empty($actividad[0])) {
		for ($i=0; $i < count($actividad); $i++) { 
			if (empty($actividad[$i])) {
				$error[8][1][$i] = "error";
				$msjActividad[$i] = "El campo es obligatorio";
			}
		}
	}else{
		$error[8][1][0] = "error";
		$msjActividad[0] = "El campo es obligatorio";
	}

//FECHA INICIO
	$FIni = $_POST['FIni'];
	if (!empty($FIni[0])) {
		for ($i=0; $i < count($FIni); $i++) {
			if (empty($FIni[$i])) {
				$error[8][2][$i] = "error";
				$msjFIni[$i] = "El campo es obligatorio";
			}
		}
	}else{
		$error[8][2][0] = "error";
		$msjFIni[0] = "El campo es obligatorio";
	}
		

//FECHA FIN
	$FFIn = $_POST['FFIn'];
	if (!empty($FFIn[0])) {
		for ($i=0; $i < count($FFIn); $i++) {
			if (!empty($FFIn[$i])) {
				if ($FFIn[$i] < $FIni[$i]) {
					$error[8][3][$i] = "error";
					$msjFFIn[$i] = "El campo fecha fin debe ser mayor";
				}
			}else{
				$error[8][3][$i] = "error";
				$msjFFIn[$i] = "El campo es obligatorio";
			}
		}
	}else{
		$error[8][3][0] = "error";
		$msjFFIn[0] = "El campo es obligatorio";
	}
		
		
?>