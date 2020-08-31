<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light awake" id="ftco-navbar">
	    <div class="container">
			<div class="row">
				<a style="color:#605B56;margin-right:150px;font-family: 'Prata', serif;" class="navbar-brand jodiendo2" href="inicio"><img style="width:30%" src="views/images/logokk.png" alt=""> <span id="pageTitleK">K&K Pretty Nails</span> 
		   
			</a>
			<button class="navbar-toggler jodiendo" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> 
			</button>
			</div>
	      
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
				  <div style="margin-top: 10px;" class="dropdown">
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
	  <input type="hidden"  class="correoClienteRequest" value="<?php echo $_SESSION['correo']; ?>">
	  <input type="hidden"  class="idReferido" value="<?php if(isset($_GET['c'])){echo $_GET['c'];}else{echo 'no';} ?>">

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
									<div class="eye activePanel"><center><img style="width:50%;" src="views/images/user.png" alt=""></center><span class="imgSel d0001">·</span></div>
									<div class="comments"><center><img style="width:50%;" src="views/images/calendar.png" alt=""></center><span class="imgSel d0002">·</span></div>
									<div class="bell"><center><img style="width:50%;" src="views/images/check.png" alt=""></center><span class="imgSel d0003">·</span></div>
									
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
							<div class="dashboard showPanel">
											
								<!-- <div class="title">Estadisticas</div> -->
								<div class="description description1">
									<div class="title tit2 confirmDate">Panel de usuario</div>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-md-4">
												<center>
													<div class="imgPerfil">
														<span data-toggle="modal" data-target="#selectImgP" class="editFotoPerfil fa fa-edit"></span>
														<img style="width: 100%;border-radius: 50%;" src="<?php echo $_SESSION['foto']; ?>" alt="">
													</div>
													
												</center>
												
												<div class="col-sm-11 infoPanel mt-4">
													<p style="font-size: 12px;font-weight: bold;" class="text-center mb-0">Nombre</p>
													<p class="p-1 pInfo text-center"><?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['apellido']; ?></p>
													<p style="font-size: 12px;font-weight: bold;" class="text-center mb-0">Número de teléfono</p>
													<p class="p-1 pInfo text-center"><?php echo $_SESSION['numero']; ?></p>
													<p style="font-size: 12px;font-weight: bold;" class="text-center mb-0">Correo electrónico</p>
													<p class="p-1 pInfo text-center"><?php echo $_SESSION['correo']; ?></p>
													<p style="font-size: 12px;font-weight: bold;" class="text-center mb-0">Fecha de nacimiento</p>
													
													<p class="p-1 pInfo text-center"><?php $orgDate = $_SESSION['nacimiento'];  
														$newDate = date("d-m-Y", strtotime($orgDate)); echo $newDate ?></p>
													<div class="row">
														<div class="col-sm-5 p-0"><p style="font-size: 12px;cursor: pointer;" data-toggle="modal" data-target="#changeModalDatos" class="text-center mb-0">Cambiar datos</p></div>
														<div class="col-sm-7 p-0"><p style="font-size: 12px;cursor: pointer;" data-toggle="modal" data-target="#changeModal" class="text-center mb-0">Cambiar contraseña</p></div>
														
														
													</div>
													
												</div>
											</div>
											<div style="border-left: 3px solid #afadc2;overflow: hidden;
											height: 445px;" class="col-md-8 sBorde">
												<div class="col-sm-12">
													
														<div style="font-size: 12px;text-align: center;margin-top: -16px;" class="Lp row p-3"> 
														   <span style="background-color: #afadc2;cursor:default;color:white;border-radius: 5px;" class="lReco col-sm-3 ">¡Invita a un amigo y gana descuento!</span>
														   
															   <span id="referidoSys" class="col-md-9 col-sm-12" style="background-color: whitesmoke;padding: 10px;margin-left: -10px;border-radius: 5px;font-weight: bold;color: black;"></span> 
														   <button data-clipboard-target="#referidoSys" style=" border: none;color: white;border-radius: 5px;background-color: transparent;position: absolute;
														   right: 4%;
														   top: 3%;" class="lCopy"><img style="width: 30px;" src="views/images/clip.png" alt=""></button> 
														   
														   
													   </div> 
													 
													<div class="row">
														<div class="col-sm-4">
															<div class="col-sm-12 pt-2 mb-5 bgT bgc1">
																Servicios <br> realizados
																<p style="margin-top: 1.1em;" id="serviciosSys" class="card__num"></p>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="col-sm-12 pt-2 mb-5 bgT bgc2">
																Citas <br> pendientes
																<p style="margin-top: 1.1em;" class="card__num citasPendi"></p>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="col-sm-12 p-0 pt-2 mb-5 bgT bgc3">
																Recomendaciones <br> (Descuentos 15%)
																<p style="margin-top: 1.1em;" class="card__num reco"></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									  
									 
									  
									  
								</div>

								
							</div>
							<div class="comments-c">
								<div class="title tit2">Histórico de servicios</div>
								<div style="overflow: hidden;
								overflow-y: scroll;overflow-x: scroll;" class="description description1">
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
								 <div class="title tit2">Citas pendiente</div>
								<div style="overflow: hidden;
								overflow-y: scroll;overflow-x: scroll;" class="description description1">
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
	  $respuesta1 = $cambio -> cambioPass();
	  
  }  

