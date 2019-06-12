<?php
	class Conexion{
		public function load(){
			$mbd = new PDO("mysql:host=localhost;dbname=examen_u1","1530277","Holamundo11");
			$mbd -> exec("set names utf8");
			return $mbd;
		}
	}
?>