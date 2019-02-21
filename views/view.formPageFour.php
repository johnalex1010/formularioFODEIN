<fieldset class="container">
	<section class="section-page">
		<h2>Paso 4</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[4][1] ?>"><?php echo $msjMision; ?></span>
				<textarea name="mision" id="" placeholder="Contribución del proyecto al coumplimiento a la misión institucional."><?php echo $_POST['mision'] ?></textarea>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[4][2] ?>"><?php echo $msjPIM; ?></span>
				<h5>Seleccione las líneas del PIM que abarca el proyecto</h5>
				<div class="check">
					<input class="option-input checkbox" type='checkbox' name='PIM[]' value='1. Gobierno Consolidado y Fortalecido' <?php if(in_array("1. Gobierno Consolidado y Fortalecido", $PIM)) echo "checked" ?>>
					<label for='1. Gobierno Consolidado y Fortalecido'>1. Gobierno Consolidado y Fortalecido</label>
				</div>
				<div class="check">
					<input class="option-input checkbox" type='checkbox' name='PIM[]' value='2. Compromiso con el proyecto educativo' <?php if(in_array("2. Compromiso con el proyecto educativo", $PIM)) echo "checked" ?>>
					<label for='2. Compromiso con el proyecto educativo'>2. Compromiso con el proyecto educativo</label>
				</div>
				<div class="check">
					<input class="option-input checkbox" type='checkbox' name='PIM[]' value='3. Proyección social e investigación pertinentes' <?php if(in_array("3. Proyección social e investigación pertinentes", $PIM)) echo "checked" ?>>
					<label for='3. Proyección social e investigación pertinentes'>3. Proyección social e investigación pertinentes</label>
				</div>
				<div class="check">
					<input class="option-input checkbox" type='checkbox' name='PIM[]' value='4. Enriquecimiento regional de los programas con estándares comunes' <?php if(in_array("4. Enriquecimiento regional de los programas con estándares comunes", $PIM)) echo "checked" ?>>
					<label for='4. Enriquecimiento regional de los programas con estándares comunes'>4. Enriquecimiento regional de los programas con estándares comunes</label>
				</div>
				<div class="check">
					<input class="option-input checkbox" type='checkbox' name='PIM[]' value='5. Personas que transforman sociedad' <?php if(in_array("5. Personas que transforman sociedad", $PIM)) echo "checked" ?>>
					<label for='5. Personas que transforman sociedad'>5. Personas que transforman sociedad</label>
				</div>
				<div class="check">
					<input class="option-input checkbox" type='checkbox' name='PIM[]' value='6. Capacidad y gestión institucional que logran la efectividad Multicampus' <?php if(in_array("6. Capacidad y gestión institucional que logran la efectividad Multicampus", $PIM)) echo "checked" ?>>
					<label for='6. Capacidad y gestión institucional que logran la efectividad Multicampus'>6. Capacidad y gestión institucional que logran la efectividad Multicampus</label>
				</div>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[4][3] ?>"><?php echo $msjPGD; ?></span>
				<textarea name="PGD" id="" placeholder="Indique la Acciones del Plan General de Desarrollo 2016-2019 con el que se articula este proyecto."><?php echo $_POST['PGD']; ?></textarea>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<p>Ver la misión institucional <a href="http://www.usta.edu.co/index.php/nuestra-institucion/presentacion-1" target="_blank">aquí</a></p>
				<p>Ver las líneas del PIM <a href="http://planeacion.usta.edu.co/index.php/planeacion-en-la-usta/planeacion-integral-multicampus-pim-2016-2017/lineas-de-accion" target="_blank">aquí</a></p>
				<p>Ver las acciones del Plan General de Desarrollo 2016-2019 <a href="http://planeacion.usta.edu.co/index.php/planeacion-en-la-usta/plan-general-de-desarrollo-pgd-2016-2019/que-es-el-pgd-2016-2019" target="_blank">aquí</a></p>
			</div>
		</div>

	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<!-- <input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>