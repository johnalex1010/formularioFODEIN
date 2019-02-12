<fieldset class="container">
	<section class="section-page">
		<h2>Paso 5</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="row">
			<div class="col-sm">Horas nómina del investigador principal</div>
			<div class="col-sm">
				<span class="required">*</span>
				<!-- <span class="error">Soy un error</span> -->
				<input type="text" placeholder="Escalafón">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<!-- <span class="error">Soy un error</span> -->
				<input type="text" placeholder="Horas por mes">
			</div>
			<div class="col-sm">
				<span class="required">*</span>
				<input type="text" placeholder="Total horas en pesos ($)">
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
								<select name="[]" id="">
									<option value="">Seleccionar concepto</option>
									<?php concepto(); ?>
								</select>
							</td>
							<td><input type="text" name="[]" placeholder="Descripción"></td>
							<td><input type="text" name="[]" placeholder="Total en pesos ($)"></td>
						</tr>
					</tbody>
			</table>
			<div class="input_fields_wrap">
			<!-- Dynamic Fields go here -->
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<input type="submit" data-btn="final" value="Enviar Proyecto">
</fieldset>