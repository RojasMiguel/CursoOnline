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
						<?php
							if(!is_null($curso_reg)){ ?>
							<h2><?php echo $curso_reg["nombre"]; ?></h2>
							<?php }elseif(!is_null($capitulo_reg)){?>
							<h2><?php	echo $capitulo_reg["nombre"];?> </h2>
							<div id="pagina-contenido">
								<?php echo $capitulo_reg["contenido"];?>
							</div>	
							<?php
							}else{
								?>
								<h2>Seleciona algún curso o capítulo</h2>
							<?php	
							} 
						?>
						
					</td>					
				</tr>
			</table>
		</div>
<?php require_once("includes/footer.php");?>