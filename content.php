<?php require_once("includes/conexion.php");?>
<?php require_once("includes/functions.php");?>
<?php
	
	if(isset($_GET["curso"])){
		$curso_reg = obtener_curso_por_id($_GET["curso"]);
		$capitulo_reg = NULL;
	}elseif(isset($_GET["capitulo"])) {
		$capitulo_reg = obtener_capitulo_por_id($_GET["capitulo"]);
		$curso_reg = NULL;
	}else{
		$capitulo_reg = NULL;
		$curso_reg = NULL;
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
								if($curso["id"] == $curso_reg["id"]){
									echo " class=\"selected\"";
								}	
								echo "> <a href=\"content.php?curso=" . urlencode($curso["id"]) ."\">" . $curso['nombre'] . "</a></li><ul class='capitulos'>";

								$capitulos = obtener_capitulo($curso["id"]);

								while($capitulo = mysql_fetch_array($capitulos)){
									
									echo"<li";
									if($capitulo["id"] == $capitulo_reg["id"]){
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
							if(!is_null($curso_reg)){ ?>
							<h2><?php echo $curso_reg["nombre"]; ?></h2>
							<?php }elseif(!is_null($capitulo_reg)){?>
							<h2><?php	echo $capitulo_reg["nombre"];?> </h2>
							<div id="pagina-contenido">
								<?php echo $capitulo_reg["contenido"];?>
							</div>	
							<?php
							}
						?>
						
					</td>					
				</tr>
			</table>
		</div>
<?php require_once("includes/footer.php");?>