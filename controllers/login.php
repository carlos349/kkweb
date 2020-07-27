<?php
session_start();
class Ingreso{

	public function ingresoController(){

		if(isset($_POST["usuarioIngreso"])){

			   	//$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datosController = array("usuario"=>$_POST["usuarioIngreso"],
				                     "password"=>$_POST["passwordIngreso"]);

				$respuesta = IngresoModels::ingresoModel($datosController, "usuarios");
				
				$resultado = $respuesta[0];
				$intentos = $resultado["intentos"];
				//var_dump($resultado);
				$usuarioActual = $_POST["usuarioIngreso"];
				$maximoIntentos = 5000;

				if($intentos < $maximoIntentos){

					if ($resultado["rol"]==1 || $resultado["rol"]==0) {
						
						if(strtolower($resultado["usuario"]) == $_POST["usuarioIngreso"] && password_verify($_POST["passwordIngreso"], $resultado["contrasena"])){


							$intentos = 0;

							$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);
							$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");
							$_SESSION["validar"] = true;
							$_SESSION["usuario"] = $resultado["usuario"];
							$_SESSION["id"] = $resultado["id"];
							$_SESSION["idSys"] = $resultado["idSistema"];
							$_SESSION["numero"] = $resultado["numero"];
							$_SESSION["descuentos"] = $resultado["descuentos"];
							$_SESSION["recomendaciones"] = $resultado["recomendaciones"];
							$_SESSION["password"] = $resultado["contrasena"];
							$_SESSION["correo"] = $resultado["correo"];
							$_SESSION["nombre"] = $resultado["nombre"];
							$_SESSION["apellido"] = $resultado["apellido"];
							$_SESSION["foto"] = $resultado["foto"];
							$_SESSION["rol"] = $resultado["rol"];

							unset($_POST['usuarioIngreso']);
							unset($_POST['passwordIngreso']);
							if (isset($_POST['cardValidatorL'])) {
									echo '<script>
								Swal.fire({
								icon: "success",
								title: "Bienvenido",
								text: "¡Ingreso exitoso procediendo a la compra!",
								showClass: {
									popup: "animate__animated animate__fadeInDown"
								},
								hideClass: {
									popup: "animate__animated animate__fadeOutUp"
								}
								}).then((result) => {
									if (window.history.replaceState) { // verificamos disponibilidad
										window.history.replaceState(null, null, window.location.href);
									}
									window.location.href = "giftFormWindow?validator='.$_POST['cardValidatorL'].'"
									
								})
							</script>';
							}
							else{
								echo '<script>
							Swal.fire({
							icon: "success",
							title: "Bienvenido",
							text: "¡Ingreso exitoso!",
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
							}).then((result) => {
								if (window.history.replaceState) { // verificamos disponibilidad
									window.history.replaceState(null, null, window.location.href);
								}
								location.reload()
							  })
						</script>';
							}
							
			
						} else{

							++$intentos;

							$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

							$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");
							unset($_POST['usuarioIngreso']);
							unset($_POST['passwordIngreso']);
							echo '<script>
							Swal.fire({
							icon: "error",
							title: "Lo sentimos.",
							text: "¡Tu usuario o contraseña son incorrectos!",
							footer: `<button class="btn forgot">¿Olvidaste tu contraseña?</button>`,
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
							}).then((result) => {
								if (window.history.replaceState) { // verificamos disponibilidad
									window.history.replaceState(null, null, window.location.href);
								}
								location.reload()
							  })
						</script>';
						

						}

					}else{
						echo '<div class="alert alert-danger">Este es el login unicamente de usuarios.</div>';
					}

				} else{
					$intentos = 0;

					$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

					$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

					echo '<div class="alert alert-danger">Ha fallado 3 veces, demuestre que no es un robot</div>';

				}

			

		}
	}

}