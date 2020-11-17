<div class="box-principal">
<?php 
	//$datos = $estudiantes->index();

	?>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="titulo">Listado de secciones</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Accion</th>
				</thead>				
				<tbody>
					<?php while($row = mysqli_fetch_array($datos)){ ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><a class="btn btn-warning" href="<?php echo URL; ?>secciones/editar/<?php echo $row['id']; ?>">Editar</a>
								<a class="btn btn-danger" href="<?php echo URL; ?>secciones/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
							</td>
						</tr>					
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						