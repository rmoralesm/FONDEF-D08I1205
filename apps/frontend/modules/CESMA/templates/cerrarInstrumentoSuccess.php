<?php //echo $sql_update_or_insert_respuesta;?>
<div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">Formulario CESMA
  </div>

<div class="grid-12-12">
  <span class="form-msg-success"><strong>OK:</strong> El instrumento se ha cerrado correctamente.</span>
</div>
<script>$(".form-msg-success").hide();</script>
<br>
<div class="prefix_4 grid_11">


<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><span class="ui-icon ui-icon-circle-arrow-w" style="float:left;"></span>Volver al menú</a>
</div>

<script>
  $().ready(
  function() {$(".form-msg-success").fadeIn("slow");
  });
</script>
