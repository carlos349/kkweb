<?php 

				if (isset($_POST["correoG"])) {
					$error = true;
					$registro = new Registro();
					$respuesta = $registro -> registroControllerG();
					
				}  
			
			 ?>
              <form style="display: none;" class="p-3 registerL" id="registroClienteG"  method="post">
               <h3 class="hH text-center">Regístrate para continuar</h3>
                <div class="contact-form">
					<div class="row">
					<div class="form-group col-sm-6">
                        <input type="text" required class="form-control  comprobar Mail-login" id="nombreS" name="nombreG" placeholder="Nombre">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" required class="form-control  comprobar Mail-login" id="apellidoS" name="apellidoG" placeholder="Apellido">
                    </div>
					</div>
                    

                    <div class="form-group">
                        <input type="email" required class="form-control correoReg  comprobar Mail-login" id="correoS" name="correoG" placeholder="Correo">
					</div>
					<input type="hidden" name="cardValidator" class="cardValidator" value="">
					<div class="form-group">
						

						<div class="row">
							<div class="col-2 col-sm-2"><input style="font-weight: bold;" type="text" class="form-control Mail-login" disabled value="+56"></div>
							<div class="col-10 col-sm-5"><input type="text" required class="form-control Mail-login comprobar  phone phone1" maxlength="9" name="numeroG" placeholder="Número telefónico"></div>
							<div class="col-sm-5"><input type="date" title="Fecha de nacimiento" required class="form-control naciReg  comprobar Mail-login" id="nacimientoS" name="nacimientoG" placeholder="Fecha de nacimiento"></div>
						</div>
                        
					</div>
					
                    <div class="form-group">
						<div class="row">
							<div class="col-sm-5">
								<input type="password" required class="form-control passOne  comprobar Mail-login passHide" name="passG" placeholder="Contraseña">
							</div>
							<div class="col-sm-5">
								<input type="password" required class="form-control passTwo  comprobar Mail-login passHide" name="passRG" placeholder="Repetir contraseña">
							</div>
							<div style="margin-top: 25px;" class="col-sm-2 showPassn">
								<i class="fa fa-eye showPass"></i>
							</div>
							
					  
						</div>
					  
				  </div>
				  <input hidden type="text" id="idSyst" name="idSys" >
                    <div class="form-group align-items-rigth" style="display: inline-block" >
						<button type="button"  class="btn btn-primary py-2 px-2 system-login system-register"> Registrarme </button>
						<a style="cursor: pointer;" class="text-center accLog ml-1">¿Ya tienes una cuenta?</a>
                    </div>
                </div> 
				
			</form>
			
			<?php
				if (isset($_POST['usuarioIngreso'])) {
				$ingreso = new Ingreso();
				$ingreso -> ingresoController();
				}
				else{			
			?>
            <form  class="loggingL p-4" method="post">
				
              <div class="contact-form">
                  <div class="form-group">
                      <input type="text" required class="form-control Mail-login" name="usuarioIngreso" placeholder="Correo">
				  </div>
				  <input type="hidden" name="cardValidatorL" class="cardValidator" value="">
                  <div class="form-group">
					<div class="row">
						<div class="col-sm-10">
							<input type="password" required class="form-control Mail-login passHide" name="passwordIngreso" placeholder="Contraseña">
						</div>
						<div style="margin-top: 25px;" class="col-sm-2 showPassm">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
                  </div>
                  <div class="form-group align-items-rigth" style="display: inline-block" >
                      <input type="submit" value="Ingresar" class="btn btn-primary py-2 px-2">
                      <a style="cursor: pointer;" class="accLog ml-3">¿No estás registrado?</a>
                  </div>
              </div>
            </form> 
			<?php } ?>