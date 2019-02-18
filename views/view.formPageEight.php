<fieldset class="container">
	<section class="section-page">
		<h2>Paso 8 - Cronograma</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<div class="table-responsive-sm">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th>Actividad</th>
						<th>Fecha inicio</th>
						<th>Fecha final</th>
						<th>Agregar items <button id="add1" class="add add_field_buttonCAL">+</button></th>
					</tr>
				</thead>
					<tbody>
						<tr>
							<td>
								<span class="required">*</span>
								<input type="text" name="[]" placeholder="Actividad">
							</td>
							<td>
								<span class="required">*</span>
								<input type="date" name="[]" placeholder="Descripción">
							</td>
							<td>
								<span class="required">*</span>
								<input type="date" name="[]" placeholder="Total en pesos ($)">
							</td>
						</tr>
					</tbody>
			</table>
			<div class="input_fields_wrapCAL">
			<!-- Dynamic Fields go here -->
			</div>
		</div>	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<input type="submit" data-btn="final" value="Enviar Proyecto">
</fieldset>