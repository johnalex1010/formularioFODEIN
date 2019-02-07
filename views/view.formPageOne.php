<div class="container">
	<section class="section-page">
		<h2>Paso 1</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<!-- <span class="error">Soy un error</span> -->
				<input type="text" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" placeholder="Titulo del proyecto" name="titulo">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" pattern="[a-zA-Z0-9 ñÑáéíóúÁÉÍÓÚ]{3,50}" placeholder="Duración del proyecto (en meses)">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" pattern="[a-zA-Z0-9 ñÑáéíóúÁÉÍÓÚ]{3,50}" placeholder="Lugar de ejecución">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" placeholder="Nombres y apellidos del investigador principal">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" placeholder="Enlace CvLAC">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" placeholder="Enlace ORCID">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" placeholder="Enlace Google Académico">
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<select name="" id="">
					<option value="">Seleccione una división</option>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<select name="" id="">
					<option value="">Seleccione una facultad</option>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<select name="" id="">
					<option value="">Seleccione un programa</option>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<select name="" id="">
					<option value="">Seleccione una línea activa</option>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<select name="" id="">
					<option value="">Seleccione un campo de acción</option>
				</select>
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<select name="" id="">
					<option value="">Seleccione un grupo de investigación</option>
				</select>
			</div>
		</div>
	</section>
	<div class="row">
		<div class="col-sm">
			<input type="button" data-btn="siguiente" value="Siguiente">
			<!-- <input type="submit" data-btn="final" value="Enviar Proyecto"> -->
		</div>
	</div>


	<!-- <input type="submit" data-btn="atras" value="Atras"> 
	<input type="submit" data-btn="siguiente" value="Siguiente">
	<input type="submit" data-btn="final" value="Enviar Proyecto">
	<input type="text" disabled value="Quedan 2000 caracteres."> -->
</div>