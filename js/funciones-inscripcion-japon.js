var jefform = jQuery.noConflict();
jefform(document).ready(function(){
	jefform(".fc_enviar").click(function() {
		
		var institucion_nombre = jefform("#fc_institucion_nombre").val();
			institucion_futuro = jefform("#fc_institucion_futuro").val();
			institucion_objetivos = jefform("#fc_institucion_objetivos").val();
			institucion_descripcion = jefform("#fc_institucion_descripcion").val();
			institucion_email = jefform("#fc_institucion_email").val();
			institucion_participacion = jefform("#fc_institucion_participacion").val();
			participante_nombre = jefform("#fc_participante_nombre").val();
			participante_apellidos = jefform("#fc_participante_apellidos").val();
			participante_email = jefform("#fc_participante_email").val();
			participante_cargo = jefform("#fc_participante_cargo").val();
			participante_participacion = jefform("#fc_participante_participacion").val();		
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			
		if (institucion_nombre == "") {
		    jefform("#fc_institucion_nombre").focus();
			jefform("#fc_institucion_nombre").addClass("error-iptx1");
		    return false;
		}else if (institucion_futuro == "") {
		    jefform("#fc_institucion_futuro").focus();
			jefform("#fc_institucion_futuro").addClass("error-textarea");
		    return false;
		}else if (institucion_objetivos == "") {
		    jefform("#fc_institucion_objetivos").focus();
			jefform("#fc_institucion_objetivos").addClass("error-textarea");
		    return false;
		}else if (institucion_descripcion == "") {
		    jefform("#fc_institucion_descripcion").focus();
			jefform("#fc_institucion_descripcion").addClass("error-textarea");
		    return false;
		}else if(institucion_email == "" || !validacion_email.test(institucion_email)){
		    jefform("#fc_institucion_email").focus();
			jefform("#fc_institucion_email").addClass("error-iptx1");
		    return false;
		}else if(institucion_participacion == ""){
		    jefform("#fc_institucion_participacion").focus();
			jefform("#fc_institucion_participacion").addClass("error-iptx1");
		    return false;
		}else if(participante_nombre == ""){
		    jefform("#fc_participante_nombre").focus();
			jefform("#fc_participante_nombre").addClass("error-iptx1");
		    return false;
		}else if(participante_apellidos == ""){
		    jefform("#fc_participante_apellidos").focus();
			jefform("#fc_participante_apellidos").addClass("error-iptx1");
		    return false;
		}else if(participante_email == "" || !validacion_email.test(participante_email)){
		    jefform("#fc_participante_email").focus();
			jefform("#fc_participante_email").addClass("error-iptx1");
		    return false;
		}else if(participante_cargo == ""){
		    jefform("#fc_participante_cargo").focus();
			jefform("#fc_participante_cargo").addClass("error-iptx1");
		    return false;
		}else if(participante_participacion == ""){
		    jefform("#fc_participante_participacion").focus();
			jefform("#fc_participante_participacion").addClass("error-iptx1");
		    return false;
		}else {
			jefform('.imagen').removeClass('ocultar');
			var datos = 'institucion_nombre='+ institucion_nombre + 
						'&institucion_futuro='+ institucion_futuro + 
						'&institucion_objetivos='+ institucion_objetivos + 
						'&institucion_descripcion='+ institucion_descripcion + 
						'&institucion_email='+ institucion_email + 
						'&institucion_participacion='+ institucion_participacion + 
						'&participante_nombre='+ participante_nombre + 
						'&participante_apellidos='+ participante_apellidos + 
						'&participante_email='+ participante_email + 
						'&participante_cargo='+ participante_cargo +
						'&participante_participacion='+ participante_participacion;
			jefform.ajax({
	    		type: "POST",
	    		url: "procesos/proc-inscripcion-japon-envio.php",
	    		data: datos,
	    		success: function() {
					jefform('.imagen').hide();
					jefform('.contac_msj').slideUp(1500).show();
					jefform('form').slideUp(1500).show;
					jefform('#msj_enviado').slideDown(2000).show();
	    		},
				error: function() {
					jefform('.imagen').hide();
					jefform('#msj_enviado').slideDown(1000).show();				
				}
	   		});
	 		return false;	
		}
	});
});