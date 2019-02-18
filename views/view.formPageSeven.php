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
							<span class="required">*</span>
							<!-- <span class="error">Soy un error</span> -->
							<input type="text" placeholder="Nombres completos">
						</td>
						<td>
							<span class="required">*</span>
							<!-- <span class="error">Soy un error</span> -->
							<input type="text" placeholder="Escalafón">
						</td>
						<td>
							<span class="required">*</span>
							<!-- <span class="error">Soy un error</span> -->
							<input type="text" placeholder="Horas por mes">
						</td>
						<td>
							<span class="required">*</span>
							<!-- <span class="error">Soy un error</span> -->
							<input type="tel" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)">
						</td>
						<td>Agregar item <button id="add3" class="add add_field_buttonCE-A">+</button></td>
					</tr>
				</tbody>
			</table>
			<div class="input_fields_wrapCE-A">
			<!-- Dynamic Fields go here -->
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
								<select name="[]" id="">
									<option value="">Seleccionar concepto</option>
									<?php concepto(); ?>
								</select>
							</td>
							<td><input type="text" name="[]" placeholder="Descripción"></td>
							<td><input type="tel" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)"></td>
						</tr>
					</tbody>
			</table>
			<div class="input_fields_wrapCE-B">
			<!-- Dynamic Fields go here -->
			</div>
		</div>
		<div class="row">
			<div class="col-8"></div>
			<div class="col-4">
				<input type="tel" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total contrapartida externa en pesos ($)">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-8">El valor total del proyecto es la suma del FODEIN y de la Contrapartida Externa</div>
			<div class="col-4">
				<span class="required">*</span>
				<input type="tel" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Valor total del proyecto en pesos ($)">
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<input type="submit" data-btn="final" value="Enviar Proyecto">
</fieldset>