<fieldset class="container">
	<section class="section-page">
		<h2>Paso 1</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][1] ?>"><?php echo $msjTitulo ?></div>
				<input type="text" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="100" placeholder="Título del proyecto" name="titulo" value="<?php echo $_POST['titulo'] ?>">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][2] ?>"><?php echo $msjDuracion ?></div>
				<input type="text" name="duracion" pattern="[a-zA-Z0-9 ñÑáéíóúÁÉÍÓÚ]{3,50}" placeholder="Duración del proyecto (en meses)" value="<?php echo $_POST['duracion'] ?>">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][3] ?>"><?php echo $msjLugar ?></div>
				<input type="text" name="lugar" pattern="[a-zA-Z0-9 ñÑáéíóúÁÉÍÓÚ]{3,50}" placeholder="Lugar de ejecución" value="<?php echo $_POST['lugar']; ?>">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][4] ?>"><?php echo $msjNombresIN ?></div>
				<input type="text" name="nombresIN" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" placeholder="Nombres y apellidos del investigador principal" value="<?php echo $_POST['nombresIN'] ?>">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][5] ?>"><?php echo $msjUrlCVLAC ?></div>
				<input type="text" name="urlCvLAC" placeholder="Enlace CvLAC" value="<?php echo $_POST['urlCvLAC'] ?>">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][6] ?>"><?php echo $msjUrlORCID ?></div>
				<input type="text" name="urlORCID" placeholder="Enlace ORCID" value="<?php echo $_POST['urlORCID'] ?>">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][7] ?>"><?php echo $msjUrlGooAca ?></div>
				<input type="text" name="urlGooAca" placeholder="Enlace Google Académico" value="<?php echo $_POST['urlGooAca'] ?>">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][8] ?>"><?php echo $msjDivision ?></div>
				<select name="division" id="">
					<?php if (empty($_POST['division'])): ?>
						<option value="">Seleccione una división</option>
					<?php else: ?>
						<option value="<?php echo $_POST['division'] ?>" selected><?php echo $_POST['division'] ?></option>
					<?php endif ?>					
					<?php division(); ?>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][9] ?>"><?php echo $msjFacultad ?></div>
				<select name="facultad" id="">
					<?php if (empty($_POST['facultad'])): ?>
						<option value="">Seleccione una facultad</option>
					<?php else: ?>
						<option value="<?php echo $_POST['facultad'] ?>" selected><?php echo $_POST['facultad'] ?></option>
					<?php endif ?>		
					<?php facultad(); ?>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][10] ?>"><?php echo $msjPrograma ?></div>
				<select name="programa" id="">
					<?php if (empty($_POST['programa'])): ?>
						<option value="">Seleccione un programa</option>
					<?php else: ?>
						<option value="<?php echo $_POST['programa'] ?>" selected><?php echo $_POST['programa'] ?></option>
					<?php endif ?>	
					<?php programa(); ?>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][11] ?>"><?php echo $msjlineaActiva ?></div>
				<select name="lineaActiva" id="">
					<?php if (empty($_POST['lineaActiva'])): ?>
						<option value="">Seleccione una línea activa</option>
					<?php else: ?>
						<option value="<?php echo $_POST['lineaActiva'] ?>" selected><?php echo $_POST['lineaActiva'] ?></option>
					<?php endif ?>	
					<?php lineaActiva(); ?>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][12] ?>"><?php echo $msjcamposAccion ?></div>
				<select name="camposAccion" id="">
					<?php if (empty($_POST['camposAccion'])): ?>
						<option value="">Seleccione un campo acción</option>
					<?php else: ?>
						<option value="<?php echo $_POST['camposAccion'] ?>" selected><?php echo $_POST['camposAccion'] ?></option>
					<?php endif ?>	
					<?php camposAccion(); ?>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<div class="<?php echo $error[1][13] ?>"><?php echo $msjgInvestigacion ?></div>
				<select name="gInvestigacion" id="">
					<?php if (empty($_POST['gInvestigacion'])): ?>
						<option value="">Seleccione un grupo investigación</option>
					<?php else: ?>
						<option value="<?php echo $_POST['gInvestigacion'] ?>" selected><?php echo $_POST['gInvestigacion'] ?></option>
					<?php endif ?>	
					<?php gInvestigacion(); ?>
				</select>
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<!-- <input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>
