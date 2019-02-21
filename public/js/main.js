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

// CONTAR CARACTERES PASO 2
function contar1() { 
    var max = "1000"; 
    var cadena = document.getElementById("resumenPro").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorUno").value = max-longitud; 
    } else { 
      document.getElementById("resumenPro").value = cadena.substr(0, max);
    } 
}

function contar2() { 
    var max = "2000"; 
    var cadena = document.getElementById("palabrasClave").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorDos").value = max-longitud; 
    } else { 
      document.getElementById("palabrasClave").value = cadena.substr(0, max);
    } 
}

function contar3() { 
    var max = "2000"; 
    var cadena = document.getElementById("planteamiento").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorTres").value = max-longitud; 
    } else { 
      document.getElementById("planteamiento").value = cadena.substr(0, max);
    } 
}

function contar4() { 
    var max = "2000"; 
    var cadena = document.getElementById("justificacion").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorCuatro").value = max-longitud; 
    } else { 
      document.getElementById("justificacion").value = cadena.substr(0, max);
    } 
}

function contar5() { 
    var max = "2000"; 
    var cadena = document.getElementById("ObjGen").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorCinco").value = max-longitud; 
    } else { 
      document.getElementById("ObjGen").value = cadena.substr(0, max);
    } 
}

function contar6() { 
    var max = "2000"; 
    var cadena = document.getElementById("ObjEsp").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorSeis").value = max-longitud; 
    } else { 
      document.getElementById("ObjEsp").value = cadena.substr(0, max);
    } 
}

function contar7() { 
    var max = "2000"; 
    var cadena = document.getElementById("metodologia").value; 
    var longitud = cadena.length; 

    if(longitud <= max) { 
      document.getElementById("contadorSiete").value = max-longitud; 
    } else { 
      document.getElementById("metodologia").value = cadena.substr(0, max);
    } 
}

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
            $(wrapper).append('<div class="removeMe"><table class="table"><tbody id="addItems1"><tr><td><select name="FEConcep[]" id=""><option value="">Seleccionar concepto</option>'+concepto+'</select></td><td><input type="text" name="FEDesc[]" placeholder="Descripción"></td><td><input type="tel" pattern="^([0-9.]{1,2})*$" name="FETotal[]" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)"></td><th>Eliminar items <button class="remove-date add minus" id="delete">-</button></th></tr></tbody></table></div>'); //add input box
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
            $(wrapper).append('<div class="removeMeCO"><div class="row"><div class="col-sm"><input type="text" name="nombreInvestigadorCO[]" placeholder="Nombre(s) y apellido(s) del Co-Investigador"></div><div class="col-sm"><input type="text" name="urlCvLACCO[]" placeholder="Enlace CvLAC"></div></div><div class="row"><div class="col-sm"><input type="text" name="urlORCIDCO[]" placeholder="Enlace ORCID"></div><div class="col-sm"><input type="text" name="urlGooAcaCO[]" placeholder="Enlace Google Académico"></div></div><div class="row"><div class="col-sm"><select name="divisionCOI[]" id=""><option value="">Selecciona una división</option>'+division+'</select></div><div class="col-sm"><select name="facultadCOI[]" id=""><option value="">Selecciona una facultad</option>'+facultad+'</select></div><div class="col-sm"><select name="programaCOI[]" id=""><option value="">Selecciona un programa</option>'+programa+'</select></div></div><div class="row"><div class="col-sm"><select name="lineaActivaCOI[]" id=""><option value="">Selecciona una línea activa</option>'+lineaActiva+'</select></div><div class="col-sm"><select name="camposAccionCOI[]" id=""><option value="">Seleccionar un campo de acción</option>'+campoAccion+'</select></div><div class="col-sm"><select name="gInvestigacionCOI[]" id=""><option value="">Seleccionar un grupo de investigación</option>'+gInvestigacion+'</select></div></div><div class="row"><div class="col-sm"><input type="text" name="esfalafonCOI[]" placeholder="Escalafón"></div><div class="col-sm"><input type="text" name="hxmCOI[]" placeholder="Horas por mes"></div><div class="col-sm"><input type="tel" name="thCOI[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total horas en pesos ($)"></div></div><div style="text-align:right"><b>Eliminar Co-Investigador</b> <button class="remove-dateCO add minus" id="delete">-</button></div><hr></div>'); //add input box
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
            $(wrapper).append('<div class="removeMeCE-A"><table class="table"><tbody><tr><td><input type="text" name="nomInvesCE[]" pattern="[a-zA-Z ñÑáéíóúÁÉÍÓÚ]{3,50}" maxlength="50" placeholder="Nombres completos"></td><td><input type="text" name="escalafonCE[]" placeholder="Escalafón"></td><td><input type="text" name="HxMesCE[]" placeholder="Horas por mes"></td><td><input type="tel" name="TotalHCE[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)"></td><td>Eliminar item <button class="remove-dateCE-A add minus" id="delete">-</button></td></tr></tbody></table></div>'); //add input box
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
            $(wrapper).append('<div class="removeMeCE-B"><table class="table"><tbody id="addItems1"><tr><td><select name="CEConcep[]" id=""><option value="">Seleccionar concepto</option>'+concepto+'</select></td><td><input type="text" name="CEDesc[]" placeholder="Descripción"></td><td><input type="tel" name="CETotal[]" pattern="^([0-9.]{1,2})*$" onkeyup="format(this)" onchange="format(this)" placeholder="Total en pesos ($)"></td><th>Eliminar items <button class="remove-dateCE-B add minus" id="delete">-</button></th></tr></tbody></table></div>'); //add input box
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
            $(wrapper).append('<div class="removeMeCAL"><table class="table"><tbody id="addItems1"><tr><td><input type="text" name="actividad[]" placeholder="Nombre de la actividad"></td><td><input type="date" name="FIni[]"></td><td><input type="date" name="FFIn[]"></td><th>Eliminar items <button class="remove-dateCAL add minus" id="delete">-</button></th></tr></tbody></table></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-dateCAL", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMeCAL').remove(); x--;
    })
});

// FUNCIÓN PARA FORMATO MILES ($)
function format(input){
    var num = input.value.replace(/\./g,'');
    if(!isNaN(num)){
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/,'');
        input.value = num;
    }else{
        // alert('Solo se permiten numeros');
        input.value = input.value.replace(/[^\d\.]*/g,'');
    }
}

//FUNCIÓN CLICK EN BTN - PROGRESS BAR
function progressBar(){
    document.getElementById("enviar").innerHTML = "<div class='modals'><div class='contentModal'><div class='progresoBarra'><div class='cajaProgressBar'><div class='progress_container'><h3>Enviando...</h3><div class='progress progress-danger progress-striped active'><div class='bar' style='width: 100%'></div></div></div></div></div></div></div>";
}

//CERRAR MODAL
$(document).ready(function(){
    $("#cerrarModal").on( "click", function() {   
        $('#modals').toggle();
    });
});