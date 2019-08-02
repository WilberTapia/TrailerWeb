<?php
plantilla::aplicar();

$peliculas = new stdClass;
$peliculas->id ='';
$peliculas->titulo ='';
$peliculas->duracion ='';
$peliculas->genero ='';
$peliculas->actores ='';
$peliculas->fechala ='';
$peliculas->imagen ='';
$peliculas->trailerid ='';

  //var_dump($datos);
if (isset($datos)) {
  if (count($datos) > 0) {
    $peliculas = $datos[0];
  }
  // code...
}
?>
<!DOCTYPE html>
<html lang="en">
<body onload="cargarImagen();">
<div class="container">
    <h3></h3>
    <br>
    <br>
    <br>
    <form method="post" action="<?php echo base_url('main/guardar') ?>">
    <div class="row">
    <div class="col-sm-6">
        <div class="form-row mb-4">
            <div class="col-md-12">
              <input type="hidden" name="id" class="form-control" value="<?php echo $peliculas->id; ?>" required>
                <label>Titulo:</label>
                <input type="text" name="titulo" class="form-control" placeholder="Titulo..." value="<?= $peliculas->titulo; ?>" required>
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="col-md-4">
                <label>Duracion:</label>
                <input type="text" name="duracion" class="form-control" placeholder="Duracion..." value="<?php echo $peliculas->duracion; ?>" required>
            </div>

            <div class="col-md-4">
                <label>Genero:</label>
                <input type="text" name="genero" class="form-control" placeholder="Genero..." value="<?php echo $peliculas->genero; ?>" required>
            </div>

            <div class="col-md-4">
                <label>Fecha de lanzamiento:</label>
                <input type="date" name="fechala" class="form-control" placeholder="Fecha de Lanzamiento" value="<?php echo $peliculas->fechala; ?>" required>
            </div>
        </div>

        <div class="form-row mb-4">
              <div class="col-md-12">
                  <label>Actores:</label>
                  <input type="text" name="actores" class="form-control" placeholder="Actores..." value="<?php echo $peliculas->actores; ?>" required>
              </div>
          </div>
        <div class="form-row mb-4">
            <div class="col-md-6">
                <label>Link de la Imagen:</label>
                <input type="text" id="imagen" onblur="cargarImagen();" onload="cargarImagen();" name="imagen" class="form-control"  value="<?php echo $peliculas->imagen; ?>" required placeholder="Link de la Imagen...">
            </div>

            <div class="col-md-6">
                <label>Link del Trailer:</label>
                <input type="text" name="trailerid" class="form-control" placeholder="Link de Trailer..." value="<?php echo $peliculas->trailerid; ?>" required>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success bt-large">ENVIAR</button>
            <button type="reset" onclick="return confirm('Seguro de limpiar los campos?')" class="btn btn-warning bt-large">LIMPIAR</button>
        </div>
    </div>

    <div class="col-sm-4 ml-auto">
            <div class="card">
                <div class="card-body">
                    <img id="img" src="" class="img-fluid"/>
                </div>
            </div>
    </div>
    </div>
    </form>
</div>
<script>
function cargarImagen(){

    var imagen = document.getElementById("imagen").value;

    document.getElementById("img").src = imagen;
}
</script>
</body>
</html>
