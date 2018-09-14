 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="<?= base_url() ?>css/estilos.css" type="text/css" />
 <title>Formulario  con codeIgniter y ajax</title>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
 <script type="text/javascript">

 
 $(document).ready(function(){
 $("#formulario_ajax").submit(function(){
 $.ajax({
 url: $(this).attr("action"),
 type: $(this).attr("method"),
 data: $(this).serialize(),
 beforeSend:function(){
 $(".loader").show();
 },
                    success:function(){
                        $(".loader").fadeOut("slow");
                    }
 });
 
 });
 return false;
 });
 </script>
 </head>
 <body>
 <div class="col-md-12">
    <p></p>
</div>
<div class="col-md-8">
    <div class="panel panel-primary">
    <div class="panel-heading">

        <h5 class="panel-title"> Actualizar datos del Aula</h1>
    </div>

    <div class="panel-body" >

    

 <fieldset>
 <legend>Formulario de mensajes</legend>
     <form id="formulario_ajax" action="http://localhost/uasd_sistema/clientes/insertar_comentario" method="post">
 <div class="formu"><label>Nombre:</label><input type="text" class="campo" name="nom" value="<?php echo set_value('nom'); ?>" /><?php echo form_error('nom', '<span class="error">', '</span>'); ?></div>
 <div class="formu"><label>Email:</label><input type="text" class="campo" name="email" value="<?php echo set_value('email'); ?>" /><?php echo form_error('email', '<span class="error">', '</span>'); ?></div>
 <div class="formu"><label>Asunto:</label><input type="text" class="campo" name="asunto" value="<?php echo set_value('total_inscripcion'); ?>" /><?php echo form_error('asunto', '<span class="error">', '</span>'); ?></div>
 <div class="formu"><label>Mensaje:</label><textarea cols="50" rows="6" name="mensaje"><?php echo set_value('mensaje'); ?></textarea><?php echo form_error('mensaje', '<span class="error">', '</span>'); ?></div>
 <div class="formu"><label></label><input type="submit" value="Enviar mensaje" title="Enviar mensaje"></div ><div class="loader"><img src="http://localhost/formulario_cod_ajax/images/282.gif"></div>
 
    <input type="button" value="test" class="form-control btn btn-primary" id="growl-primary">


 <input type="hidden" name="grabar" />
 <?php
 if($this->uri->segment(1)=="mensaje" and $this->uri->segment(2)=="enviado")
 {
 ?>
 <div class="correcto">El mensaje se envío correctamente</div>
 <?php
 }
 ?>
 </form>

 

 </fieldset>


        </div>
        </div>

 </body>
</html>