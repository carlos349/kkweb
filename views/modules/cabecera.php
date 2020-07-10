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
			 
			  <li id="contacto" class="nav-item"><a href="nada" class="nav-link">Agendar</a></li>
			  
			  <li>
			  <?php 
			  if (isset($_SESSION['correo'])) {
				  
				  ?>
				  <div style="margin-top: 15px;" class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					  <a class="dropdown-item" id="verPerfil" data-toggle="modal" data-target="#panelModal" href="#">Perfil de usuario</a>
					  <a class="dropdown-item" href="cerrarSesion">Cerrar sesion</a>
					</div>
				  </div>
				  
				  <?php
				  
			  }
			  else{
				  ?><li id="contacto" class="nav-item"><a href="" data-toggle="modal" data-target="#logModal" class="nav-link">Ingresar</a></li><?php
			  } 
			  ?>
			  </li>
			  
	        </ul>
	      </div>
		  </div>
	  </nav>

	  <input type="hidden"  id="valSys" value="<?php echo $_SESSION['idSys']; ?>">

	  <div class="modal fade" id="logModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-body p-3">
          <div class="row">
            <div style="background-color: white;" class="col-12 px-3"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				<center>
					<img style="width:35%" src="views/images/logokk.png" alt="">
				</center>
				<?php include 'loginAndRegister.php'; ?>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  <div class="modal fade" id="panelModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div style="background-color: transparent;border:none !important" class="modal-dialog modal-lg">
      <div style="background-color: transparent;border:none !important" class="modal-content">
        <div style="background-color: transparent;border:none !important" class="modal-header">
         
          
        </div>
        <div class="modal-body p-3">
          <div class="row">
            <div  class="col-12 p-3"> 
              

				<div class="containerPanel">
					<div class="box">
						<div class="top">
							<div class="icons-left">
								<div class="icons-container">
									<div class="eye activePanel"><i class="fa fa-eye" aria-hidden="true"></i></div>
									<div class="comments"><i class="fa fa-calendar"></i> <i class="fa fa-accusoft"></i></div>
									<div class="bell"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
									<div class="cog"><i class="fa fa-cog" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="icons-right">
								<div class="icons-container">
									<div class="search"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span style="color: #605b56;" aria-hidden="true">&times;</span>
									  </button></div>
								</div>
							</div>
						</div>
						<div class="bottom">
							<div class="dashboard">
											
								<div class="title">Estadisticas</div>
								<div class="description">
									
									  <ul >
										<li class="cardPanel">
										  <div class="card__flipper">
											<div class="card__front">
											  <p class="card__name mt-3">Servicios <br> realizados</p>
											  <p id="serviciosSys" class="card__num"></p>
											</div>
											<div class="card__back">
											  <svg height="180" width="180">
												<circle cx="90" cy="90" r="55" stroke="#514d9b" stroke-width="35" />
											  </svg>
											  <span>113.2</span>
											</div>
										  </div>
										</li>
										<li class="cardPanel">
										  <div class="card__flipper">
											<div class="card__front">
											  <p class="card__name mt-3">Citas <br> pendientes</p>
											  <p class="card__num citasPendi"></p>
											</div>
											<div class="card__back">
											  <svg height="180" width="180">
												<circle cx="90" cy="90" r="55" stroke="#35a541" stroke-width="35" />
											  </svg>
											  <span>112.2</span>
											</div>
										  </div>
										</li>
										<li class="cardPanel">
										  <div class="card__flipper">
											<div class="card__front">
											  <p class="card__name mt-3">Recomendaciones (Descuentos 15%)</p>
											  <p class="card__num reco"></p>
											</div>
											<div class="card__back">
											  <svg height="180" width="180">
												<circle cx="90" cy="90" r="55" stroke="#bdb235" stroke-width="35" />
											  </svg>
											  <span>103.3</span>
											</div>
										  </div>
										</li>
										
									  </ul>
									  <center>
										 <p style="font-size: 16px;text-align: center;"> 
											<span style="background-color: #605b56;padding: 10px;border:1px solid #605b56;">Link de recomendaciòn:</span> 
											<span id="referidoSys" style="border:1px solid #605b56;padding: 10px;margin-left: -10px;padding-left:20px;padding-right:20px "></span> 
											<button data-clipboard-target="#referidoSys" style="    border: none;
											padding: 5px;
											padding-left: 15px;
											padding-right: 15px;
											color: white;
											background-color: #605b56; ">Copiar</button> 
										</p> 
									  </center>
									  
									  
								</div>

								
							</div>
							<div class="comments-c">
								<div class="title">Històrico de servicios</div>
								<div class="description description1">
									<table style="font-size: 12px;" class="table">
										<thead class="thead-light">
										  <tr>
											<th scope="col">Fecha</th>
											<th scope="col">Servicio(s)</th>
											<th scope="col">Prestador</th>
											<th scope="col">Total</th>
											<th scope="col">Reagendar</th>
										  </tr>
										</thead>
										<tbody id="histServices">
										  
										  
										</tbody>
									  </table>
									  
								</div>
							</div>
							<div class="notification">
								 <div class="title">Citas pendiente</div>
								<div class="description description1">
									<table style="font-size: 12px;" class="table">
										<thead class="thead-light">
										  <tr>
											<th scope="col">Fecha</th>
											<th scope="col">Servicio(s)</th>
											<th scope="col">Prestador</th>
											<th scope="col"></th>
											<th scope="col">Confirmar</th>
										  </tr>
										</thead>
										<tbody class="bodyCitas">
										 
										  
										</tbody>
									  </table>
								</div>
							</div>
							<div class="settings">
								 <div class="title">Datos de usuario</div>
								<div class="description">
									<div class="contact-form">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" value="<?php echo $_SESSION['nombre']; ?>" class="form-control Mail-login" disabled="true" name="nombre" placeholder="Nombre">
												</div>
												<div class="form-group">
													<input type="email" value="<?php echo $_SESSION['correo']; ?>" class="form-control Mail-login correoClienteRequest" disabled="true" name="correo" placeholder="Correo">
												</div>
												<div class="form-group">
													<input type="password" value="**************" class="form-control Mail-login" disabled="true" name="pass" placeholder="Contraseña">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" value="<?php echo $_SESSION['apellido']; ?>" class="form-control Mail-login" disabled="true" name="apellido" placeholder="Apellido">
												</div>
												<div class="form-group">
													<input type="text" value="<?php echo $_SESSION['numero']; ?>" class="form-control Mail-login" disabled="true" name="apellido" placeholder="Numero de telefono">
												</div>
												<div class="form-group align-items-rigth m-3" style="display: inline-block" >
													<input type="button" value="Cambiar contraseña" data-toggle="modal" data-target="#changeModal" class="btn btn-primary py-3 px-3 blockear" disabled="true">
													
												</div>
											</div>
										</div>
										
										
					
									
										
										
										
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  <?php 

  if (isset($_POST["correoRescue"])) {
	  
	  $rescue = new Mails();
	  $respuesta = $rescue -> rescue();
	  
  }  

