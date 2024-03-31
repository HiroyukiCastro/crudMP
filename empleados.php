<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
            <th scope="col">ID NO</th>
            <th scope="col">Carpeta Fiscal</th>
            <th scope="col">Citado</th>
            <th scope="col">Dirección</th>
            <th scope="col">Investigado</th>
            <th scope="col">Delito</th>
            <th scope="col">Agraviado</th>
            <th scope="col">Disp. Fiscal</th>
            <th scope="col">Disp. Fiscal Num.</th>
            <th scope="col">Fecha de Disp. Fiscal</th>
            <th scope="col">OPERACIÓN A REALIZAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($empleados as $empleado) {?>
            <tr id="empleado_<?php echo $empleado['id']; ?>">
                    
                <th scope='row'><?php echo $empleado['id']; ?></th>
                <td><?php echo $empleado['carpeta']; ?></td>
                <td> <?php echo $empleado['citado']; ?></td>
                <td><?php echo $empleado['direccion']; ?></td>
                <td><?php echo $empleado['investigado']; ?></td>
                <td><?php echo $empleado['delito']; ?></td>
                <td> <?php echo $empleado['agraviado']; ?></td>
                <td><?php echo $empleado['disposicion']; ?></td>
                <td><?php echo $empleado['disposicionnumero']; ?></td>
                <td><?php echo $empleado['fecha']; ?></td>

                <td>
                        <a title="Ver detalles del empleado" href="#" onclick="verDetallesEmpleado(<?php echo $empleado['id']; ?>)" class="btn btn-success">
                            <i class="bi bi-binoculars"></i>
                        </a>
                        <a title="Editar datos del empleado" href="#" onclick="editarEmpleado(<?php echo $empleado['id']; ?>)" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a title="Eliminar datos del empleado" href="#" onclick="eliminarEmpleado(<?php echo $empleado['id']; ?>)" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>   
               
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>