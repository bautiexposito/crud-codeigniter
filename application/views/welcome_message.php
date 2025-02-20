<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD CODEIGNITER</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
<body>
	<div class="container">
		<!-- Titulo -->
		<div class="row">
			<h2>CRUD CODEIGNITER</h2>
		</div>

		<!-- Formulario -->
		 <div class="mb-5">
			<?php echo form_open('welcome/agregar', ['id' => 'form-persona']); ?>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Nombre</label>
						<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Apellido paterno</label>
						<input type="text" name="apellido_paterno" class="form-control" required placeholder="Apellido paterno" id="apellido_paterno">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Apellido materno</label>
						<input type="text" name="apellido_materno" class="form-control" required placeholder="Apellido materno" id="apellido_materno">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Fecha de nacimiento</label>
						<input type="date" name="fecha_nacimiento" class="form-control" required id="fecha_nacimiento">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Sexo</label>
						<input type="text" name="sexo" class="form-control" required placeholder="M o F" id="sexo">
					</div>
				</div>
				<button type="submit" class="btn btn-primary w-100">Guardar</button>
			<?php echo form_close(); ?>
		 </div>
		 
		<!-- Tabla de datos -->
		 <div class="row">
			<div class="card col-12">
				<div class="card-header">
					<h4>Tabla de personas</h4>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nombre</th>
								<th scope="col">Fecha de nacimiento</th>
								<th scope="col">Sexo</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($personas as $persona) {
									echo '
										<tr>
											<td>'.$persona->id.'</td>
											<td>'.$persona->nombre.' '.$persona->apellido_paterno.' '.$persona->apellido_materno.'</td>
											<td>'.$persona->fecha_nacimiento.'</td>
											<td>'.$persona->sexo.'</td>
											<td><button type="button" class="btn btn-warning" text="white" onclick="llenar_datos('.$persona->id.', `'.$persona->nombre.'`, `'.$persona->apellido_paterno.'`, `'.$persona->apellido_materno.'`, `'.$persona->fecha_nacimiento.'`, `'.$persona->sexo.'`)">Editar</button></td>
											<td><a href="'.base_url('welcome/eliminar/'.$persona->id).'" type="button" class="btn btn-danger">Eliminar</a></td>
										</tr>
									';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		 </div>
	</div>
	<script>
		let url = "<?php echo base_url('welcome/editar'); ?>";
		const llenar_datos = (id, nombre, apellido_paterno, apellido_materno, fecha_nacimiento, sexo) => {
			let path = url + '/' + id;
			document.getElementById('form-persona').setAttribute('action', path);
			document.getElementById('nombre').value = nombre;
			document.getElementById('apellido_paterno').value = apellido_paterno;
			document.getElementById('apellido_materno').value = apellido_materno;
			document.getElementById('fecha_nacimiento').value = fecha_nacimiento;
			document.getElementById('sexo').value = sexo;
		}
	</script>
</body>
</html>