<?php

//CONTROLLER
require_once 'controller.funciones.php';

if (isset($_POST['submit'])) {
	$permitidos = '/^[A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50}$/i';
	$noValidos = array('Select', 'Into', 'Update', 'Like', 'From');
	$permitirURL = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i';

	//MODELS
	require_once 'models/model.formPageOne.php';
	require_once 'models/model.formPageTwo.php';
	require_once 'models/model.formPageThree.php';
	require_once 'models/model.formPageFour.php';
	require_once 'models/model.formPageFive.php';
	require_once 'models/model.formPageSix.php';
	require_once 'models/model.formPageSeven.php';
	require_once 'models/model.formPageEight.php';
	require_once 'models/model.formPageNine.php';

	if (isset($error)) {
		echo "<div class='modals' id='modals'>";
			echo "<div class='contentModal'>";
				echo "<h4>Resumen de errores</h4><hr>";
				echo "<div class='contentItem'>";
					echo "<ul>";
						$a = count($error[1]);
						if ($a == 0) {echo "<li style='background: #25CB91'>PASO 1: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 1: Tiene ".$a." errores.</li>";}
						$b = count($error[2]);
						if ($b == 0) {echo "<li style='background: #25CB91'>PASO 2: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 2: Tiene ".$b." errores.</li>";}
						$c = count($error[3]);
						if ($c == 0) {echo "<li style='background: #25CB91'>PASO 3: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 3: Tiene ".$c." errores.</li>";}
						$d = count($error[4]);
						if ($d == 0) {echo "<li style='background: #25CB91'>PASO 4: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 4: Tiene ".$d." errores.</li>";}
						$e = count($error[5]);
						if ($e == 0) {echo "<li style='background: #25CB91'>PASO 5: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 5: Tiene ".$e." errores.</li>";}
						$f = count($error[6]);
						if ($f == 0) {echo "<li style='background: #25CB91'>PASO 6: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 6: Tiene ".$f." errores.</li>";}
						$g = count($error[7]);
						if ($g == 0) {echo "<li style='background: #25CB91'>PASO 7: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 7: Tiene ".$g." errores.</li>";}
						$h = count($error[8]);
						if ($h == 0) {echo "<li style='background: #25CB91'>PASO 8: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 8: Tiene ".$h." errores.</li>";}
						$i = count($error[9]);
						if ($i == 0) {echo "<li style='background: #25CB91'>PASO 9: Esta correcto.</li>";}else{echo "<li style='background: #ED4D4C'>PASO 9: Tiene ".$i." errores.</li>";}
					echo "</ul>";
				echo "</div><hr>";
				echo "<p>Tenga en cuenta volver a cargar los archivos adjuntos.</p><hr>";
				echo "<div class='btn btn-danger' id='cerrarModal'>Cerrar</div>";
			echo "</div>";
		echo "</div>";
	}else{
		$tituloProyectoMK = str_replace(" ", "_", $titulo);
		$dirProyecto = "Docs/Proyecto_".$tituloProyectoMK;
		if (!file_exists($dirProyecto)) {
		    mkdir($dirProyecto, 0777, true);
		    // echo "Se crea la carpeta con el nombre: ".$dirProyecto."<br>";
		    move_uploaded_file($tmpMT, $dirProyecto."/".$fileNameMT);
		    move_uploaded_file($tmpCAP, $dirProyecto."/".$fileNameCAP);
		    move_uploaded_file($tmpCACIP, $dirProyecto."/".$fileNameCACIP);
		    move_uploaded_file($tmpFEBIC, $dirProyecto."/".$fileNameFEBIC);
		    move_uploaded_file($tmpCAEE, $dirProyecto."/".$fileNameCAEE);
		    // echo "Se guarda el documento: ".$fileNameMT."<br>";
		    // echo "Se guarda el documento: ".$fileNameCAP."<br>";
		    // echo "Se guarda el documento: ".$fileNameCACIP."<br>";
		    // echo "Se guarda el documento: ".$fileNameFEBIC."<br>";
		    // echo "Se guarda el documento: ".$fileNameCAEE."<br>";

		    include ("models/model.envioEmail.php");

		}else{
			echo "<div class='modals' id='modals'><div class='contentModal'>El nombre del proyecto ya existe.<hr><div class='btn btn-danger' id='cerrarModal'>Cerrar</div></div></div>";
		}
	}
}

	

//VIEWS
require_once 'views/view.formPageOne.php';	
require_once 'views/view.formPageTwo.php';
require_once 'views/view.formPageThree.php';
require_once 'views/view.formPageFour.php';
require_once 'views/view.formPageFive.php';
require_once 'views/view.formPageSix.php';
require_once 'views/view.formPageSeven.php';
require_once 'views/view.formPageEight.php';
require_once 'views/view.formPageNine.php';

?>