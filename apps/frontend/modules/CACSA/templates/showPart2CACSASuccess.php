<?php slot('title') ?>
  <?php  echo "Formulario a CACSA ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<?php $url_next_post=url_for('CACSA/proximoBloquePart2CACSA?idEncuestado='.$idEncuestado);?>

<!-- Comienzo Bloque Dialogo Instrucciones -->
  <div id="dialogo-instrucciones" style="display: none;" title="Instrucciones CACSA">
	<p>
		<span class="ui-icon-info-grande" style="float:left; margin:4px 4px 4px 4px;"></span>
     A continuación se presenta una lista de frases acerca de conductas y actitudes que suele tener la gente. Lee cada frase y decide si su contenido te representa a ti, o no.   <br><br>
   
	  <ul>
      <li>Si la frase representa lo que tú haces o piensas, elige <b>Verdadero</b></li>
      <li>Si la frase <b>NO</b> representa lo que tú haces o piensas, elige  <b>Falso</b></li>  
	  </ul>
	  <br>
	  <b>Ejemplo</b>
	  <br>
	  <br>
      <?php echo image_tag('cacsa2.jpg', 'alt=Selecciona el radio que tenga el label V o el label F') ?>
	</p>
  
 <br>
  <input type="checkbox" id="LeiLasInstrucciones" name="LeiLasInstrucciones" value="LeiLasInstrucciones" /> <b>Declaro haber leido las instrucciones y comprenderlas.</b> <br>
  </div>
<!-- Fin Bloque Dialogo Instrucciones -->

<form id="formulario_CACSA" name="formulario_CACSA" class="form" method="post" action="<?php echo $url_next_post; ?>">
  <?php if(!($es_ultimo_bloque)): ?>
  <div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">Formulario CACSA - <?php echo $porcCompletado; ?> % completado
  <span class="icono-ver-instrucciones" onclick="$('#dialogo-instrucciones').dialog('open');"></span>
  </div>
<?php foreach ($Preguntas_CACSA as $pregunta):?>
  <!-- Comienzo Bloque Pregunta -->
  <div id="CACSA_pregunta_<?php echo $pregunta["id_pregunta"];?>" class="CACSA_bloque_pregunta">
		<div class="grid-5-12">
			<label class="form-lbl-V-or-F">
        <?php echo $pregunta["id_pregunta"].".-".$pregunta["texto_pregunta"];?>
        <?php if($pregunta["es_requerida"]): ?>
          <em class="form-req"></em>
        <?php endif;?>
      </label>
		</div>
    <div class="grid-4-12">
      <ul class="form-list-rdo">
        <li><input class="botonradio" id="<?php echo $pregunta["id_pregunta"];?>" name="radio_VorF_CACSA_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="V" /><label class="form-lbl">Verdadero</label></li>
        <li><input class="botonradio" id="<?php echo $pregunta["id_pregunta"];?>" name="radio_VorF_CACSA_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="F" /><label class="form-lbl">Falso</label></li>
			</ul>

    </div>

      

    <div class="grid-1-12"> <!-- tools para la pregunta -->
     <div id="boton_add_comentario_<?php echo $pregunta["id_pregunta"];?>" class="ui-icon-comentar" onclick="$('#dialogo-addcomentario').data('pregunta', {id: '<?php echo $pregunta["id_pregunta"];?>',numero: '<?php echo $pregunta["id_pregunta"];?>', texto: '<?php echo trim($pregunta["texto_pregunta"]);?>'}).dialog('open');"></div>
     </div>
       <div class="clear">

                </div>
    <div class="grid-12-12" style="display: none;"> <!--"Comentario adicional style="display: none;"-->
      <textarea id="comentario_<?php echo $pregunta["id_pregunta"];?>" name="comentario_<?php echo $pregunta["id_pregunta"];?>" title="Comentario"></textarea>
    </div>
  </div>
  <!-- Fin Bloque Pregunta -->
<?php endforeach ?>


  <!-- Comienzo Bloque Dialogo añadir comentario -->
  <div id="dialogo-addcomentario" style="display: none;" title="Agregar comentario">
    <p>A continuación agrega un comentario a la pregunta <i id="dialog_i_pregunta_referencia" class="referencia_pregunta"> ERROR RECARGE LA PAGINA PORFAVOR</i></p>
    <div  style="margin:auto; padding:auto;width:500px;">
      <div style="height:25px">

        <div style="float:left"><b>Comentario</b></div>
        <div id="barbox">
          <div id="progressbar"></div>
        </div>
        <div id="count">280</div>
      </div>
      <p>
        <textarea id="text_area_input_comentario" class="ui-corner-all" title="Porfavor escribe aqui tu comentario"></textarea>
      </p>
    </div>
  </div>
<!-- Fin Bloque Dialogo añadir comentario -->
<?php else: ?>
<div class="ui-widget">
				<div style="margin-top: 20px; padding: 0pt 0.7em;" class="ui-state-highlight ui-corner-all">
					<p><span style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-info"></span>
					<strong>"</strong>El cuestionario ha sido completado.<strong>"</strong></p>
				</div>
</div>
<br>
<?php endif; ?>

<!-- Comienzo Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
<?php if(!($es_ultimo_bloque)): ?>
<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la inforCACSAón que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
<input type="submit" value="Siguiente" title="siguiente" class="form-button form-right">
<?php else: ?>
  <a class="form-button form-right" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
<?php endif; ?>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
</form>
<br>

<div id="dialog-envio-resp-por-bloque" title="Confirmar">
	<p><span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span><strong>¿Estas seguro que deseas continuar enviando los datos?.</strong> Una vez que envies las respuestas de este bloque de preguntas ya no podrán ser modificadas.</p>
</div>




<!-- Codigo JS del dialogo de instrucciones: Se ha declarado acá dado que el
autodespliegue en la primera oportunidad es dinámico con respecto a un parámetro
pasado por php.

Si es la primera vez que se llama a la web se muestra el diálogo de
instrucciones, en caso contrario el diálogo permanece oculto y se muestra al
presionar el botón señalado con ícono (i).
-->
<script type="text/javascript">
  var is_show_instruccions=eval("<?php echo $is_show_instruccions;?>"); // pasa el string a bool en js
  if(is_show_instruccions==null){ var is_show_instruccions=false;$("#formulario_CACSA").hide();alert("Al parecer ha habido un problema de connección, es recomendable que recarge la página");}

 if(is_show_instruccions){
    $("#formulario_CACSA").hide();
  }else{}
  //alert(is_show_instruccions);
    
		$("#dialogo-instrucciones").dialog( "destroy" );
		$("#dialogo-instrucciones").dialog({
      height: 373,
      width: 960,
			modal: true,
      autoOpen: is_show_instruccions, //se abre solito al cargar la paguina si es true
//      closeOnEscape: false,
      closeText: 'Cerrar',
      draggable: false,
      show: 'slide',
			buttons: {
				Ok: function() {
          if($('#LeiLasInstrucciones').attr("checked")){
              $(this).dialog('close')
          }else{
             alert("Debes declarar haber leido las instrucciones primero. Haz click en el botón inferior.");
          }
				}
			},
      beforeClose: function(event, ui) {
        $("#formulario_CACSA").show();
      }
		});
</script>
<!-- Fin código diálogo de instrucciones -->



