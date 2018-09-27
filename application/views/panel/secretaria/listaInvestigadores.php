<?php /** @var array $estudiantes */?>



<div class="panel panel-default">
<div class="panel-heading">
    <h4 class="panel-title">Listado de Investigadores</h4>


        <div class="form-group">
       
        <div class="col-md-6"> <!-- input type="search" class="form-control" aria-control="Table1" placeholder="buscar por nombre"--> 
        <button class="btn btn-default"  class="form-control" ><a href="<?php echo base_url() ?>index.php/investigadores/listadeEst">Buscar...</a></button></div>

       
        <div class="col-md-2"> <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/dashboards/mostrar"> Panel principal </a> </div>
                <div class="col-md-2"> <a class="btn btn-warning" href="<?php echo base_url() ?>index.php/investigadores/nuevo_investigador"> Nuevo Investigador </a> </div>
                <div class="col-md-2"> <a class="btn btn-success" href="<?php echo base_url() ?>index.php/imprimirInvestigadores/imprime_investigadores"> Imprimir </a> </div> 
                </div>

        <?php if (count($estudiantes)): ?>


            <div class="table-responsive">


        <table class="table table-info table-hover" id="Table1">
                <thead>
                    <tr>
                        <th>Codigo</th>                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Título</th>
                       <th>Area</th>                      
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>


                <?php foreach($estudiantes as $estudiante): ?>
                <tr class="odd gradeX">
                    <td style=""> <?php echo $estudiante->id_estudiante ?> </td>
                    
                    <td style=""> <?php echo $estudiante->nombre_estudiante ?> </td>
                    <td style=""> <?php echo $estudiante->apellido_estudiante?> </td>
                    <td style=""> <?php echo$estudiante->matricula_estudiante ?> </td>                    
                    <td style=""> <?php echo$estudiante->id_carrera ?> </td>                    
                    <td style=""> <?php echo $estudiante->telefono_estudiante ?> </td>
                    <td style=""> <?php echo $estudiante->email_estudiante ?> </td>
                    
                    
                    
                    <td>
                        <div class="btn-group">
                            <a data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-gear"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li><a href="<?php echo base_url() ?>index.php/investigadores/ver/<?php echo $estudiante->id_estudiante ?>">Ver investigador</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/investigadores/editar/<?php echo $estudiante->id_estudiante ?>">Editar</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/imprimirinvestigadores/pdf_investigador/<?php echo $estudiante->id_estudiante ?>">Imprimir</a></li>
                                <li><a onClick="return Cancelar(this);" href="<?php echo base_url() ?>index.php/investigadores/eliminar/<?php echo $estudiante->id_estudiante ?>">Eliminar</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() ?>index.php/welcome/index/<?php echo $estudiante->id_estudiante ?>">Agregar foto del investigador</a></li>
                                <li><a data-toggle="modal" data-target="#llamadaCliente">Llamada al investigador</a></li>                               
                                
                            </ul>
                        </div>


                    </td>


                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
                <?php else: ?>
                    <p> No hay Estudiantes para mostrar </p>
                <?php endif; ?>
               
               
            </div>

            <div class="rigth">
                <ul class="pagination pagination-split">
                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
           
    </div>
   
    </div>


<!-- Contenido llamada al Cliente -->
<div class="modal fade" id="llamadaCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Buscar por nombre de investigador</h4>
            </div>
            <div class="modal-body">
            <form class="searchform" action="#">
                <input type="text" class="form-control" name="id_estudiante" id="id_estudiante" placeholder="Buscar..." />
            </form>
                <div class="form-group">

                    <div class="col-md-12">
                        <label class="col-sm-4 control-label">Nombre</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="nombre_estudiante" id="nombre_estudiante" placeholder="Digite nombre del investigador" />
                        </div>
                    </div>

                    
                    
                   
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
   
<script>
$(document).ready( function () {
    $('#Table1').DataTable(); 
   
});


</script>

   
<script language="JavaScript" type="text/JavaScript">
// poner esto en el link href onClick="return Cancelar(this);"
function Cancelar(lnk){
  
   var x = confirm('Esta seguro de eliminar este registro?');
    if(x){
        return true;        
        alert('Registro eliminado');
    }else{         
        return false;
         alert('operacion cancelada');
    }
}
</script>


<!-- Fin Contenido llamada al Cliente -->

<!-- script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery('#table1').dataTable();

        jQuery('#table2').dataTable({
            "sPaginationType": "full_numbers"
        });

        // Select2
        jQuery('select').select2({
            minimumResultsForSearch: -1
        });

        jQuery('select').removeClass('form-control');

        // Delete row in a table
        jQuery('.delete-row').click(function(){
            var c = confirm("Continue delete?");
            if(c)
                jQuery(this).closest('tr').fadeOut(function(){
                    jQuery(this).remove();
                });

            return false;
        });

        // Show aciton upon row hover
        jQuery('.table-hidaction tbody tr').hover(function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 1});
        },function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 0});
        });


    });
</script -->

