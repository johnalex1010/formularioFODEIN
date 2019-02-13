//FUNCIÓN DE ANIMACIÖN DE FORMULARIOS
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which will animate
var animating; //flag to prevent quick multi-click glitches
//btn siguiente
$(".btn-next").click(function(){
	if(animating) return false;
	  animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
	});
});
//btn atras
$(".btn-prev").click(function() {
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
	});
});

//ADD REMOVE PASO 5
$(document).ready(function() {
    var max_fields      = 6; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="removeMe"><table class="table"><tbody id="addItems1"><tr><td><select name="[]" id=""><option value="">Seleccionar concepto</option>'+concepto+'</select></td><td><input type="text" name="[]" placeholder="Descripción"></td><td><input type="text" name="[]" placeholder="Total en pesos ($)"></td><th>Eliminar items <button class="remove-date add minus" id="delete">-</button></th></tr></tbody></table></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-date", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMe').remove(); x--;
    })
});

//ADD REMOVE PASO 6
$(document).ready(function() {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrapCO"); //Fields wrapper
    var add_button      = $(".add_field_buttonCO"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="removeMeCO"><div class="row"><div class="col-sm"><input type="text" name="" placeholder="Nombre(s) y apellido(s) del Co-Investigador"></div><div class="col-sm"><input type="text" name="" placeholder="Enlace CvLAC"></div></div><div class="row"><div class="col-sm"><input type="text" name="" placeholder="Enlace ORCID"></div><div class="col-sm"><input type="text" name="" placeholder="Enlace Google Académico"></div></div><div class="row"><div class="col-sm"><select name="" id=""><option value="">Selecciona una división</option>'+division+'</select></div><div class="col-sm"><select name="" id=""><option value="">Selecciona una facultad</option>'+facultad+'</select></div><div class="col-sm"><select name="" id=""><option value="">Selecciona un programa</option>'+programa+'</select></div></div><div class="row"><div class="col-sm"><select name="" id=""><option value="">Selecciona una línea activa</option>'+lineaActiva+'</select></div><div class="col-sm"><select name="" id=""><option value="">Seleccionar un campo de acción</option>'+campoAccion+'</select></div><div class="col-sm"><select name="" id=""><option value="">Seleccionar un grupo de investigación</option>'+gInvestigacion+'</select></div></div><div class="row"><div class="col-sm"><input type="text" name="" placeholder="Escalafón"></div><div class="col-sm"><input type="text" name="" placeholder="Horas por mes"></div><div class="col-sm"><input type="text" name="" placeholder="Total Horas en pesos ($)"></div></div><div style="text-align:right"><b>Eliminar Co-Investigador</b> <button class="remove-dateCO add minus" id="delete">-</button></div><hr></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-dateCO", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMeCO').remove(); x--;
    })
});

//ADD REMOVE PASO 7-A
$(document).ready(function() {
    var max_fields      = 4; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrapCE-A"); //Fields wrapper
    var add_button      = $(".add_field_buttonCE-A"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="removeMeCE-A"><table class="table"><tbody><tr><td><input type="text" placeholder="Nombres completos"></td><td><input type="text" placeholder="Escalafón"></td><td><input type="text" placeholder="Horas por mes"></td><td><input type="text" placeholder="Total Horas en pesos ($)"></td><td>Eliminar item <button class="remove-dateCE-A add minus" id="delete">-</button></td></tr></tbody></table></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-dateCE-A", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMeCE-A').remove(); x--;
    })
});

//ADD REMOVE PASO 7-B
$(document).ready(function() {
    var max_fields      = 9; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrapCE-B"); //Fields wrapper
    var add_button      = $(".add_field_buttonCE-B"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="removeMeCE-B"><table class="table"><tbody id="addItems1"><tr><td><select name="[]" id=""><option value="">Seleccionar concepto</option>'+concepto+'</select></td><td><input type="text" name="[]" placeholder="Descripción"></td><td><input type="text" name="[]" placeholder="Total en pesos ($)"></td><th>Eliminar items <button class="remove-dateCE-B add minus" id="delete">-</button></th></tr></tbody></table></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-dateCE-B", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMeCE-B').remove(); x--;
    })
});

//ADD REMOVE PASO 8
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrapCAL"); //Fields wrapper
    var add_button      = $(".add_field_buttonCAL"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="removeMeCAL"><table class="table"><tbody id="addItems1"><tr><td><input type="text" name="[]" placeholder="Actividad"></td><td><input type="date" name="[]" placeholder="Descripción"></td><td><input type="date" name="[]" placeholder="Total en pesos ($)"></td><th>Eliminar items <button class="remove-dateCAL add minus" id="delete">-</button></th></tr></tbody></table></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-dateCAL", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMeCAL').remove(); x--;
    })
});