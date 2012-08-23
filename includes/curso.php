<?php
	include_once("conexion.php");
	class curso_online{
		var $con;

		function administrador(){
			$this->con = new BDcurso;
		}
		function menu(){
			if($this->con->conectar() == true){
				return mysql_query("SELECT nombre FROM curso");
			}
		}
	}
?>