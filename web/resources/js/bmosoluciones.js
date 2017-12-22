jQuery(document).ready(function(){
	    	jQuery(".selectAvatar").click(function(){
	
	    		var avatarName = jQuery(this).attr("avatarName");

	    		// se crea una cookie para despues procesarla en cuando el usuario lo elije
	    		document.cookie = "cookieAvatarName="+avatarName;
	    		
	    		jQuery("#usuarios-usuario_imagen_1").val(avatarName);

	    		jQuery("#avatarSeleccionado").html("<img src='"+this.src+"' height='200' width='200' >");

	    		jQuery("#divboton").show();
	    		
	        });
    	});