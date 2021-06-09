		<?php
			if(count($autos) == 0){
		?>
		<h1>No hay existencias</h1>	
		<?php
			}
        ?>
			
			
			<div class="container ">
				<div class="row justify-content-md-center">
					<?php
						foreach($autos as $auto)
						{
					?>	
					
						<div class="col-sm">
							<div class="card text-center border-dark mb-3 " style="width: 18rem;">
								<img src="<?= $auto['Imagen'] ?>" class="card-img-top" width="300" height="300">
								<div class="card-body">
									<h5 class="card-title"><?= $auto['Modelo'] ?></h5>
									<p class="card-text"><?= '$' . $auto['Precio'] ?></p>
									<a href="/autos.php?auto=<?=$auto['Id']?>" class="btn btn-primary">Ver más</a>
									<a type="button" class="btn btn-danger" href="http://example2.com/eliminar_producto.php?auto=<?=$auto['Id']?>">Eliminar</a>
									<a type="button" class="btn btn-warning" href="http://example2.com/editar_producto.php?auto=<?=$auto['Id']?>">Editar</a>
								</div>
							</div>
						</div>
						
					<?php
						}
					?>
				</div>
			</div>			
	    </body>
    </html>      	

