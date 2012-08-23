 <?php
	/*class BDcurso{
		var $conect;

		var $BaseDatos;
		var $Servidor;
		var $Usuario;
		var $Password;
	
		function BDcurso(){
			$this->$BaseDatos = "curso_online";
			$this->$Servidor = "localhost";
			$this->$Usuario = "root";
			$this->$Password = "";
		}
		function conectar(){
			if(!($con=@mysql_connect($this->Servidor,$this->Usuario,$this->Password))){
				die("[:()] Error al conectarse a la base de datos" . msql_error());
				exit();
			}
			if(!@mysql_select_db($this->BaseDatos,$con)){
				die("[:()] Error al selecionar la base de datos" . msql_error());
				exit();	
			}
			$this->conect = $con;
			return true;
		}
	} */
	require_once("constants.php");
	$conexion = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
		if(!$conexion){
			die("[:()] Error al conectarse a la base de datos" . msql_error());
		}		
		$bd_selecionada = mysql_select_db(DB_NAME,$conexion);
		if(!$bd_selecionada){
			die("[:()] Error al selecionar la base de datos" . msql_error());
		}
?> 