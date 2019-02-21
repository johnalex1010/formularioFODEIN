<fieldset class="container">
	<section class="section-page">
		<h2>Paso 5 - FODEIN</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<h5>Horas nómina del investigador principal</h5>
		<div class="row">
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[5][1] ?>"><?php echo $msjFEescalafon; ?></span>
				<input type="text" name="FEescalafon" placeholder="Escalafón" value="<?php echo $_POST['FEescalafon'] ?>">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[5][2] ?>"><?php echo $msjFEHxMes; ?></span>
				<input type="text" name="FEHxMes" placeholder="Horas por mes" value="<?php echo $_POST['FEHxMes'] ?>">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<span class="<?php echo $error[5][3] ?>"><?php echo $msjFETortl; ?></span>
				<input type="tel" name="FETortl" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)" value="<?php echo $_POST['FETortl'] ?>">
			</div>
		</div>
		<br>
		<div class="table-responsive-sm">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th>Concepto</th>
						<th>Descripción</th>
						<th>Total</th>
						<th>Agregar items <button id="add1" class="add add_field_button">+</button></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<select name="FEConcep[]" id="">
								<?php if (!empty($_POST['FEConcep'][0])): ?>
									<option value="<?php echo $_POST['FEConcep'][0] ?>"><?php echo $_POST['FEConcep'][0] ?></option>
								<?php else: ?>
								<?php unset($_POST['FEConcep']); ?>
								<?php endif ?>
								<option value="">Seleccionar concepto</option>
								<?php concepto(); ?>
							</select>
						</td>
						<td><input type="text" name="FEDesc[]" placeholder="Descripción" value="<?php if(!empty($_POST['FEConcep'][0])){echo $_POST['FEDesc'][0];}else{ echo "";} ?>"></td>
						<td><input type="tel" pattern="^([0-9.]{1,2})*$" name="FETotal[]" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)" value="<?php if(!empty($_POST['FEConcep'][0])){echo $_POST['FETotal'][0];}else{ echo "";} ?>"></td>
					</tr>
				</tbody>
			</table>
			<div class="input_fields_wrap">
			<!-- Dynamic Fields go here -->
				<?php for ($i=1; $i < count($_POST['FEConcep']); $i++): ?>
					<?php if (!empty($_POST['FEConcep'][$i])): ?>
						<div class="removeMe">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<select name="FEConcep[]" id="">
												<option value="<?php echo $_POST['FEConcep'][$i] ?>"><?php echo $_POST['FEConcep'][$i] ?></option>
												<option value="">Seleccionar concepto</option>
												<?php concepto(); ?>
											</select>
										</td>
										<td><input type="text" name="FEDesc[]" placeholder="Descripción" value="<?php echo $_POST['FEDesc'][$i] ?>"></td>
										<td><input type="tel" pattern="^([0-9.]{1,2})*$" name="FETotal[]" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)" value="<?php echo $_POST['FETotal'][$i] ?>"></td>
										<th>Eliminar items <button class="remove-date add minus" id="delete">-</button></th>
									</tr>
								</tbody>
							</table>
						</div>
					<?php endif ?>
				<?php endFor ?>
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()">
</fieldset>