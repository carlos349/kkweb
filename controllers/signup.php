<?php 

class Registro{
	public function registroController(){
		$consulta = new Consulta();
		$usuario = $_POST["correo"];
		$password = $_POST["pass"];
		$numero = $_POST["numero"];
		$correo = $_POST["correo"];
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$idSys = $_POST["idSys"];

		if ($usuario != "") {
				
			$sql="SELECT * FROM usuarios WHERE usuario ='$usuario'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error="El correo ya esta siendo utilizado.";
			}
		}

		if ($correo != "") {

			$sql="SELECT * FROM usuarios WHERE correo ='$correo'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error="El correo ya esta siendo utilizado.";
			}
		}
		if ($numero != "") {

			$sql="SELECT * FROM usuarios WHERE numero ='$numero'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error="El número ya esta siendo utilizado.";
			}
		}

		if ($usuario=="" || $password == "" || $correo == "" || $numero == "" || $nombre == "" || $apellido == "") {
			$error="Todos los campos deben ser completados.";
		}
		if ($password == $numero) {
			$error="Las contraseñas no coinciden.";
		}

		if (isset($error)) {
			echo '<script>
							Swal.fire({
							icon: "error",
							title: "Error",
							text: "'.$error.'",
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

		} else{
			$datos["usuario"] = $usuario;
			$datos["password"] = $password;	
			$datos["correo"] = $correo;
			$datos["nombre"] = $nombre;
			$datos["apellido"] = $apellido;
			$datos["numero"] = "+56 ".$numero;
			$datos["idSys"] = $idSys;

			$registroModel = new RegistroModel();
			$respuesta = $registroModel -> nuevoRegistroModel($datos);

			$send = new Mails();
			$sendresponse = $send -> constractMail($datos["nombre"],$datos["apellido"],$datos["correo"]);

			session_start();

			$datosController = array("usuario"=>$datos["usuario"],"password"=>$datos["password"]);
			$respuesta = IngresoModels::ingresoModel($datosController, "usuarios");
			$resultado = $respuesta[0];

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

			echo '<script>
							Swal.fire({
							icon: "success",
							title: "Bienvenido",
							text: "¡Registro exitoso sera ingresado automaticamente!",
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

	}

	public function cambioPass(){
		$consulta2 = new Consulta();
		$passOld = $_POST['passOld'];
		$passNew = $_POST['passNew'];
		$idChange = $_SESSION['id'];
		$opciones = [  'cost' => 11 ];
		$encriptacion1 = password_hash($passOld, PASSWORD_DEFAULT, $opciones);
		$encriptacion2 = password_hash($passNew, PASSWORD_DEFAULT, $opciones);

		if (password_verify($passOld, $_SESSION['password'])) {
			$sql2="UPDATE usuarios SET contrasena = '$encriptacion2' WHERE id='$idChange'";
			$resultado2 = $consulta2 -> actualizar_registro($sql2);

			if ($resultado2) {
				echo '<script>
							Swal.fire({
							icon: "success",
							title: "",
							text: "¡Cambio exitoso!",
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
		}
		else{
			echo '<script>
							Swal.fire({
							icon: "error",
							title: "Lo sentimos",
							text: "¡Esa no es tu contraseña antigua!",
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
	}
}
