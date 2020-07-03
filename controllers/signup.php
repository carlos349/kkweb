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
			$datos["numero"] = $numero;
			$datos["idSys"] = $idSys;

			$registroModel = new RegistroModel();
			$respuesta = $registroModel -> nuevoRegistroModel($datos);

			$send = new Mails();
			$sendresponse = $send -> constractMail($datos["nombre"],$datos["apellido"],$datos["correo"])
			echo '<script>
							Swal.fire({
							icon: "success",
							title: "Bienvenido",
							text: "¡Registro exitoso!",
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