?>


  <?php 

  if (isset($_POST["passOld"])) {
	  
	  $cambio = new Registro();
	  $respuesta = $cambio -> cambioPass();
	  
  }  

?>
  <div class="modal fade" id="changeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
   
        <div class="modal-body p-3">
			
          <div class="row">
            <div style="background-color: white;" class="col-12 p-3"> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
				<center>
					<img style="width:35%" src="views/images/logokk.png" alt="">
				</center>
		
            <form  class="p-4 chagePassForm" method="post">
				<h3 >Cambiar contraseña</h3>
              <div class="contact-form">
                  <div class="form-group">
					<div class="row">
						<div class="col-sm-10">
							<input type="password" required class="form-control Mail-login passHide" name="passOld" placeholder="Contraseña actual">
						</div>
						<div style="margin-top: 25px;" class="col-sm-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                     
                  </div>
                  <div class="form-group">
					<div class="row">
						<div class="col-sm-10">
							<input type="password" required class="form-control Pass-login passValid passHide" name="passNew" placeholder=" Contraseña nueva">
						</div>
						<div style="margin-top: 25px;" class="col-sm-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
				  </div>
				  <div class="form-group">
					<div class="row">
						<div class="col-sm-10">
							<input type="password" required class="form-control passRepeat passHide" name="passNewR" placeholder="Repetir  contraseña nueva">
						</div>
						<div style="margin-top: 25px;" class="col-sm-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
                  </div>
                  <div class="form-group align-items-rigth" style="display: inline-block" >
                      <input type="button" value="Cambiar" class="btn btn-primary py-2 px-4 botonChangePass  system-login">
                      
                  </div>
              </div>
            </form> 
			
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  
