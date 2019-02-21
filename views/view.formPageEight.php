<fieldset class="container">
	<section class="section-page">
		<h2>Paso 8 - Cronograma</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="table-responsive-sm">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th>Nombre de la actividad</th>
						<th>Fecha inicio</th>
						<th>Fecha final</th>
						<th>Agregar items <button id="add1" class="add add_field_buttonCAL">+</button></th>
					</tr>
				</thead>
					<tbody>
						<tr>
							<td>
								<span class="required">*</span>
								<div class="<?php echo $error[8][1][0] ?>"><?php echo $msjActividad[0] ?></div>
								<input type="text" name="actividad[]" placeholder="Nombre de la actividad" value="<?php echo $actividad[0] ?>">
							</td>
							<td>
								<span class="required">*</span>
								<div class="<?php echo $error[8][2][0] ?>"><?php echo $msjFIni[0] ?></div>
								<input type="date" name="FIni[]" value="<?php echo $FIni[0] ?>">
							</td>
							<td>
								<span class="required">*</span>
								<div class="<?php echo $error[8][3][0] ?>"><?php echo $msjFFIn[0] ?></div>
								<input type="date" name="FFIn[]" value="<?php echo $FFIn[0] ?>">
							</td>
						</tr>
					</tbody>
			</table>
			<div class="input_fields_wrapCAL">
			<!-- Dynamic Fields go here -->
			<?php if (!empty($actividad[0])): ?>
				<?php for ($i=1; $i < count($actividad); $i++): ?>
					<div class="removeMeCAL">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<span class="required">*</span>
										<div class="<?php echo $error[8][1][$i] ?>"><?php echo $msjActividad[$i] ?></div>
										<input type="text" name="actividad[]" placeholder="Nombre de la actividad" value="<?php echo $actividad[$i] ?>">
									</td>
									<td>
										<span class="required">*</span>
										<div class="<?php echo $error[8][2][$i] ?>"><?php echo $msjFIni[$i] ?></div>
										<input type="date" name="FIni[]" value="<?php echo $FIni[$i] ?>">
									</td>
									<td>
										<span class="required">*</span>
										<div class="<?php echo $error[8][3][$i] ?>"><?php echo $msjFFIn[$i] ?></div>
										<input type="date" name="FFIn[]" value="<?php echo $FFIn[$i] ?>">
									</td>
									<th>Eliminar items <button class="remove-dateCAL add minus" id="delete">-</button></th>
								</tr>
							</tbody>
						</table>
					</div>
				<?php endFor ?>
			<?php endif ?>
			</div>
		</div>	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<!-- <input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>