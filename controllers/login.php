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
				$maximoIntentos = 500;

				if($intentos < $maximoIntentos){

					if ($resultado["rol"]==1 || $resultado["rol"]==0) {
						
						if(strtolower($resultado["usuario"]) == $_POST["usuarioIngreso"] && password_verify($_POST["passwordIngreso"], $resultado["contrasena"])){


							$intentos = 0;

							$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);
							$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");
							$_SESSION["validar"] = true;
							$_SESSION["usuario"] = $resultado["usuario"];
							$_SESSION["id"] = $resultado["id"];
							$_SESSION["password"] = $resultado["contrasena"];
							$_SESSION["correo"] = $resultado["correo"];
							$_SESSION["nombre"] = $resultado["nombre"];
							$_SESSION["apellido"] = $resultado["apellido"];
							$_SESSION["foto"] = $resultado["foto"];
							$_SESSION["rol"] = $resultado["rol"];


							header("Location: inicio");
			
						} else{

							++$intentos;

							$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

							$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

							echo '<div class="alert alert-danger">Error al ingresar.</div>';

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