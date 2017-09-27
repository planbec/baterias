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
			<p>Si deseas comunicarte con nosotros puedes llamarnos a nuestros tel&eacute;fonos <br>o solo llena y env&iacute;a el siguiente formulario y nos pondremos en contacto a la brevedad posible.</p>
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
				</div>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>