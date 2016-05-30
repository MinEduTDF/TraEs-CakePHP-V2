var js = jQuery.noConflict();
js(document).ready(function() {
	js("#InscripcionMateriaId").change(function(){
	js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url: basePath + "inscripcions/listamaterias/"+js(this).val(),
		//data: {value_to_send:value},
		beforeSend: function(){
			js('#imgcargas').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuesta){
			js('#imgcargas').html(respuesta);
		}

		});
		});
	});