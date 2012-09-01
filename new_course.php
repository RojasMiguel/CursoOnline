<?php require_once("includes/conexion.php");?>
<?php require_once("includes/functions.php");?>
<?php obtener_pagina(); ?>
<?php include("includes/header.php");?>
			<table id="estructura">
				<tr>
					<td id="menu">
						<?php echo menu($curso_reg, $capitulo_reg); ?>
					</td> 
					<td id="pagina"></br> 
						<h2> Agregar Un Nuevo Curso </h2>
					<form action="crate_course.php" method="post">
						<p>Nombre de Curso: <input name="nombre"/> </p>
						<p> Posición:
							<SELECT name="Posicion">
								<?php
									$todos_los_cursos = obtener_curso();
									$num_cursos = mysql_num_rows($todos_los_cursos);
									for($i=1;$i<=$num_cursos+1;$i++) {
										echo "<OPTION value=\"{$i}\"> {$i} </OPTION>";
									}
								?>	
							</SELECT>
						</p>
						<p> Visibilidad:
							<input type="radio" name="visibilidad" value="0">0</input>
							<input type="radio" name="visibilidad" value="1">1</input> 
						</p>
						<input type="submit" value="Agregar Curso"/>
					</form>
						<a href = "content.php">Cancelar</a>
						
					</td>					
				</tr>
			</table>
		</div>
<?php require_once("includes/footer.php");?>