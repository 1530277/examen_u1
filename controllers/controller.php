<?php
	class main_controller{
			public function load(){
				require_once("views/template.php");
			} 
			public function vistas(){
				$enlace = "index";
				if(isset($_GET['action']))
					$enlace = $_GET['action'];
				$ret = model_paginas::vistas($enlace);
				require_once($ret);
			}

			public function insert_alumno(){
				if(isset($_POST['guardar'])){
					$datos_consulta = array('matricula' => $_POST['matricula'], 'nombres' => $_POST['nombres'],
					'apellidos' => $_POST['apellidos'], 'carrera' => $_POST['carrera'],
					'id_ingreso' => $_POST['id_ingreso'], 'id_grupo' => $_POST['id_grupo']  );
#					echo "<br>alumno: ";var_dump($datos_consulta);
					
					$ret = crud_model::insert_alumno($datos_consulta);
					return $ret;
				}else
					return false;
			}

			public function insert_grupo(){
				if(isset($_POST['guardar'])){
					$datos_consulta = array('nombre' => $_POST['nombre'], 'cuatrimestre' => $_POST['cuatrimestre']);
					$ret = crud_model::insert_grupo($datos_consulta);
					return $ret;
				}else
					return false;
			}

			public function get_alumnos(){
				$ret = crud_model::get_alumnos();
				return $ret;
			}

			public function get_grupos(){
				$ret = crud_model::get_grupos();
				return $ret;
			}

			public function get_cuatri_ingreso(){
				$ret = crud_model::get_cuatri_ingreso();
				return $ret;
			}
		}
?>