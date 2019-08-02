<?php plantilla::aplicar();?>
<div class="container">
  <br>
<br>
<br><br>
<div class="row">
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
      <table class="table table-dark container">
      <tbody>
        <?php
          foreach ($datos as $datos) {
              echo <<<ARTICULOS
                    <tr>
                    <th scope="row">Titulo</th>
                    <td>{$datos->titulo}</td>
                    </tr>
                    <tr>
                    <th scope="row">Duracion</th>
                    <td>{$datos->duracion}</td>
                    </tr>
                    <tr>
                    <th scope="row">Genero</th>
                    <td>{$datos->genero}</td>
                    </tr>
                    <tr>
                    <th scope="row">Actores</th>
                    <td>{$datos->actores}</td>
                    </tr>
                    <tr>
                    <th scope="row">Fecha de Lanzamiento</th>
                    <td>{$datos->fechala}</td>
                    </tr>
ARTICULOS;
          }
       ?>
      </tbody>
      </table>
    </div>
  </div>
</div>

<?php   echo '<br /><div class="col-sm-7 d-flex flex-row-reverse float-right">
        <div class="card">
          <div class="card-body">
          <iframe width="580" height="330" src="https://www.youtube.com/embed/'.$_GET['id'].'"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div> ';
 ?>

</div>
