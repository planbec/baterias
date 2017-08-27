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
	mail("info@cismedical10.com", $subject, $mensaje, $from);
}
?>
				
<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
		<div class="bg-cont">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">		

				
				</div>
			</header><!-- /.page-header -->
			
			
			<div class="container page-content">

					<h1><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Contactos</h1>
					
					<p>Gracias por enviar tus comentarios y/o sugerencias<br />
					En un lapso de 24 horas responderemos a su correo electr&oacute;nico.<br /><br />

					Atentamente,<br />

				Centro M&eacute;dico Integral MEDICAL10<br /><br />

				Este mensaje fue enviado al siguiente correo electr&oacute;nico: <a href="mailto:info@cismedical10.com">info@cismedical10.com</a> </p>
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
					<form action="enviar.php" method="post">
						
						<label for="nombre">Nombre:</label>
						<input type="text" id="nombre" name="nombre" placeholder="¿Cómo te llamas?" value="<?php echo $nombre; ?>" required />
						
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" placeholder="¿A donde debería responderte?" value="<?php echo $email; ?>"  required />
						
						<label for="telefono">Telefono:</label>
						<input type="text" id="telefono" name="telefono" placeholder="¿Número para contactarte?" value="<?php echo $telefono; ?>"  required />
						
						<label for="mensaje">Mensaje:</label>
						<textarea id="mensaje" name="mensaje" rows="8" placeholder="Aquí debes explayarte" required ><?php echo $comentario; ?></textarea>
						
						<input type="submit" value="Enviar mensaje" class="btn" />
					
					</form>
				
				<?php } else { ?>
				
					<p>Gracias por contactarnos, responder&eacute;mos a sus inquietudes lo antes posible.</p>
				
				<?php } ?>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>