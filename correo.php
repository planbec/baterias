<html>
<head>
<style>
.errores {
	background:red;
	display:none;
	position:absolute;
	padding:10px;
	margin-top:-80px;
	margin-left:340px;
	}
</style>

<script>
	var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

	$(document).ready(function(){
		$("#Enviar").click(function(){
			var nombre = $("#nombre").val();
			var correo = $("#email").val();
			var correo = $("#telefono").val();

			if(nombre == ""){
				$("#mensaje1").fadeIn();
				return false;
			}
		});
	}):
</script>

</head>
<body>

				<form action="enviar_cita.php" method="post">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre" required=""><div id="mensaje1" class="errores">Escribe un nombre</div>
					<input type="text" id="email" name="email" placeholder="email" required=""><div id="mensaje2" class="errores">Escribe un mail valido</div>
					<input type="text" id="telefono" name="telefono" placeholder="Teléfono" required="">
					<select name="doctor">
					  <option value="">Doctor...</option>
					  <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
					  <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
					  <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
					  <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
					</select>
					<input type="text" id="dia" name="dia" placeholder="Día" required="">
					<input type="submit" id="enviar" value="Enviar" class="btn-form">
				</form>


</body>
</html>