?>

<?php 

  if (isset($_POST["nombreChange"])) {
	  
	  $cambio2 = new Registro();
	  $respuesta2 = $cambio2 -> cambioData();
	  
  }  

?>

<?php 

  if (isset($_POST["changePhoto"])) {
	  
	  $cambio3 = new Registro();
	  $respuesta3 = $cambio3 -> cambioImg();
	  
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
						<div class="col-10">
							<input type="password" required class="form-control Mail-login passHide" name="passOld" placeholder="Contraseña actual">
						</div>
						<div style="margin-top: 25px;" class="col-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                     
                  </div>
                  <div class="form-group">
					<div class="row">
						<div class="col-10">
							<input type="password" required class="form-control Pass-login passValid passHide" name="passNew" placeholder=" Contraseña nueva">
						</div>
						<div style="margin-top: 25px;" class="col-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
				  </div>
				  <div class="form-group">
					<div class="row">
						<div class="col-10">
							<input type="password" required class="form-control passRepeat passHide" name="passNewR" placeholder="Repetir  contraseña nueva">
						</div>
						<div style="margin-top: 25px;" class="col-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
                  </div>
                  <div class="form-group align-items-rigth" style="display: inline-block" >
                      <input type="button" value="Cambiar" class="btn btn-primary py-2 px-4 botonChangePass">
                      
                  </div>
              </div>
            </form> 
			
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  <div class="modal fade" id="changeModalDatos" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		
            <form  class="p-4 chageDataForm" method="post">
				<h3 >Cambiar datos</h3>
              <div class="contact-form">
                  <div class="form-group">
							<input type="text" required class="form-control Mail-login nameChange" name="nombreChange" value="<?php echo $_SESSION['nombre'] ?>" placeholder="Nombre">
                  </div>
				  <div class="form-group">
					<input type="text" required class="form-control Mail-login apellidoChange" name="apellidoChange" value="<?php echo $_SESSION['apellido'] ?>" placeholder="Apellido">
					</div>
					<div class="form-group">
						
						<div class="row">
							<div class="col-sm-2"><input style="font-weight: bold;" type="text" class="form-control Mail-login" disabled value="+56"></div>
							<div class="col-sm-10"><input type="text" required class="form-control numberChange phone" name="numeroChange" value="<?php echo $_SESSION['numero'] ?>" maxlength="9"  placeholder="Número de teléfono"></div>
							
						</div>
					</div>
					<div class="form-group">
						<input type="text" required class="form-control Mail-login correoChange" name="correoChange" value="<?php echo $_SESSION['correo'] ?>" placeholder="Correo">
					</div>
							
              </div>
            </form> 
			<div class="form-group align-items-rigth" style="display: inline-block" >
                      <input type="button" value="Cambiar" class="btn btn-primary py-2 px-4 botonChangeData">
                      
                  </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  <div class="modal fade" id="selectImgP" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
   
        <div class="modal-body p-3">
			
          <div class="row">
            <div style="background-color: white;" class="col-12 p-3"> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			  
			  <form method="POST">
				
				<div class="row">
					<div class="form-check form-check-inline col-sm-3 mx-auto">
					<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio1" value="views/images/1.png">
					<label class="form-check-label" for="inlineRadio1"><img class="imgSelects" src="views/images/1.png" alt=""></label>
					</div>

					<div class="form-check form-check-inline col-sm-3 mx-auto">
						<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio2" value="views/images/2.png">
						<label class="form-check-label" for="inlineRadio2"><img class="imgSelects" src="views/images/2.png" alt=""></label>
					</div>

					<div class="form-check form-check-inline col-sm-3 mx-auto">
						<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio3" value="views/images/3.png">
						<label class="form-check-label" for="inlineRadio3"><img class="imgSelects" src="views/images/3.png" alt=""></label>
					</div>

					<div class="form-check form-check-inline col-sm-3 mx-auto">
						<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio4" value="views/images/4.png">
						<label class="form-check-label" for="inlineRadio4"><img class="imgSelects" src="views/images/4.png" alt=""></label>
						</div>
	
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio5" value="views/images/5.png">
							<label class="form-check-label" for="inlineRadio5"><img class="imgSelects" src="views/images/5.png" alt=""></label>
						</div>
	
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio6" value="views/images/6.png">
							<label class="form-check-label" for="inlineRadio6"><img class="imgSelects" src="views/images/6.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio7" value="views/images/7.png">
							<label class="form-check-label" for="inlineRadio7"><img class="imgSelects" src="views/images/7.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio8" value="views/images/8.png">
							<label class="form-check-label" for="inlineRadio8"><img class="imgSelects" src="views/images/8.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio9" value="views/images/9.png">
							<label class="form-check-label" for="inlineRadio9"><img class="imgSelects" src="views/images/9.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio10" value="views/images/10.png">
							<label class="form-check-label" for="inlineRadio10"><img class="imgSelects" src="views/images/10.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio11" value="views/images/11.png">
							<label class="form-check-label" for="inlineRadio11"><img class="imgSelects" src="views/images/11.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio12" value="views/images/12.png">
							<label class="form-check-label" for="inlineRadio12"><img class="imgSelects" src="views/images/12.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio13" value="views/images/13.png">
							<label class="form-check-label" for="inlineRadio13"><img class="imgSelects" src="views/images/13.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio14" value="views/images/14.png">
							<label class="form-check-label" for="inlineRadio14"><img class="imgSelects" src="views/images/14.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio15" value="views/images/15.png">
							<label class="form-check-label" for="inlineRadio15"><img class="imgSelects" src="views/images/15.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio16" value="views/images/16.png">
							<label class="form-check-label" for="inlineRadio16"><img class="imgSelects" src="views/images/16.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio17" value="views/images/17.png">
							<label class="form-check-label" for="inlineRadio17"><img class="imgSelects" src="views/images/17.png" alt=""></label>
						</div>
						<div class="form-check form-check-inline col-sm-3 mx-auto">
							<input class="form-check-input" type="radio" name="changePhoto" id="inlineRadio18" value="views/images/18.png">
							<label class="form-check-label" for="inlineRadio18"><img class="imgSelects" src="views/images/18.png" alt=""></label>
						</div>
						

				</div>
				<div class="form-group align-items-rigth mt-4" style="display: inline-block" >
                    <input type="submit" value="Cambiar" class="btn btn-primary py-2 px-4"> 
                </div>

			  </form>
			  
			  
				
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  
