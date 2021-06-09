<div class="container">
  <form  method="post" action="http://example2.com/modificar.php?Id=<?=$auto['Id']?>">
    <div class="mb-3">
     <label class="form-label">Nombre</label>
      <input name="nombre" class="form-control" value="<?=$auto['Modelo']?>" type="text" placeholder="Ingresa el nombre del auto" aria-label="default input example">
    
    </div>
    <div class="mb-3">
      <label class="form-label">Precio</label>
      <input name="precio" class="form-control" step="0.01" value="<?=$auto['Precio']?>" type="number" placeholder="Ingresa el precio del auto" aria-label="default input example">
    </div>
    <div class="mb-3">
  <label class="form-label">Descripción</label>
    <textarea name="descripcion" class="form-control" type="textarea" placeholder="Escribe una descripción del auto" aria-label="default input example"><?=$auto['Descripción']?></textarea>  </div>
  <div class="mb-3">
  <label class="form-label">Stock</label>
    <input  name="stock" class="form-control"  value="<?=$auto['Stock']?>" type="number" placeholder="Ingresa la cantidad de autos en existencia" aria-label="default input example">
  </div>
  <div class="mb-3">
  <label class="form-label">Imagen</label>
    <input  name="imagen" class="form-control" value="<?=$auto['Imagen']?>"  type="text" placeholder="Ingresa URL" aria-label="default input example">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  
</form>
</div>
</html>