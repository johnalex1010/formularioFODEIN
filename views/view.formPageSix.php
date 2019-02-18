<fieldset class="container">
	<section class="section-page">
		<h2>Paso 6 - Co-Investigadores</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<h5>Si el proyecto tiene Co-Investigadores por favor relacionelos aquí.</h5>
		<div>
			<div class="row">
				<div class="col-sm">
					<input type="text" name="" placeholder="Nombre(s) y apellido(s) del Co-Investigador">
				</div>
				<div class="col-sm">
					<input type="text" name="" placeholder="Enlace CvLAC">
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<input type="text" name="" placeholder="Enlace ORCID">
				</div>
				<div class="col-sm">
					<input type="text" name="" placeholder="Enlace Google Académico">
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<select name="" id="">
						<option value="">Selecciona una división</option>
						<?php division(); ?>
					</select>
				</div>
				<div class="col-sm">
					<select name="" id="">
						<option value="">Selecciona una facultad</option>
						<?php facultad(); ?>
					</select>
				</div>
				<div class="col-sm">
					<select name="" id="">
						<option value="">Selecciona un programa</option>
						<?php programa(); ?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<select name="" id="">
						<option value="">Selecciona una línea activa</option>
						<?php lineaActiva(); ?>
					</select>
				</div>
				<div class="col-sm">
					<select name="" id="">
						<option value="">Seleccionar un campo de acción</option>
						<?php camposAccion(); ?>
					</select>
				</div>
				<div class="col-sm">
					<select name="" id="">
						<option value="">Seleccionar un grupo de investigación</option>
						<?php gInvestigacion(); ?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<input type="text" name="" placeholder="Escalafón">
				</div>
				<div class="col-sm">
					<input type="text" name="" placeholder="Horas por mes">
				</div>
				<div class="col-sm">
					<input type="tel" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)">
				</div>
			</div>
			<hr>
		</div>
		<!-- <hr> -->
		<div class="input_fields_wrapCO">
		<!-- Dynamic Fields go here -->
		</div>
		Agregar Co-Investigador <button id="add2" class="add add_field_buttonCO">+</button>

		<div class="row">
			<div class="col-sm"></div>
			<div class="col-sm"></div>
			<div class="col-sm">
				<span class="required">*</span>
				<input type="tel" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total FODEIN en pesos ($)">
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<input type="submit" data-btn="final" value="Enviar Proyecto">
</fieldset>