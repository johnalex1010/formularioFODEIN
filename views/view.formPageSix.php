<fieldset class="container">
	<section class="section-page">
		<h2>Paso 6 - Co-Investigadores</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<h5>Si el proyecto tiene Co-Investigadores por favor relacionelos aquí.</h5>
		<div>
			<div class="row">
				<div class="col-sm">
					<div class="<?php echo $error[6][1][0] ?>"><?php echo $msjNombreInvestigadorCO[0] ?></div>
					<input type="text" name="nombreInvestigadorCO[]" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" placeholder="Nombre(s) y apellido(s) del Co-Investigador" value="<?php echo $nombreInvestigadorCO[0] ?>">
				</div>
				<div class="col-sm">
					<div class="<?php echo $error[6][2][0] ?>"><?php echo $msjUrlCvLACCO[0] ?></div>
					<input type="text" name="urlCvLACCO[]" placeholder="Enlace CvLAC" value="<?php echo $urlCvLACCO[0] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="<?php echo $error[6][3][0] ?>"><?php echo $msjUrlORCIDCO[0] ?></div>
					<input type="text" name="urlORCIDCO[]" placeholder="Enlace ORCID" value="<?php echo  $urlORCIDCO[0] ?>">
				</div>
				<div class="col-sm">
					<div class="<?php echo $error[6][4][0] ?>"><?php echo $msjUrlGooAcaCO[0] ?></div>
					<input type="text" name="urlGooAcaCO[]" placeholder="Enlace Google Académico" value="<?php echo  $urlGooAcaCO[0] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<select name="divisionCOI[]" id="">
						<?php
							if (empty($divisionCOI[0])) {
								echo "<option value='' disable selected>Selecciona una división</option>";
							}else{
								echo "<option value='".$divisionCOI[0]."'>".$divisionCOI[0]."</option>";
							}
							division();
						?>
					</select>
				</div>
				<div class="col-sm">
					<select name="facultadCOI[]" id="">
						<?php
							if (empty($facultadCOI[0])) {
								echo "<option value='' disable selected>Selecciona una facultad</option>";
							}else{
								echo "<option value='".$facultadCOI[0]."'>".$facultadCOI[0]."</option>";
							}
							facultad();
						?>
					</select>
				</div>
				<div class="col-sm">
					<select name="programaCOI[]" id="">
						<?php
							if (empty($programaCOI[0])) {
								echo "<option value='' disable selected>Selecciona un programa</option>";
							}else{
								echo "<option value='".$programaCOI[0]."'>".$programaCOI[0]."</option>";
							}
							programa();
						?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<select name="lineaActivaCOI[]" id="">
						<?php
							if (empty($lineaActivaCOI[0])) {
								echo "<option value='' disable selected>Selecciona una línea activa</option>";
							}else{
								echo "<option value='".$lineaActivaCOI[0]."'>".$lineaActivaCOI[0]."</option>";
							}
							lineaActiva();
						?>
					</select>
				</div>
				<div class="col-sm">
					<select name="camposAccionCOI[]" id="">
						<?php
							if (empty($camposAccionCOI[0])) {
								echo "<option value='' disable selected>Seleccionar un campo de acción</option>";
							}else{
								echo "<option value='".$camposAccionCOI[0]."'>".$camposAccionCOI[0]."</option>";
							}
							camposAccion();
						?>
					</select>
				</div>
				<div class="col-sm">
					<select name="gInvestigacionCOI[]" id="">
						<?php
							if (empty($gInvestigacionCOI[0])) {
								echo "<option value='' disable selected>Seleccionar un grupo de investigación</option>";
							}else{
								echo "<option value='".$gInvestigacionCOI[0]."'>".$gInvestigacionCOI[0]."</option>";
							}
							gInvestigacion();
						?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<input type="text" name="esfalafonCOI[]" placeholder="Escalafón" value="<?php echo $_POST['esfalafonCOI'][0] ?>">
				</div>
				<div class="col-sm">
					<input type="text" name="hxmCOI[]" placeholder="Horas por mes" value="<?php echo $_POST['hxmCOI'][0] ?>">
				</div>
				<div class="col-sm">
					<input type="tel" name="thCOI[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)" value="<?php echo $_POST['thCOI'][0] ?>">
				</div>
			</div>
			<hr>
		</div>
		<div class="input_fields_wrapCO">
		<!-- Dynamic Fields go here -->
		<?php if (!empty($nombreInvestigadorCO[0])): ?>
			<?php for ($i=1; $i <= count($nombreInvestigadorCO); $i++): ?>
				<?php if (!empty($nombreInvestigadorCO[$i])): ?>
					<div class="removeMeCO">
						<div class="row">
							<div class="col-sm">
								<div class="<?php echo $error[6][1][$i] ?>"><?php echo $msjNombreInvestigadorCO[$i] ?></div>
								<input type="text" name="nombreInvestigadorCO[]" placeholder="Nombre(s) y apellido(s) del Co-Investigador" value="<?php echo $nombreInvestigadorCO[$i] ?>">
							</div>
							<div class="col-sm">
								<div class="<?php echo $error[6][2][$i] ?>"><?php echo $msjUrlCvLACCO[$i] ?></div>
								<input type="text" name="urlCvLACCO[]" placeholder="Enlace CvLAC" value="<?php echo $urlCvLACCO[$i] ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<div class="<?php echo $error[6][3][$i] ?>"><?php echo $msjUrlORCIDCO[$i] ?></div>
								<input type="text" name="urlORCIDCO[]" placeholder="Enlace ORCID" value="<?php echo $urlORCIDCO[$i] ?>">
							</div>
							<div class="col-sm">
								<div class="<?php echo $error[6][4][$i] ?>"><?php echo $msjUrlGooAcaCO[$i] ?></div>
								<input type="text" name="urlGooAcaCO[]" placeholder="Enlace Google Académico" value="<?php echo  $urlGooAcaCO[$i] ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<select name="divisionCOI[]" id="">
									<?php
										if (empty($divisionCOI[$i])) {
											echo "<option disable selected>Selecciona una división</option>";
										}else{
											echo "<option value='".$divisionCOI[$i]."'>".$divisionCOI[$i]."</option>";
										}
										division();
									?>
								</select>
							</div>
							<div class="col-sm">
								<select name="facultadCOI[]" id="">
									<?php
										if (empty($facultadCOI[$i])) {
											echo "<option value='' disable selected>Selecciona una facultad</option>";
										}else{
											echo "<option value='".$facultadCOI[$i]."'>".$facultadCOI[$i]."</option>";
										}
										facultad();
									?>
								</select>
							</div>
							<div class="col-sm">
								<select name="programaCOI[]" id="">
									<?php
										if (empty($programaCOI[$i])) {
											echo "<option value='' disable selected>Selecciona un programa</option>";
										}else{
											echo "<option value='".$programaCOI[$i]."'>".$programaCOI[$i]."</option>";
										}
										programa();
									?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<select name="lineaActivaCOI[]" id="">
									<?php
										if (empty($lineaActivaCOI[$i])) {
											echo "<option value='' disable selected>Selecciona una línea activa</option>";
										}else{
											echo "<option value='".$lineaActivaCOI[$i]."'>".$lineaActivaCOI[$i]."</option>";
										}
										lineaActiva();
									?>
								</select>
							</div>
							<div class="col-sm">
								<select name="camposAccionCOI[]" id="">
									<?php
										if (empty($camposAccionCOI[$i])) {
											echo "<option value='' disable selected>Seleccionar un campo de acción</option>";
										}else{
											echo "<option value='".$camposAccionCOI[$i]."'>".$camposAccionCOI[$i]."</option>";
										}
										camposAccion();
									?>
								</select>
							</div>
							<div class="col-sm">
								<select name="gInvestigacionCOI[]" id="">
									<?php
										if (empty($camposAccionCOI[$i])) {
											echo "<option value='' disable selected>Seleccionar un grupo de investigación</option>";
										}else{
											echo "<option value='".$camposAccionCOI[$i]."'>".$camposAccionCOI[$i]."</option>";
										}
										gInvestigacion();
									?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<input type="text" name="esfalafonCOI[]" placeholder="Escalafón" value="<?php echo $_POST['esfalafonCOI'][$i] ?>">
							</div>
							<div class="col-sm">
								<input type="text" name="hxmCOI[]" placeholder="Horas por mes" value="<?php echo $_POST['hxmCOI'][$i] ?>">
							</div>
							<div class="col-sm">
								<input type="tel" name="thCOI[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)" value="<?php echo $_POST['thCOI'][$i] ?>">
							</div>
						</div>
						<div style="text-align:right"><b>Eliminar Co-Investigador</b> <button class="remove-dateCO add minus" id="delete">-</button></div>
						<hr>
					</div>
				<?php endif ?>
			<?php endFor ?>
		<?php endif ?>
		</div>
		Agregar Co-Investigador <button id="add2" class="add add_field_buttonCO">+</button>

		<div class="row">
			<div class="col-sm"></div>
			<div class="col-sm"></div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[6][5] ?>"><?php echo $msjTFodein ?></span>
				<input type="tel" name="TFodein" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total FODEIN en pesos ($)" value="<?php echo $_POST['TFodein'] ?>">
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
<!-- 	<input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>