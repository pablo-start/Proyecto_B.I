
    <center>
            <div class="card text-center border-dark mb-3" style="width: 18rem;">
                <img src="<?= $y['Imagen'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $y['Modelo'] ?></h5>
                    <p class="card-text"><?= '$' . $y['Precio'] ?></p>
                    <p class="card-text"><?= $y['Descripción'] ?></p>
                    <a type="button" class="btn btn-danger" href="http://example2.com/eliminar_producto.php?auto=<?=$y['Id']?>">Eliminar</a>
                </div>
            </div>

            </center>
       </body>
    </html>