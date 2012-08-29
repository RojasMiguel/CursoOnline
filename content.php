<?php require_once("includes/conexion.php");?>
<?php require_once("includes/functions.php");?>
<?php
	
	if(isset($_GET["curso"])){
		$curso_selec = $_GET["curso"];
		$capitulo_selec = "";
		//$cursoreg = obtener_curso_por_id($curso_selec);
	}elseif(isset($_GET["capitulo"])) {
		$capitulo_selec = $_GET["capitulo"];
		$curso_selec = "";
	}else{
		$curso_selec = "";
		$capitulo_selec = "";
	}

	
?>
<?php include("includes/header.php");?>
			<table id="estructura">
				<tr>
					<td id="menu">
						<ul class="cursos">
						 <?php
						 	//require("includes/curso.php"); 
						 	//$objcurso = new curso_online;
						 	//$resultado = $objcurso->menu();
						 	$cursos = obtener_curso();   

							while($curso = mysql_fetch_array($cursos)){
								echo "<li";
								if($curso["id"] == $curso_selec){
									echo " class=\"selected\"";
								}	
								echo "> <a href=\"content.php?curso=" . urlencode($curso["id"]) ."\">" . $curso['nombre'] . "</a></li><ul class='capitulos'>";

								$capitulos = obtener_capitulo($curso["id"]);

								while($capitulo = mysql_fetch_array($capitulos)){
									
									echo"<li";
									if($capitulo["id"] == $capitulo_selec){
										echo" class=\"selected\"";
									}	
									echo "> <a href=\"content.php?capitulo=" . urlencode($capitulo["id"]) . "\">" . $capitulo["nombre"] . "</a></li>";								
								}
								echo "</ul>";								
							}
						 ?>
					</ul>
					</td> 
					<td id="pagina"></br> 
						<?php
							echo $curso_selec;
							echo $capitulo_selec;
						?>
						
					</td>					
				</tr>
			</table>
		</div>
<?php require_once("includes/footer.php");?>