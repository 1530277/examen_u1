
<?php
	include_once("conexion.php");
	class crud_model extends Conexion{

		public function insert_alumno($datos_consulta){
			#echo "<br>alumno: ";var_dump($datos_consulta);
			$query = Conexion::load()->prepare("INSERT INTO alumnos(matricula,nombres,apellidos,carrera,id_ingreso,ig_grupo)
				VALUES('$datos_consulta[matricula]','$datos_consulta[nombres]','$datos_consulta[apellidos]','$datos_consulta[carrera]','$datos_consulta[id_ingreso],'$datos_consulta[id_grupo]')");
			$ret = $query -> execute();
			return $ret;
		}

		public function insert_grupo($datos_consulta){
			$query = Conexion::load()->prepare("INSERT INTO grupos(cuatrimestre,nombre)
				VALUES('$datos_consulta[cuatrimestre]','$datos_consulta[nombre]')");
			$ret = $query -> execute();
			return $ret;
		}

		public function get_grupos(){
			$query = Conexion::load()->prepare("SELECT * FROM grupos");
			$query -> execute();
			return $query->fetchAll();
		}

		public function get_cuatri_ingreso(){
			$query = Conexion::load()->prepare("SELECT * FROM cuatri_ingreso");
			$query -> execute();
			return $query->fetchAll();
		}

		public function get_alumnos(){
			$query = Conexion::load()->prepare("SELECT * FROM alumnos");
			$query -> execute();
			return $query->fetchAll();
		}
	}
?>