<?php slot('title') ?>
  <?php  echo "[{$porcCompletado} % completado] ";?>
<?php end_slot(); ?>

<?php $url_save_post=url_for('ENTREVISTA/GuardarInstrumento?idEncuestado='.$idEncuestado);?>

<form id="formulario_ENTREVISTA" name="formulario_ENTREVISTA" class="form" method="post" action="<?php echo $url_save_post; ?>">
    
<div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;text-align:center;">
    Entrevista.
</div>

    
<div class="grid-12-12">
    <label class="form-lbl">Explicite el encuadre realizado para el proceso de entrevista, a partir de los limites puestos por su programa e institución, y describa la actitud del/la joven frente a éste:</label>
    <textarea class="form-txt" cols="" rows="" id="encuadre_entrevista" name="encuadre_entrevista"></textarea>
</div>
<div class="clear"></div>


<div class="grid-12-12">
    <label class="form-lbl">Síntesis de las expectativas, representaciones que el/la joven se ha hecho de su situación actual y de lo que espera del programa:</label>
    <textarea class="form-txt" cols="" rows="" id="expectativas" name="expectativas"></textarea>
</div>
<div class="clear"></div>


<div class="grid-12-12">
    <label class="form-lbl">Descripción de congruencias e incongruencias en el lenguaje verbal y no verbal (relato, actitud general, etc):</label>
    <textarea class="form-txt" cols="" rows="" id="congruencias_incongruencias" name="congruencias_incongruencias"></textarea>
</div>
<div class="clear"></div>


<div class="grid-12-12">
    <label class="form-lbl">Creencias, valores y cogniciones que se observan en la entrevista, y que pudieran actuar en la mantención de su comportamiento transgresor:</label>
    <textarea class="form-txt" cols="" rows="" id="creencias_valores_cog" name="creencias_valores_cog"></textarea>
</div>
<div class="clear"></div>

<div class="grid-12-12">
    <label class="form-lbl">Resumir estrategias para resolver problemas que se observan de modo más frecuente en la historia de vida del/la joven:</label>
    <textarea class="form-txt" cols="" rows="" id="estrat_res_problemas" name="estrat_res_problemas"></textarea>
</div>
<div class="clear"></div>



<div class="grid-12-12">
    <label class="form-lbl">Breve síntesis de aspectos relevantes en la historia de vida del/la joven:</label>
    <textarea class="form-txt" cols="" rows="" id="sintesis_aspectos_rel" name="sintesis_aspectos_rel"></textarea>
</div>
<div class="clear"></div>


<div class="grid-12-12">
    <label class="form-lbl">Observaciones generales, impresión del caso:</label>
    <textarea class="form-txt" cols="" rows="" id="obs_generales_impresioncaso" name="obs_generales_impresioncaso"></textarea>
</div>
<div class="clear"></div>


<div class="grid-12-12">
    <label class="form-lbl">Apreciación de la posibilidad de cambio y adherencia a la intervención:</label>
    <textarea class="form-txt" cols="" rows="" id="apreciacion_posibilidad_cambio" name="apreciacion_posibilidad_cambio"></textarea>
</div>
<div class="clear"></div>


<div class="grid-5-12" style="background-color: #F2F2F2">
            Subir archivo de consentimiento informado: 
</div>
<div class="grid-3-12">
  <div id="file-uploader">
    <noscript>
      <p>Porfavor habilita JavaScript para poder subir los ficheros de gnopro.</p>
      <!-- or put a simple form for upload here -->
    </noscript>
  </div>
  <script>
      function createUploader(){
          var uploader = new qq.FileUploader({
              element: document.getElementById('file-uploader'),
              action: '<?php echo url_for('ENTREVISTA/subirArchivo'); ?>',
              debug: true,
              multiple: false,
              messages: {
                typeError: "{file} posee una extensi\u00F3n inv\u00E1lida. S\u00F3lo la extensi\u00F3n {extensions} (GenoPro) est\u00E1 permitida.",
                sizeError: "{file} es demasiado grande, el tama\u00F1o m\u00E1ximo de un archivo es {sizeLimit}.",
                minSizeError: "{file} es demasiado peque\u00F1o, el tama\u00F1o m\u00EDnimo de un archivo es {minSizeLimit}.",
                emptyError: "{file} est\u00E1 vacio, porfavor selecciona el archivo denuevo e intenta otra vez.",
                onLeave: "Los archivos se est\u00E1n subiendo, si cierras la ventana ahora el proceso de subida se cancelar\u00E1."
               }

          });
      }

      // REF http://www.symfonylab.com/file-uploader-reload/
      window.onload = createUploader;
  </script>
</div>
<div class="clear"></div>
<br>
<div class="grid-3-12">
    <a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
</div>
<div class="grid-2-12"></div>
<div class="grid-4-12">
    <input type="submit" value="Finalizar" title="enviar" class="form-button form-right">
</div>
<div class="clear"></div>
<input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="CERRADO">
</form>

<br>