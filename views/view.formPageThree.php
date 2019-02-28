<fieldset class="container">
	<section class="section-page">
		<h2>Paso 3 - RESULTADOS ESPERADOS</h2>
		<p>Recuerde que los campos con aterisco (<span> * </span>) son obligatorios.</p>
		<hr>
		<?php
		if ($error[3]) {
			echo $msjPaso3 = "<span class='error'>Tiene ".count($error[3])." errores por favor depliegue las opciones para solucionarlos.</span>";
		}
		?>
		<div class="row">
			<div class="col-sm">
				<div class="wrapper">
				  <div class="half">
				    <div class="tab">
						<input id="tab-one" type="checkbox" name="tabs" class="tabs">
						<label for="tab-one">Tipos de producto: Generación de nuevo conocimiento</label>
						<div class="tab-content">
							<p>
								<table class="tablePaso3">
									<tr>
										<td>Artículos de investigación</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="AI" placeholder="Cantidad" value="<?php echo $_POST['AI']; ?>"></td><td><span class="<?php echo $error[3][1] ?>"><?php echo $msjAI; ?></span></td>
									</tr>
									<tr>
										<td>Libros de investigación</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="LI" placeholder="Cantidad" value="<?php echo $_POST['LI']; ?>"></td><td><span class="<?php echo $error[3][2] ?>"><?php echo $msjLI; ?></span></td>
									</tr>
									<tr>
										<td>Capítulos de investigación</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="CI" placeholder="Cantidad" value="<?php echo $_POST['CI']; ?>"></td><td><span class="<?php echo $error[3][3] ?>"><?php echo $msjCI; ?></span></td>
									</tr>
									<tr>
										<td>Productos tecnológicos patentados o en proceso</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="PTPP" placeholder="Cantidad" value="<?php echo $_POST['PTPP']; ?>"></td><td><span class="<?php echo $error[3][4] ?>"><?php echo $msjPTPP; ?></span></td>
									</tr>
									<tr>
										<td>Variedades vegetales</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="VV" placeholder="Cantidad" value="<?php echo $_POST['VV']; ?>"></td><td><span class="<?php echo $error[3][5] ?>"><?php echo $msjVV; ?></span></td>
									</tr>
								</table>
							</p>
						</div>
				    </div>
				    <div class="tab">
				      <input id="tab-two" type="checkbox" name="tabs" class="tabs">
				      <label for="tab-two">Tipos de producto: Actividades de investigación, desarrollo e innovación</label>
				      <div class="tab-content">
				        	<p>
								<table class="tablePaso3">
									<tr>
										<td>Productos tecnológicos certificados o validos</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="PTCV" placeholder="Cantidad" value="<?php echo $_POST['PTCV']; ?>"></td><td><span class="<?php echo $error[3][6] ?>"><?php echo $msjPTCV; ?></span></td>
									</tr>
									<tr>
										<td>Productos empresariales</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="PE" placeholder="Cantidad" value="<?php echo $_POST['PE']; ?>"></td><td><span class="<?php echo $error[3][7] ?>"><?php echo $msjPE; ?></span></td>
									</tr>
									<tr>
										<td>Regulaciones, normas y reglamentos ténicos</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="RNRT" placeholder="Cantidad" value="<?php echo $_POST['RNRT']; ?>"></td><td><span class="<?php echo $error[3][8] ?>"><?php echo $msjRNRT; ?></span></td>
									</tr>
									<tr>
										<td>Consultorías cientifícas y tecnológicas</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="CCT" placeholder="Cantidad" value="<?php echo $_POST['CCT']; ?>"></td><td><span class="<?php echo $error[3][9] ?>"><?php echo $msjCCT; ?></span></td>
									</tr>
									<tr>
										<td>Innovación social</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="IS" placeholder="Cantidad" value="<?php echo $_POST['IS']; ?>"></td><td><span class="<?php echo $error[3][10] ?>"><?php echo $msjIS; ?></span></td>
									</tr>
								</table>
							</p>
				      </div>
				    </div>
				    <div class="tab">
				      <input id="tab-three" type="checkbox" name="tabs" class="tabs">
				      <label for="tab-three">Tipos de producto: Apropiación social del conocimiento</label>
				      <div class="tab-content">
				        	<p>
								<table class="tablePaso3">
									<tr>
										<td>Participación ciudadana</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="PCiu" placeholder="Cantidad" value="<?php echo $_POST['PCiu']; ?>"></td><td><span class="<?php echo $error[3][11] ?>"><?php echo $msjPCiu; ?></span></td>
									</tr>
									<tr>
										<td>Transferencia del conocimiento</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="TC" placeholder="Cantidad" value="<?php echo $_POST['TC']; ?>"></td><td><span class="<?php echo $error[3][12] ?>"><?php echo $msjTC; ?></span></td>
									</tr>
									<tr>
										<td>Gestión del conocimiento</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="GC" placeholder="Cantidad" value="<?php echo $_POST['GC']; ?>"></td><td><span class="<?php echo $error[3][13] ?>"><?php echo $msjGC; ?></span></td>
									</tr>
									<tr>
										<td>Comunicación del conocimiento</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="CC" placeholder="Cantidad" value="<?php echo $_POST['CC']; ?>"></td><td><span class="<?php echo $error[3][14] ?>"><?php echo $msjCC; ?></span></td>
									</tr>
									<tr>
										<td>Circulación de conocimiento especializado</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="CCE" placeholder="Cantidad" value="<?php echo $_POST['CCE']; ?>"></td><td><span class="<?php echo $error[3][15] ?>"><?php echo $msjCCE; ?></span></td>
									</tr>
								</table>
							</p>
				      </div>
				    </div>
				    <div class="tab">
				      <input id="tab-four" type="checkbox" name="tabs" class="tabs">
				      <label for="tab-four">Tipos de producto: Formación de Recursos Humanos</label>
				      <div class="tab-content">
				       		<p>
								<table class="tablePaso3">
									<tr>
										<td>Tesis de doctorado</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="TDoc" placeholder="Cantidad" value="<?php echo $_POST['TDoc']; ?>"></td><td><span class="<?php echo $error[3][16] ?>"><?php echo $msjTDoc; ?></span></td>
									</tr>
									<tr>
										<td>Tesis de maestría</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="TM" placeholder="Cantidad" value="<?php echo $_POST['TM']; ?>"></td><td><span class="<?php echo $error[3][17] ?>"><?php echo $msjTM; ?></span></td>
									</tr>
									<tr>
										<td>Trabajos de grado</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="TG" placeholder="Cantidad" value="<?php echo $_POST['TG']; ?>"></td><td><span class="<?php echo $error[3][18] ?>"><?php echo $msjTG; ?></span></td>
									</tr>
									<tr>
										<td>Proyectos de ID+i con formación</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="PIDF" placeholder="Cantidad" value="<?php echo $_POST['PIDF']; ?>"></td><td><span class="<?php echo $error[3][19] ?>"><?php echo $msjPIDF; ?></span></td>
									</tr>
									<tr>
										<td>Apoyo a programas de formación</td>
										<td><input type="tel" pattern="[0-9]{1,3}" name="APF" placeholder="Cantidad" value="<?php echo $_POST['APF']; ?>"></td><td><span class="<?php echo $error[3][20] ?>"><?php echo $msjAPF; ?></span></td>
									</tr>
								</table>
							</p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<input type="button" name="prev" class="btn-prev" data-btn="atras" value="Atras" />
	<input type="button" name="next" class="btn-next" data-btn="siguiente" value="Siguiente" />
	<!-- <input type="submit" name="submit" id="submit" data-btn="final" value="Enviar Proyecto" onclick="progressBar()"> -->
</fieldset>