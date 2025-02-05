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
			<form action="">
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Nombre</label>
						<input type="text" name="nombre" class="form-control" required placeholder="Nombre">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Apellido paterno</label>
						<input type="text" name="ap" class="form-control" required placeholder="Apellido paterno">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Apellido materno</label>
						<input type="text" name="am" class="form-control" required placeholder="Apellido materno">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Fecha de nacimiento</label>
						<input type="date" name="fn" class="form-control" required>
					</div>
					<div class="form-group col-sm-4">
						<label for="">Sexo</label>
						<input type="text" name="genero" class="form-control" required placeholder="M o F">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Guardar</button>
			</form>
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
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Fecha de nacimiento</th>
								<th scope="col">Genero</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$count = 0;
								foreach ($personas as $persona) {
									echo '
										<tr>
											<td>'.++$count.'</td>
											<td>'.$persona->nombre.' '.$persona->ap.' '.$persona->am.'</td>
											<td>'.$persona->fn.'</td>
											<td>'.$persona->genero.'</td>
											<td><button type="button" class="btn btn-warning text-white" onclick="llenar_datos('.$persona->id.', `'.$persona->nombre.'`, `'.$persona->ap.'`, `'.$persona->am.'`, `'.$persona->fn.'`, `'.$persona->genero.'`)">Editar</button></td>
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
</body>
</html>