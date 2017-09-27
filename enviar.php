<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($telefono) || empty($comentario) ) {
	$error = true;
}


/****************************************************************
Aquí debes ingresar el Asunto del mail
****************************************************************/
$subject = 'Contacto desde internet de ' . $nombre ;
$comentario = stripcslashes($comentario);



/****************************************************************
Aquí se genera el cuerpo del mensaje
****************************************************************/
$mensaje = "De: $nombre \n
E-mail: $email \n
Telefono: $telefono \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("davichotk@gmail.com", $subject, $mensaje, $from);
}
?>
				
<?php include ("code-head.php"); ?>
<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
		<div class="bg-cont">
				<header class="page-header">
					<h2 class="text-center">Cont&aacute;ctenos</h2>
				</header>	
	
		<article class="single-page">
			
			<div class="container page-content">

				<div class="col-right">
					<p><strong>Celulares:</strong>  (593) 099 905 9364 / (593) 096 906 2732<br>
					<strong>Telf.:</strong> (593) 04 501 9708<br>
					<strong>E-mail:</strong> <a href="mailto:info@accesoriosparabaterias.com ">info@accesoriosparabaterias.com </a><br><br>
				Guayaquil - Ecuador	</p>
				</div>

			<div class="col-left">
					<h1><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Contactos</h1>
					
					<p class="text-center">Gracias por enviar tus comentarios y/o sugerencias<br />
					En un lapso de 24 horas responderemos a su correo electr&oacute;nico.<br /><br />

					Atentamente,<br />

				AB Accesorios para Baterias<br /><br />

				Este mensaje fue enviado al siguiente correo electr&oacute;nico: <a href="mailto:info@accesoriosparabaterias.com ">info@accesoriosparabaterias.com </a> </p>
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
					<form action="enviar.php" method="post">
						
						<label for="nombre">Nombre:</label>
						<input type="text" id="nombre" name="nombre" required />
						
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" required />
						
						<label for="telefono">Telefono:</label>
						<input type="text" id="telefono" name="telefono" required />
						
						<label for="mensaje">Mensaje:</label>
						<textarea id="mensaje" name="mensaje" rows="8" required ></textarea>
						
						<input type="submit" value="Enviar mensaje" class="call-to-action" />
					
					</form>
				
				<?php } else { ?>
				
					<p>Gracias por contactarnos, responder&eacute;mos a sus inquietudes lo antes posible.</p>
				
				<?php } ?>
				</div><!-- /.content -->	
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>