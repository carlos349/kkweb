<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( 
			$enlaces == "Nosotros" ||
			$enlaces == "inicio" ||
			$enlaces == "Contacto" ||
			$enlaces == "Galeria" ||
			$enlaces == "Especialistas" ||
			$enlaces == "construccion" ||
			$enlaces == "cerrarSesion" ||
			$enlaces == "servicios" ||
			$enlaces == "Disenos" ||
			$enlaces == "panel" ||
			$enlaces == "passRescue" ||
			$enlaces == "Registro" ||
			$enlaces == "Ingreso"  ) {

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "inicio"){
			$module = "views/modules/inicio.php";
		}else if ($enlaces == "accesoNoPermitido") {
			$module = "views/modules/accesoNoPermitido.html";
		}else{
			$module = "views/modules/construccion.php";
		}

		return $module;

	}


}
