<?php
	class model_paginas{
		public function vistas($enlace){
			
			$archivos = ["agregar_grupo","agregar_alumno","eliminar","ver_alumnos","ver_grupos"];

			$module = "views/modules/agregar_grupo.php";
			for($i = 0; $i < count($archivos); $i ++)
				if($enlace == $archivos[$i]){
					$module =  "views/modules/".$enlace.".php";
				}
			
			return $module;
		}
	}
?>