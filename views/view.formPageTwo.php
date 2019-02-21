<fieldset class="container">
	<section class="section-page">
		<h2>Paso 2</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][1] ?>"><?php echo $msjResumen ?></span>
				<textarea name="resumenPro" id="resumenPro" maxlength="1000" placeholder="Resumen de la proopuesta (1000 caracteres maxímo)" onKeyDown="contar1()" onKeyUp="contar1()"><?php echo $_POST['resumenPro'] ?></textarea>
				<input disabled value="1000" id="contadorUno" class="contador">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][2] ?>"><?php echo $msjPalabrasClave; ?></span>
				<textarea name="palabrasClave" id="palabrasClave" maxlength="2000" placeholder="palabras clave (separadas por coma)" onKeyDown="contar2()" onKeyUp="contar2()"><?php echo $_POST['palabrasClave'] ?></textarea>
				<input disabled value="2000" id="contadorDos" class="contador">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][3] ?>"><?php echo $msjPlanteamiento; ?></span>
				<textarea name="planteamiento" id="planteamiento" maxlength="2000" placeholder="Planteamiento del problema y pregunta de investigación" onKeyDown="contar3()" onKeyUp="contar3()"><?php echo $_POST['planteamiento'] ?></textarea>
				<input disabled value="2000" id="contadorTres" class="contador">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][4] ?>"><?php echo $msjJustificacion; ?></span>
				<textarea name="justificacion" id="justificacion" maxlength="2000" placeholder="Justificación" onKeyDown="contar4()" onKeyUp="contar4()"><?php echo $_POST['justificacion'] ?></textarea>
				<input disabled value="2000" id="contadorCuatro" class="contador">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][5] ?>"><?php echo $msjObjGen; ?></span>
				<textarea name="ObjGen" id="ObjGen" maxlength="2000" placeholder="Objetivo general" onKeyDown="contar5()" onKeyUp="contar5()"><?php echo $_POST['ObjGen'] ?></textarea>
				<input disabled value="2000" id="contadorCinco" class="contador">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][6] ?>"><?php echo $msjObjEsp; ?></span>
				<textarea name="ObjEsp" id="ObjEsp" maxlength="2000" placeholder="Objetivos específicos" onKeyDown="contar6()" onKeyUp="contar6()"><?php echo $_POST['ObjEsp'] ?></textarea>
				<input disabled value="2000" id="contadorSeis" class="contador">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][7] ?>"><?php echo $msjMarcoTeorico; ?></span>
				<b>Por favor adjunte un PDF del marco teórico de un máximo de 5MB.</b>
				<input type="file" name="marcoTeorico" accept="appliation/pdf" name="MAX_FILE_SIZE" value="6000000">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[2][8] ?>"><?php echo $msjPlanteamiento; ?></span>
				<textarea name="metodologia" id="metodologia" maxlength="2000" placeholder="Metodología" onKeyDown="contar7()" onKeyUp="contar7()"><?php echo $_POST['metodologia'] ?></textarea>
				<input disabled value="2000" id="contadorSiete" class="contador">
			</div>
		</div>

	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<!-- <input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>