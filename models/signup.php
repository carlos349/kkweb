<?php 

class RegistroModel{
	public function nuevoRegistroModel($datos){

		$consulta = new Consulta();
		$usuario = $datos["usuario"];
		$password = $datos["password"];
		$correo = $datos["correo"];
		$nombre = $datos["nombre"];
		$apellido = $datos["apellido"];
		$numero = $datos["numero"];
		$nacimiento = $datos["nacimiento"];
		$referente = $datos['referente'];
		$photo = "views/images/perfiles/avatar.jpg";
		$idSys = $datos["idSys"];

		$opciones = [  'cost' => 11 ];
		$encriptacion = password_hash($password, PASSWORD_DEFAULT, $opciones);

		$sql = "INSERT INTO usuarios (usuario, contrasena, correo, foto, rol, nombre , apellido, numero, servicios,recomendaciones, descuentos, idSistema,nacimiento,referente) values ('$usuario','$encriptacion','$correo', '$photo',1,'$nombre', '$apellido', '$numero', 0,0,0, '$idSys','$nacimiento', '$referente')";

		$resultado = $consulta -> nuevo_registro($sql);

			return "ok";
		
	}
}
