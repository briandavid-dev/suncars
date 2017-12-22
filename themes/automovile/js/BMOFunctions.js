
    jQuery(document).ready(function($){



   jQuery( "[name='tratamientoboton'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#infomarcion_tratamiento" );
                console.log(checked);
                
                if(checked){
                    container.hide();
                } else {
                    container.show();
                }
                
            });



        jQuery( "[name='historiamedicaboton'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#iformacion_historia" );
                console.log(checked);
                
                if(checked){
                    container.hide();
                } else {
                    container.show();
                }
                
            });


        jQuery( "[name='CitasMedicas[clinica_id]'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#informacion_calendario" );
                console.log(checked);
                
                if(checked==''){
                    container.hide();
                } else {
                    container.show();
                }
                
            });
        
        jQuery( "[name='CitasMedicas[historia_tension]'" ).click(function() {

            var checked = jQuery(this).val();
            var container = jQuery( "#informacion_tensi" );
            console.log(checked);
            
            if(checked==''){
                container.hide();
            } else {
                container.show();
            }
            
        });






	
	 
            jQuery( "[name='HistoriaMedica[historia_operado]'" ).click(function() {

            	var checked = jQuery(this).val();
            	var container = jQuery( "#informacion_operado" );
            	
            	if(checked==1){
            		container.show();
            	} else {
            		container.hide();
            	}
				
			});




            jQuery( "[name='HistoriaMedica[historia_fumar]'" ).click(function() {
                

                var checked = jQuery(this).val();

                var container = jQuery( "#informacion_fumar" );
                var containerno = jQuery( "#informacion_dejado_fumar" );
                
                if(checked==1){
                   
                    container.show();
                    containerno.hide();
                } else  if (checked==2){
                    container.hide();
                    containerno.show();
                } else {

                    container.hide();
                    containerno.hide();

                }
                
            });


            jQuery( "[name='HistoriaMedica[historia_bebidad]'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#informacion_bebidad" );
                
                if(checked==1){
                    container.show();
                } else {
                    container.hide();
                }
                
            });

            jQuery( "[name='HistoriaMedica[historia_tension]'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#informacion_tensi" );
                
                if(checked==1){
                    container.show();
                } else {
                    container.hide();
                }
                
            });


            jQuery( "[name='HistoriaMedica[historia_familia_tension]'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#informacion_tension" );
                
                if(checked==1){
                    container.show();
                } else {
                    container.hide();
                }
                
            });
            
            
          
             jQuery( "[name='HistoriaMedica[historia_familia_tension]'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#informacion_familia_tension" );
                
                if(checked==1){
                    container.show();
                } else {
                    container.hide();
                }
                
            });



             jQuery( "[name='HistoriaMedica[historia_alergia_medicamentos]'" ).click(function() {

                var checked = jQuery(this).val();
                var container = jQuery( "#informacion_alergia_medicamentos" );
                
                if(checked==1){
                    container.show();
                } else {
                    container.hide();
                }
                
            });


             
           
             
             
             

             
             
            
			
});
    
    /**
     * check, marca todas las casillas
     * se le pasa como parametro el name del atributo
     * @param name
     * @returns
     */
function checkAll(input,name){
   
	var countChekes = jQuery("[id='"+input+"']:checked").length;
	
	if(countChekes > 0){
		jQuery("[name='"+name+"']").prop('checked', true);
	} else {
		jQuery("[name='"+name+"']").prop('checked', false);
	}
	
} 






