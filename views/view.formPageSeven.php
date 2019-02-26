<fieldset class="container">
	<section class="section-page">
		<h2>Paso 7 - Contrapartida extrerna</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<h5>Horas nómina</h5>
		<div class="table-responsive-sm">
			<table class="table">
				<tbody>
					<tr>
						<td>
							<div class="<?php echo $error[7][1][0] ?>"><?php echo $msjNomInvesCE[0] ?></div>
							<input type="text" name="nomInvesCE[]" placeholder="Nombres completos" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" value="<?php echo $nomInvesCE[0] ?>">
						</td>
						<td>
							<input type="text" name="escalafonCE[]" placeholder="Escalafón" value="<?php echo $escalafonCE[0] ?>">
						</td>
						<td>
							<input type="text" name="HxMesCE[]" placeholder="Horas por mes" value="<?php echo $HxMesCE[0] ?>">
						</td>
						<td>
							<input type="tel"  name="TotalHCE[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)" value="<?php echo $TotalHCE[0] ?>">
						</td>
						<td>Agregar item <button id="add3" class="add add_field_buttonCE-A">+</button></td>
					</tr>
				</tbody>
			</table>
			<div class="input_fields_wrapCE-A">
			<!-- Dynamic Fields go here -->
			<?php if (!empty($nomInvesCE[0])): ?>
				<?php for ($i=1; $i < count($nomInvesCE); $i++): ?>
					<div class="removeMeCE-A">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<div class="<?php echo $error[7][1][$i] ?>"><?php echo $msjNomInvesCE[$i] ?></div>
										<input type="text" name="nomInvesCE[]" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" placeholder="Nombres completos" value="<?php echo $nomInvesCE[$i] ?>">
									</td>
									<td>
										<input type="text" name="escalafonCE[]" placeholder="Escalafón" value="<?php echo $escalafonCE[$i] ?>">
									</td>
									<td>
										<input type="text" name="HxMesCE[]" placeholder="Horas por mes" value="<?php echo $HxMesCE[$i] ?>">
									</td>
									<td>
										<input type="tel"  name="TotalHCE[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)" value="<?php echo $TotalHCE[$i] ?>">
									</td>
									<td>Eliminar item <button class="remove-dateCE-A add minus" id="delete">-</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php endFor ?>
			<?php endif ?>
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
						<th>Agregar items <button id="add1" class="add add_field_buttonCE-B">+</button></th>
					</tr>
				</thead>
					<tbody>
						<tr>
							<td>
								<select name="CEConcep[]" id="">
									<?php if (empty($CEConcep[0])): ?>
										<option value="">Seleccionar concepto</option>
									<?php else: ?>
										<option value="<?php echo $CEConcep[0] ?>"><?php echo $CEConcep[0] ?></option>
									<?php endif ?>
									
									<?php concepto(); ?>
								</select>
							</td>
							<td><input type="text" name="CEDesc[]" placeholder="Descripción" value="<?php echo $CEDesc[0] ?>"></td>
							<td><input type="tel" name="CETotal[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)" value="<?php echo $CETotal[0] ?>"></td>
						</tr>
					</tbody>
			</table>
			<div class="input_fields_wrapCE-B">
			<!-- Dynamic Fields go here -->
			<?php if (!empty($CEConcep[0])): ?>
				<?php for ($j=1; $j < count($CEConcep); $j++): ?>
					<div class="removeMeCE-B">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<select name="CEConcep[]" id="">
											<?php if (empty($CEConcep[$j])): ?>
												<option value="">Seleccionar concepto</option>
											<?php else: ?>
												<option value="<?php echo $CEConcep[$j] ?>"><?php echo $CEConcep[$j] ?></option>
											<?php endif ?>
											<?php concepto(); ?>
										</select>
									</td>
									<td><input type="text" name="CEDesc[]" placeholder="Descripción" value="<?php echo $CEDesc[$j] ?>"></td>
									<td><input type="tel" name="CETotal[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)" value="<?php echo $CETotal[$j] ?>"></td>
									<th>Eliminar items <button class="remove-dateCE-B add minus" id="delete">-</button></th>
								</tr>
							</tbody>
						</table>
					</div>
				<?php endFor ?>				
			<?php endif ?>
			</div>
		</div>
		<div class="row">
			<div class="col-8"></div>
			<div class="col-4">
				<input type="tel" name="TCE" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total contrapartida externa en pesos ($)" value="<?php echo $TCE; ?>">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-8">El valor total del proyecto es la suma del FODEIN y de la Contrapartida Externa</div>
			<div class="col-4">
				<span class="required">*</span>
				<span class="<?php echo $error[7][2]; ?>"><?php echo $msjTVPr; ?></span>
				<input type="tel" name="TVPr" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Valor total del proyecto en pesos ($)" value="<?php echo $TVPr ?>">
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<!-- <input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>