<?php 

class Registro{
	public function registroController(){
		$consulta = new Consulta();
		$usuario = $_POST["correo"];
		$password = $_POST["pass"];
		$rPassword = $_POST["rPass"];
		$correo = $_POST["correo"];
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];

		if ($usuario != "") {
				
			$sql="SELECT * FROM usuarios WHERE usuario ='$usuario'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error=["usuarioError"=>"El nombre de usuario ya esta siendo utilizado."];
			}
		}

		if ($correo != "") {

			$sql="SELECT * FROM usuarios WHERE correo ='$correo'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error=["correoError"=>"El email ya esta siendo utilizado."];
			}
		}

		if ($usuario=="" || $password == "" || $correo == "") {
			$error=["ErrorGeneral"=>"Todos los campos deben ser completados."];
		}
		if ($password == $rPassword) {
			$error=["ErrorGeneral"=>"Las contraseñas no coinciden."];
		}

		if (isset($error)) {
			return $error;

		} else{
			$datos["usuario"] = $usuario;
			$datos["password"] = $password;	
			$datos["correo"] = $correo;
			$datos["nombre"] = $nombre;
			$datos["apellido"] = $apellido;

			$registroModel = new RegistroModel();
			$respuesta = $registroModel -> nuevoRegistroModel($datos);
			return $respuesta;
		}

	}
}
