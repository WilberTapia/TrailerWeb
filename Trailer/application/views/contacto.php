<!DOCTYPE html>
<?php plantilla::aplicar(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
<div class="container">
  <br><br>
      <div class="row">
        <div class="col-sm">
        <form class="" action="index.html" method="post">
          <br><br>
             <h3>Formulario de Contacto </h3>
          <br>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label"><b>Nombre:</b></label>
              <div class="col-sm-9">
                <input type="name" id="user-name" class="form-control" placeholder="Nombre" required autofocus />
              </div>
            </div>
          <br>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label"><b>Apellido:</b></label>
              <div class="col-sm-9">
                <input type="name" id="user-name" class="form-control" placeholder="Apellido" required autofocus />
              </div>
            </div>
            <br>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><b>Direccion:</b></label>
                <div class="col-sm-9">
                  <input type="address" id="user-name" class="form-control" placeholder="Direccion" required />
                </div>
              </div>
              <br>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><b>Telefono:</b></label>
                <div class="col-sm-9">
                  <input type="text" id="user-name" class="form-control" placeholder="Telefono Ej: 809-999-9999" required />
                </div>
              </div>
              <br>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label"><b>Email:</b></label>
                  <div class="col-sm-9">
                    <input type="email" id="user-name" class="form-control" placeholder="Correo Ej: ejemplo@gmail.com" required />
                  </div>
                </div>
                <div class="container-fuild text-center" style="" >
                  <input type="submit" class="btn btn-primary" value="Enviar">
                  <input type="reset" class="btn btn-danger" value="Borrar">
                </div>
          </form>
        </div>
        <div class="col-sm">
          <br>
          <br>
          <h3>Nuestras Oficinas</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d607.5833253112486!2d-69.89719211693583!3d18.46811822592018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf882f0a7393ef%3A0x2e61f231157a7730!2sCalle+Danae+27%2C+Santo+Domingo!5e0!3m2!1ses-419!2sdo!4v1558222144356!5m2!1ses-419!2sdo"
          width="600" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
</div>
<br>
    <div class="container text-center redes" >
      <span  class="border border-dark rounded-pill" style="padding: 15px 15px; ">
      <a class="rounded" href="#" target="_blank"><i class="fa fa-fw fa-facebook-official" ></i></a>
      <a href="#" target="_blank"><i class="fa fa-fw fa-instagram" ></i></a>
      <a href="#" target="_blank"><i class="fa fa-fw fa-github" ></i></a>
      </span>
</div>
  </body>
</html>
