<div class="box-principal">
<h3 class="titulo">Agregar Estudiantes</h3>
<div class="panel panel-success">
	<div class="panel-heading">
		<div class="panel-title">Agregar un nuevo estudiante</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nombre" class="control-label">Nombre del estudiante</label>
						<input class="form-control" name ="nombre" type="text" required/>
					</div>
					<div class="form-group">
						<label for="edad" class="control-label">Edad</label>
						<input class="form-control" name="edad" type="text" required/>
					</div>
					<div class="form-group">
						<label for="promedio" class="control-label">Promedio</label>
						<input class="form-control" name="promedio" type="text" required/>
					</div>

					<div class="form-group">
						<label for="seccion" class="control-label">Seccion</label>
						<select name="id_seccion" class="form-control">
							<?php while( $row =  mysqli_fetch_array($datos)){?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label for="imagen" class="control-label"></label>
						<input class="form-control" name="imagen" id="imagen" type="file" required/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Registrar</button>
						<button type="reset" classÇ="btn btn-warning">Borrar</button>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>
</div>