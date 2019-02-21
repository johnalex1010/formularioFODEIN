<?php
// Tipos de producto: Generación de nuevo conocimiento
	$AI = $_POST['AI'];
	if (!$AI=="") {if (!is_numeric($AI)) {$msjAI = "El campo debe ser númerico.";$error[3][1] = "error";}}

	$LI = $_POST['LI'];
	if (!$LI=="") {if (!is_numeric($LI)) {$msjLI = "El campo debe ser númerico.";$error[3][2] = "error";}}

	$CI = $_POST['CI'];
	if (!$CI=="") {if (!is_numeric($CI)) {$msjCI = "El campo debe ser númerico.";$error[3][3] = "error";}}

	$PTPP = $_POST['PTPP'];
	if (!$PTPP=="") {if (!is_numeric($PTPP)) {$msjPTPP = "El campo debe ser númerico.";$error[3][4] = "error";}}

	$VV = $_POST['VV'];
	if (!$VV=="") {if (!is_numeric($VV)) {$msjVV = "El campo debe ser númerico.";$error[3][5] = "error";}}

// Tipos de producto: Actividades de investigación, desarrollo e innovación
	$PTCV = $_POST['PTCV'];
	if (!$PTCV=="") {if (!is_numeric($PTCV)) {$msjPTCV = "El campo debe ser númerico.";$error[3][6] = "error";}}

	$PE = $_POST['PE'];
	if (!$PE=="") {if (!is_numeric($PE)) {$msjPE = "El campo debe ser númerico.";$error[3][7] = "error";}}

	$RNRT = $_POST['RNRT'];
	if (!$RNRT=="") {if (!is_numeric($RNRT)) {$msjRNRT = "El campo debe ser númerico.";$error[3][8] = "error";}}

	$CCT = $_POST['CCT'];
	if (!$CCT=="") {if (!is_numeric($CCT)) {$msjCCT = "El campo debe ser númerico.";$error[3][9] = "error";}}

	$IS = $_POST['IS'];
	if (!$IS=="") {if (!is_numeric($IS)) {$msjIS = "El campo debe ser númerico.";$error[3][10] = "error";}}

// Tipos de producto: Apropiación social del conocimiento
	$PCiu = $_POST['PCiu'];		
	if (!$PCiu=="") {if (!is_numeric($PCiu)) {$msjPCiu = "El campo debe ser númerico.";$error[3][11] = "error";}}

	$TC = $_POST['TC'];
	if (!$TC=="") {if (!is_numeric($TC)) {$msjTC = "El campo debe ser númerico.";$error[3][12] = "error";}}

	$GC = $_POST['GC'];
	if (!$GC=="") {if (!is_numeric($GC)) {$msjGC = "El campo debe ser númerico.";$error[3][13] = "error";}}

	$CC = $_POST['CC'];
	if (!$CC=="") {if (!is_numeric($CC)) {$msjCC = "El campo debe ser númerico.";$error[3][14] = "error";}}

	$CCE = $_POST['CCE'];
	if (!$CCE=="") {if (!is_numeric($CCE)) {$msjCCE = "El campo debe ser númerico.";$error[3][15] = "error";}}

// Tipos de producto: Formación de Recursos Humanos
	$TDoc = $_POST['TDoc'];
	if (!$TDoc=="") {if (!is_numeric($TDoc)) {$msjTDoc = "El campo debe ser númerico.";$error[3][16] = "error";}}

	$TM = $_POST['TM'];
	if (!$TM=="") {if (!is_numeric($TM)) {$msjTM = "El campo debe ser númerico.";$error[3][17] = "error";}}

	$TG = $_POST['TG'];
	if (!$TG=="") {if (!is_numeric($TG)) {$msjTG = "El campo debe ser númerico.";$error[3][18] = "error";}}

	$PIDF = $_POST['PIDF'];
	if (!$PIDF=="") {if (!is_numeric($PIDF)) {$msjPIDF = "El campo debe ser númerico.";$error[3][19] = "error";}}

	$APF = $_POST['APF'];
	if (!$APF=="") {if (!is_numeric($APF)) {$msjAPF = "El campo debe ser númerico.";$error[3][20] = "error";}}
?>