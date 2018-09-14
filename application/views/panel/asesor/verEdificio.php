<?php /** @var  $edificio */?>

    <div class="col-md-8" xmlns="http://www.w3.org/1999/html">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="<?php echo base_url() ?>index.php/edificios" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h5 class="panel-title">Vista individual Edificio</h5>
            </div>          

         <div class="panel-body" >
       
        <h1>ID: <?php echo $edificio->id_edificio; ?> <br />
        Nombre Edificio:<?php echo $edificio->nombre_edificio ?> <br />
        Ubicación: <?php echo $edificio->cantaulas_edificio; ?> <br />
        Recinto: <?php echo $edificio->id_recinto ?> <br /> </h1>
     
       
        <div> <a class="btn btn-info" onclick="alert();" href="<?php echo base_url() ?>index.php/edificios"> Volver atrás </a> </div>

       
        </div>
</div>
</div>
                <script>
                //Script para notificaciones con javascript

                function alerta() {
                            var txt;
                            if (confirm("Seguro que desea ejecutar esta acción!")) {
                                txt = "You pressed OK!";
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("demo").innerHTML = txt;
                        }

                function alert(){ 
                    
                    var txt;
                    if (confirm("Seguro que desea ejecutar esta acción!")) {
                        txt = "You pressed OK!";
                    } else {
                        txt = "You pressed Cancel!";
                    }
                    document.getElementById("demo").innerHTML = txt;
                }
                
                </script>
