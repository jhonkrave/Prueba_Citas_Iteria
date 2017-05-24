<div class="container" style="    background-color: #909498;
    width: 75%;
    padding: 2%;
    border-radius: 1%;
    height: 495px;
    margin-top: 1%;
    margin-bottom: 2%;">
    <h1 style="text-align: center;">Home Care Bienvenido  </h1>
 
	 <h2>listado Medicos</h2>
	<table  class="table table-stripe" style="margin-top: 7%;">
		<thead>
			<th>#</th>
			<th>Identificacion</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Ciudad</th>
			<th>Sexo</th>
			<th>Tipo Documento</th>
			<th>Tipo afiliado</th>
		</thead>
		<tbody>
			<tr>
					<?php 
					$count=1;
					foreach ($objMedico as $datos ) {
					?>
						<td><?php echo $count++;?></td>
						<td><?php echo $datos['identificacion'];?></td>
						<td><?php echo $datos['nombre'];?></td>
						<td><?php echo $datos['apellido'];?></td>
						<td><?php echo $datos['ciudad'];?></td>
						<td><?php echo $datos['sexo'];?></td>
						<td><?php echo $datos['cod_tipo_afil'];?></td>
						<td><?php echo $datos['cod_tipo_docu'];?></td>
					</tr>
					<?php 
					}
					?>				
			
		</tbody>
	</table>
</div> 