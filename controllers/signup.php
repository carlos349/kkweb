<?php 

class Registro{
	public function registroController(){
		$consulta = new Consulta();
		$usuario = $_POST["correo"];
		$password = $_POST["pass"];
		$numero = $_POST["numero"];
		$correo = $_POST["correo"];
		$nacimiento = $_POST["nacimiento"];
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$idSys = $_POST["idSys"];

		if (isset($_GET['c'])) {
			$referente = $_GET['c'];
		}
		else{
			$referente = '';
		}

		unset($_POST['correo']);
		unset($_POST['numero']);
		unset($_POST['pass']);
		unset($_POST['nacimiento']);
		unset($_POST['apellido']);
		unset($_POST['nombre']);
		

		if ($correo != "") {

			$sql="SELECT * FROM usuarios WHERE correo ='$correo'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error="El correo ya está siendo utilizado.";
			}
		}
		if ($numero != "") {

			$sql="SELECT * FROM usuarios WHERE numero ='$numero'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error="El número ya está siendo utilizado.";
			}
		}

		if ($usuario=="" || $password == "" || $correo == "" || $numero == "" || $nombre == "" || $apellido == "") {
			$error="Todos los campos deben ser completados.";
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
			$datos["nacimiento"] = $nacimiento;
			$datos["apellido"] = $apellido;
			$datos["numero"] = $numero;
			$datos["idSys"] = $idSys;
			$datos['referente'] = $referente;

			$correo = "";
			
			$registroModel = new RegistroModel();
			$respuesta = $registroModel -> nuevoRegistroModel($datos);

			$send = new Mails();
			$sendresponse = $send -> constractMail($datos["nombre"],$datos["apellido"],$datos["correo"],$datos['numero']);

			session_start();

			$datosController = array("usuario"=>$datos["usuario"],"password"=>$datos["password"]);
			$respuesta = IngresoModels::ingresoModel($datosController, "usuarios");
			$resultado = $respuesta[0];

			$_SESSION["validar"] = true;
			$_SESSION["usuario"] = $resultado["usuario"];
			$_SESSION["id"] = $resultado["id"];
			$_SESSION["idSys"] = $resultado["idSistema"];
			$_SESSION["numero"] = $resultado["numero"];
			$_SESSION["nacimiento"] = $resultado["nacimiento"];
			$_SESSION["descuentos"] = $resultado["descuentos"];
			$_SESSION["recomendaciones"] = $resultado["recomendaciones"];
			$_SESSION["password"] = $resultado["contrasena"];
			$_SESSION["correo"] = $resultado["correo"];
			$_SESSION["nombre"] = $resultado["nombre"];
			$_SESSION["apellido"] = $resultado["apellido"];
			$_SESSION["foto"] = $resultado["foto"];
			$_SESSION["rol"] = $resultado["rol"];
			$error = null;
			
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

	public function registroControllerG(){
		$consulta = new Consulta();
		$usuario = $_POST["correoG"];
		$password = $_POST["passG"];
		$numero = $_POST["numeroG"];
		$validator = $_POST['cardValidator'] - 1;
		$correo = $_POST["correoG"];
		$nacimiento = $_POST['nacimientoG'];
		$nombre = $_POST["nombreG"];
		$apellido = $_POST["apellidoG"];
		$idSys = $_POST["idSys"];
		unset($_POST['correoG']);
		unset($_POST['numeroG']);
		unset($_POST['passG']);
		unset($_POST['apellidoG']);
		unset($_POST['nacimientoG']);
		unset($_POST['nombreG']);
		

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
			$datos["nacimiento"] = $nacimiento;
			$datos["apellido"] = $apellido;
			$datos["numero"] = $numero;
			$datos["idSys"] = $idSys;

			$correo = "";
			
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
			$_SESSION["nacimiento"] = $resultado["nacimiento"];
			$_SESSION["nombre"] = $resultado["nombre"];
			$_SESSION["apellido"] = $resultado["apellido"];
			$_SESSION["foto"] = $resultado["foto"];
			$_SESSION["rol"] = $resultado["rol"];
			$error = null;
			
			echo '<script>
							Swal.fire({
							icon: "success",
							title: "Bienvenido",
							text: "¡Registro exitoso procediendo a la compra!",
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
								window.location.href = "giftFormWindow?validator='.$validator.'"
								
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
				session_destroy();
				echo '<script>
							Swal.fire({
							icon: "success",
							title: "",
							text: "¡Cambio exitoso inicie sección de nuevo!",
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
						$send2 = new Mails();
						$sendresponse2 = $send2 -> passInfoChange($_SESSION['correo']);
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
	public function cambioData(){
		$consulta2 = new Consulta();
		$idSys = $_SESSION['idSys']; 
		$idChange = $_SESSION['id'];
		$nombre = $_POST['nombreChange'];
		$apellido = $_POST['apellidoChange'];
		$numero = $_POST['numeroChange'];
		$correo = $_POST['correoChange'];

		

		
			$sql2="UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', numero='$numero',correo = '$correo' WHERE id='$idChange'";
			$resultado2 = $consulta2 -> actualizar_registro($sql2);

			if ($resultado2) {
				echo '<script>
				document.querySelector("body").style.color = "white";
						</script>';
						$correoSend = $_SESSION['correo'];
						
						$_SESSION['nombre'] = $nombre;
						$_SESSION['apellido'] = $apellido;
						$_SESSION['correo'] = $correo;
						$_SESSION['numero'] = $numero;
						$send4 = new Mails();
						$sendresponse4 = $send4 -> dataChangesEmail($nombre,$apellido,$correo,$numero,$correoSend);
			}
		
	}

	public function cambioImg(){
		$consulta2 = new Consulta();
		$idSys = $_SESSION['idSys']; 
		$idChange = $_SESSION['id'];
		$img = $_POST['changePhoto'];
		

			$sql2="UPDATE usuarios SET foto = '$img' WHERE id='$idChange'";
			$resultado2 = $consulta2 -> actualizar_registro($sql2);

			if ($resultado2) {
				
			    $_SESSION['foto'] = $img;
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
								window.location.href = "inicio"
							  })
						</script>';
			}
		
	}
	public function changeByEmail($id,$verify){
		
		$passNewer = $_POST['passNewer'];
		$consulta = new Consulta();
		$sql="SELECT * FROM usuarios WHERE  verify='$verify' AND idSistema='$id' ";
		$resultado = $consulta -> ver_registros($sql);
		$respuesta = $resultado[0];
		if ($resultado) {
			$opciones = [  'cost' => 11 ];
			$encriptacion2 = password_hash($passNewer, PASSWORD_DEFAULT, $opciones);

			$sql2="UPDATE usuarios SET contrasena = '$encriptacion2' WHERE idSistema='$id'";
			$sql3="UPDATE usuarios SET verify = 'kk2615' WHERE idSistema='$id'";
			$resultado2 = $consulta -> actualizar_registro($sql2);
			$resultado3 = $consulta -> actualizar_registro($sql3);
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
								window.location.href = "inicio"
							  })
						</script>';
						$send3 = new Mails();
						$sendresponse3 = $send3 -> passInfoChange($respuesta['correo']);
				
			
		}
		else {
			echo '<script>
					Swal.fire({
					icon: "error",
					title: "Lo sentimos",
					text: "¡El link no es valido o ha expirado!",
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
						window.location.href = "inicio"
						})
				</script>';
		}
	}
}
