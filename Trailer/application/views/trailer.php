<?php plantilla::aplicar(); ?>
<?php
$base = base_url('base');
if (!isset($_SESSION['nombre'])) {
	$f='none';
}else {
	$f='';
} ?>
  <div class="container">
		<br>
		<br>
		<br>
		<?php
		$i=0;
		foreach ($datos as $row) {
			if ($i%4 == 0) {
				echo <<<C
				<div class='row' style='margin: 0px 0px;'>
				<br>
C;
			}
			$urlBorrar = base_url("main/borrar/{$row->id}");
			$urlEditar = base_url('main/editar/'.$row->id);
			$fecha = date_format(date_create($row->fechala),'d/m/Y');
			#$fecha = date('d/m/Y', $row->fechala);
					echo <<<P
					<div class="col-sm">
						<div class="card mb" >
						<div class="col-md" style="padding-top: 15px;">
						<a name="si" onclick='show(this);' id="{$row->trailerid}" target="_blank">
							<img src="$row->imagen" class="card-img" alt="...">
						</a>
					</div>
					<div class="col-md-13">
						<div class="card-body">
							<h5 class="card-title"><b>$row->titulo</b></h5>
							<p class="card-text">
							<b>Duracion:</b> $row->duracion
							<br><b>Género:</b>
							$row->genero
							<br><b>Actores:</b>
							 $row->actores
							<br><b>Fecha de lanzamiento:</b>
							$fecha
							<div class="justify-content-center">

							<a href="{$urlEditar}" class="btn btn-primary" name="button" style="display: $f;">
							<i class="fa fa-edit" aria-hidden="true"></i></a>
							<a href={$urlBorrar} onclick="return confirm('¿Estas seguro de eliminarlo?');" class="btn btn-danger" style="display: $f;">
							<i class="fa fa-trash" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
P;
$i++;
	}
?>
	 </div>
<div style="margin-bottom: 50px;">
</div>

<script type="text/javascript">
var dialog = document.getElementById('dialogA');

	function show(btn) {
		let id = btn.id;
		window.location.href = './mostrar?id=' + id;
	}


</script>

</div>
