<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "inicio" ||
			$enlaces == "Nosotros" ||
			$enlaces == "Contacto" ||
			$enlaces == "Galeria" ||
			$enlaces == "Especialistas" ||
			$enlaces == "cerrarSesion" ||
			$enlaces == "servicios" ||
			$enlaces == "Disenos" ||
			$enlaces == "panel" ||
			$enlaces == "Registro" ||
			$enlaces == "Ingreso"  ) {

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "index"){
			$module = "views/modules/home.php";
		}else if ($enlaces == "accesoNoPermitido") {
			$module = "views/modules/accesoNoPermitido.html";
		}else{
			$module = "views/modules/404.html";
		}

		return $module;

	}


}
