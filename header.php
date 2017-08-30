	<!-- Main-header -->
	<header id="main-header" class="">
		<div class="header-cont">
			<!-- Logo-header -->
			<div class="logo-header">
				<h1 class="logo">
					<a href="index.php">
						<img src="img/logo_baterias.png" alt="Accesorios para Baterias"  title="Accesorios para Baterias" width="240"></h1>
					</a>
				<h2 class="slogan">Accesorios para Baterias</h2>
			</div>

			
			<span class="menu-trigger"><i class="fa fa-bars"></i></span>
			
			<!-- Main-menu -->
			<nav id="main-menu" role="navigation" class="closed">


				<ul>
					<li><a href="index.php" <?php if($uri == 'inicio') echo 'class="active"'?> >Inicio</a></li>
					<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
					<li><a href="productos.php" <?php if($uri == 'productos') echo 'class="active"'?> >Productos</a></li>
					<li><a href="contactenos.php" <?php if($uri == 'convenios') echo 'class="active"'?> >Cont&aacute;ctenos</a></li>
				</ul>

			<div class="redes">
				<span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
				<span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
				<span class="cel">0999059364 <i class="fa fa-mobile" aria-hidden="true"></i></span>
			</div>
			</nav>
		</div>
	</header>

