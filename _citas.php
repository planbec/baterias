<div class="citas">
		<form action="enviar_cita.php" method="post">
		<h2>Agenda tu cita</h2>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre" required="">
		<input type="text" id="email" name="email" placeholder="email" required="">
		<input type="text" id="telefono" name="telefono" placeholder="Teléfono" required="">
		<select>
		  <option value="doctor">Doctor</option>
		  <option value="mauricio-riofrio">Dr. Mauricio Riofrio Riofrio</option>
		  <option value="carlos-freire">Dr. Carlos Freire Alprecht</option>
		  <option value="rene-alvarez">Dr. René Alvarez</option>
		  <option value="ericka-judith">Dra. Ericka Judith Serrano</option>
		  <option value="monica-jarrin">Dra. Mónica Jarrín Álvarez</option>
		</select>
		<input type="text" id="dia" name="dia" placeholder="Día" required="">
		<input type="submit" value="Enviar" class="btn-form">
	</form>
</div>