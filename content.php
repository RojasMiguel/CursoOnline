<?php require_once("includes/conexion.php");?>
<?php require_once("includes/functions.php");?>
<?php
	/*
	if(isset($_GET['curso'])){
		$curso_selec = $_GET['curso'];
		$capitulo_selec = "";
		//$cursoreg = obtener_curso_por_id($curso_selec);
	}elseif (isset($_GET['capitulo'])) {
		$capitulo_selec = $_GET['capitulo'];
		$curso_selec = "";
	}
	*/
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
								echo "<li>{$curso['nombre']}</li><ul class='capitulos'>";

								$capitulos = obtener_capitulo($curso["id"]);

								while($capitulo = mysql_fetch_array($capitulos)){
									
									echo"<li>". $capitulos["nombre"]."</li>";								
								}
								echo "</ul>";								
							}
						 ?>
					</ul>
					</td> 
					<td id="pagina"></br> 
					
						
					</td>					
				</tr>
			</table>
		</div>
<?php require_once("includes/footer.php");?>