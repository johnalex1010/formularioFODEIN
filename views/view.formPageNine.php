<fieldset class="container">
	<section class="section-page">
		<h2>Paso 9</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="row">
			<div class="col-sm">
				<textarea name="PEval" id="" placeholder="Posibles evaluadores (Separar cada evaluador con comas)."><?php echo $PEval ?></textarea>
			</div>
			<div class="col-sm">
				<textarea name="ref" id="" placeholder="Referencia(s)"><?php echo $ref ?></textarea>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[9][1] ?>"><?php echo $msjCAP; ?></span>
				<b>Archivo PDF de: Carta de aval del grupo.</b>
				<input type="file" name="CAP" id="CAP" accept="application/pdf" name="MAX_FILE_SIZE" value="1000000">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[9][2] ?>"><?php echo $msjCACIP; ?></span>
				<b>Archivo PDF de: Copia del acta del comité de investigación del programa.</b>
				<input type="file" name="CACIP" id="CACIP" accept="application/pdf" name="MAX_FILE_SIZE" value="1000000">
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<span class="<?php echo $error[9][3] ?>"><?php echo $msjCAEE; ?></span>
				<b>Archivo PDF de: Cartas de autenticación de las entidades externas (Opcional).</b>
				<input type="file" name="CAEE" id="CAEE" accept="application/pdf" name="MAX_FILE_SIZE" value="1000000">
			</div>
			<div class="col-sm"></div>
		</div>
		<div class="row">
			<div class="col-sm">
				<span class="<?php echo $error[9][4] ?>"><?php echo $msjEmailCopia; ?></span>
				<input type="email" name="emailCopia" placeholder="Para recibir una copia de este formulario por favor digite aquí su correo electrónico." value="<?php echo $emailCopia ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="check">
					<span class="required">*</span>
					<span class="<?php echo $error[9][5] ?>"><?php echo $msjTerminos; ?></span>
					<input type="checkbox" name="terminos" value="Aceptar los términos y condiciones." class="option-input checkbox" <?php if (!empty($terminos)) {echo "checked";}?>>
					<label for="2. Compromiso con el proyecto educativo" >Aceptar los términos y condiciones. <a href="">Leer aquí</a></label>
				</div>
			</div>
		</div>
		<hr>
		<h2 style="text-align: center">ANTES DE PULSAR EL BOTÓN ENVIAR POR FAVOR VERIFICAR LOS CAMPOS DEL FORMULARIO</h2>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()">
</fieldset>