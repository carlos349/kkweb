<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a style="color:#605B56;margin-right:150px;font-family: 'Prata', serif;" class="navbar-brand" href="inicio"><img style="width:30%" src="views/images/logokk.png" alt="">K&K Pretty Nails</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li id="inicio" class="nav-item"><a href="inicio" class="nav-link"> <b>Inicio</b> </a></li>
	          <li id="nosotros" class="nav-item"><a href="Nosotros" class="nav-link"> <b>Nosotros</b></a></li>
	          <li id="servicios" class="nav-item"><a href="servicios" class="nav-link"> <b>Servicios</b></a></li>
	          <!-- <li id="especialistas" class="nav-item"><a href="Especialistas" class="nav-link">Especialistas</a></li> -->
			  <li id="galery" class="nav-item"><a href="Galeria" class="nav-link"> <b>Galería</b></a></li>
	          <li id="contacto" class="nav-item"><a href="Contacto" class="nav-link"> <b>Contacto</b></a></li>
			  <li id="contacto" class="nav-item"><a href="http://kkprettynails.cl/#/agendamientoCliente" class="nav-link">Agendar</a></li>
			  
			  <li>
			  <?php 
			  if (isset($_SESSION['correo'])) {
				  
				  ?>
				  <li id="contacto" class="nav-item"><a href="cerrarSesion" class="nav-link">Cerrar sesión</a></li>
				  <li id="contacto"  class="nav-item"><a style="font-size:13px !important;font-weight:600" href="cerrarSesion" class="nav-link"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?></a></li>
				  <?php
				  
			  }
			  else{
				  ?><li id="contacto" class="nav-item"><a href="Ingreso" class="nav-link">Ingresar</a></li><?php
			  } 
			  ?>
			  </li>
			  
	        </ul>
	      </div>
		  </div>
	  </nav>
