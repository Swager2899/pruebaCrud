/**=============================================================================
*
*	Filename:  function.ajax.js
*
*	(c)Autor: Arkos Noem Arenom
*
*	Description: Ajax para hacer las consultas
*
*	Licence: GPL|LGPL
*
*===========================================================================**/
/**********************************************************
*
*  Funcion para Guardar
*   
**********************************************************/
$(document).ready(function(){
	$('#btnGuarda').click(function(){
		if($('#nom_ocupa').val() == ""){
			$('#alerta').html('<div class="alert alert-warning alert-dismissable""><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><b>Alerta!</b> Te hizo falta el nombre de la Ocupación.</div>');
			$('#nom_ocupa').focus();
		}else if($('#cod_ocupa').val() == ""){
			$('#alerta').html('<div class="alert alert-warning alert-dismissable""><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><b>Alerta!</b> Te hizo falta el código de la Ocupación.</div>');
			$('#cod_ocupa').focus();
		}else{
						
			$.ajax({
				url: '../../../controller/configuracion/Ocupacion.controller.php',
				type: 'POST',
				data: 'accion=INSERTAR&nom_ocupa='+$('#nom_ocupa').val()+'&cod_ocupa='+$('#cod_ocupa').val(),
				beforeSend: function(){
					$("#alerta").html('<div class="alert alert-info"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><img src="../../../../public/dist/img/loading.gif" width="20" height="20"> Info.:</a> Enviando informacóm, por favor espere. </div>');
				},
				success:function(msj){
					if ( msj == 1 ){
						$("#alerta").append("<div class='alert alert-success alert-dismissible' id='alerta'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><h4><i class='icon fa fa-check'></i> Exito!</h4>El Item Fue Agregado Exitosamente.</div>");
						$("#alerta").css("display", "");
						setTimeout(function(){
							window.location.href = "index.php";
						}, 100);
					}else{
						$("#alerta").html('<div class="alert alert-danger"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><i class="fa fa-exclamation-circle"></i> Upsss.</a> '+msj+'.</div>');
					}
				},
				error:function(msj){
					$("#alerta").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><a href="#" class="link">Error: </a> Ha ocurrido un error durante la ejecución '+msj+'</div>');
				}
			});
		}
	});

	/**=============================================================================
	*
	*	funciÃ³n para editar
	*
	*===========================================================================**/

	$('#BtnRegresar').click(function(){
		$("#alerta").html('<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button><h4><i class="icon fa fa-check"></i> Redireccionando!!!...</h4>Espera un momento….</div>');
		setTimeout(function(){
			window.location.href = "index.php";
		}, 3000);
	});

	/**=============================================================================
	*
	*	funciÃ³n para editar		
	*
	*===========================================================================**/

	$('#btnEditar').click(function(){
	if($('#nom_ocupa').val() == ""){
			$('#alerta').html('<div class="alert alert-warning alert-dismissable""><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><b>Alerta!</b> Te hizo falta el nombre de la Ocupación.</div>');
			$('#nom_ocupa').focus();
		}else if($('#cod_ocupa').val() == ""){
			$('#alerta').html('<div class="alert alert-warning alert-dismissable""><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><b>Alerta!</b> Te hizo falta el código de la Ocupación.</div>');
			$('#cod_ocupa').focus();
		}else{	
			$.ajax({
				url: '../../../controller/configuracion/Ocupacion.controller.php',
				type: 'POST',
				data: 'accion=EDITAR&id_ocupa='+$('#id_ocupa').val()+'&nom_ocupa='+$('#nom_ocupa').val()+'&cod_ocupa='+$('#cod_ocupa').val(),
				beforeSend: function(){
					$("#alerta").html('<div class="alert alert-info"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><img src="../../../../public/dist/img/loading.gif" width="20" height="20"> Info.:</a> Enviando informacóm, por favor espere. </div>');
				},
				success:function(msj){
					if ( msj == 1 ){
						$("#alerta").append("<div class='alert alert-success alert-dismissible' id='alerta'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><h4><i class='icon fa fa-check'></i> Exito!</h4>El Item Fue Actualizado Exitosamente.</div>");
						$("#alerta").css("display", "");
						setTimeout(function(){
							window.location.href = "index.php";
						}, 100);
					}else{
						$("#alerta").html('<div class="alert alert-danger"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><i class="fa fa-exclamation-circle"></i> Upsss.</a> '+msj+'.</div>');
					}
				},
				error:function(msj){
					$("#alerta").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><a href="#" class="link">Error: </a> Ha ocurrido un error durante la ejecución '+msj+'</div>');
				}
			});
		}
	});
	
	/**=============================================================================
	*
	*	funciÃ³n para eliminar Item
	*
	*===========================================================================**/

	$(document).on('click', '.Eliminar', function(event){

		var IdOcupacion = $(this).data("id_ocupa");
		var NomOcupa = $(this).data("nom_ocupa");
        swal({ 
			title: "¿Desea Eliminar La Ocupación: "+ $(this).data("nom_ocupa")+"?",
			type: "error",
			showCancelButton: true,
			cancelButtonText: "No",
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "¡Si, Dale!",
			closeOnConfirm: false 
		},

		function(){
			$.ajax({
				url: '../../../controller/configuracion/Ocupacion.controller.php',
				type: 'POST',
				data: 'accion=ELIMINAR&id_ocupa='+IdOcupacion,
				beforeSend: function(){
					$("#alerta").html('<div class="alert alert-info"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><img src="../../../public/assets/img/loading.gif" width="20" height="20"> Info.:</a> Enviando informacóm, por favor espere. </div>');
				},
				success:function(msj){  
					if (msj == 1){
						$("#alerta").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><i class="fa fa-check"></i> Ok.</a> El registro se actualizo correctamente. </div>');
						$("#TrDatos" + IdOcupacion).remove(); 
						swal("¡Bien!",
							"El Personal Se Eliminó Correctamente!.",
							"success");
					}else{
						$("#alerta").html('<div class="alert alert-danger"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><i class="fa fa-exclamation-circle"></i> Upsss.</a> '+msj+'.</div>');
						swal("¡Upss!",
							"El Personal No Se Pudo Eliminar!."+ msj + "." ,
							"error");
					}
				},
				error:function(msj){
					$("#alerta").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><a href="#" class="link">Error: </a> Ha ocurrido un error durante la ejecución '+msj+'</div>');
				}
			});
		});
	});
	/**=============================================================================
	*
	*	funciÃ³n para Activar o Desactivar Item
	*
	*===========================================================================**/

	$(document).on('click', '.Activar', function(event){

		var IdOcupacion = $(this).data("id_ocupa");
		var NomOcupacion = $(this).data("nom_ocupa");
		var Acti = 0;
		if($(this).is(':checked')){
			Acti = 1;
		}

		swal({ 
			title: "¿Desea Inactivar o Desactivar el Item con el nombre: "+ $(this).data("nom_ocupa")+"?",
			type: "warning",
			showCancelButton: true,
			cancelButtonText: "No",
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "¡Si, Dale!",
			closeOnConfirm: false 
		},

		function(){
			$.ajax({
				url: '../../../controller/configuracion/Ocupacion.controller.php',
				type: 'POST',
				data: 'accion=ACTIVAR&id_ocupa='+IdOcupacion+'&acti='+Acti,
				beforeSend: function(){
					$("#alerta").html('<div class="alert alert-info"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><img src="../../../public/assets/img/loading.gif" width="20" height="20"> Info.:</a> Enviando informacóm, por favor espere. </div>');
				},
				success:function(msj){
					if (msj == 1){
						$("#alerta").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><i class="fa fa-check"></i> Ok.</a> El registro se actualizo correctamente. </div>');
						swal("¡Bien!",
							"El Item Se Activó/Inactivó Correctamente!.",
							"success");
					}else{
						$("#alerta").html('<div class="alert alert-danger"><button class="close" data-dismiss="alert"></button><a href="#" class="link"><i class="fa fa-exclamation-circle"></i> Upsss.</a> '+msj+'.</div>');

						swal("¡Upss!",
							"El Item No Se Pudo Activar/Desactivar!.",
							"error");
					}
				},
				error:function(msj){
					$("#alerta").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><a href="#" class="link">Error: </a> Ha ocurrido un error durante la ejecución '+msj+'</div>');
				}
			});
		});
	});
});