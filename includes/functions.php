<?php
	function verificar_consulta($consulta){
		if(!$consulta){
			die("No se ha podido realizar la consulta: " . mysql_error());
		}
	}

	function obtener_curso(){
		global $conexion;
		$consulta ="SELECT * FROM curso ORDER BY posicion ASC";
		$cursos = mysql_query($consulta,$conexion);
		verificar_consulta($cursos);
		return $cursos; 
	}

	function obtener_capitulo($curso_id){
		global $conexion;
		$consulta = "SELECT * 
					FROM capitulos 
					WHERE curso_id={$curso_id} 
					ORDER BY posicion ASC";
		$capitulos = mysql_query($consulta,$conexion);				 	
		verificar_consulta($capitulos);
		return $capitulos;
	}
	function obtener_curso_por_id($curso_id){
		global $conexion;
		$consulta = 'SELECT * FROM cursos WHERE id =' . $curos_id;
		$respuesta = mysql_query($consulta,$conexion);
		verificar_consulta($respuesta);
		if($curso = mysql_fetch_array($respuesta)){
			return $curso;
		}else{
			return NULL;
		}
		
	}

?>