$(document).ready(function(){
 	
    
$('select').selectpicker();

$('#datepicker').datepicker({
 	language: 'es',
 	format: 'dd-mm-yyyy',
 	todayHighlight: true,
    autoclose: true
     });

$("#datepicker2").datepicker({
    format: "yyyy",
    //viewMode: 'years', 
    minViewMode: 2,
    maxViewMode: 2,
    autoclose: true,
});



$('#enviar').click(function(){
	$.post( $("#ffolio").attr("action"),
	$("#ffolio :input").serializeArray(),
	function(info){ 
		alert('insercion ok');
  		});
	limpiainput();

	});



$('.modal').on('hidden.bs.modal', function(){//limpia input  cuando cierra modal
    $(this).find('form')[0].reset();
     location.reload();
});


$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    
});


 $("#materia").on("change", function(){
  var materia = $("select#materia").val();
     if (materia != "" ) {
        $.post("buscarsubmateria.php", {bmateria: materia}, function(mensaje) {
            $("#submateria").html(mensaje);
         }); 
     } 
});

//Compribar si se sleecionaron los 3 ministros, no terminado, revisar
$('#select').on("change", function(){
 alert('You must select at least 3 option.');
if ($('#select').val().length < 3) {
    alert('You must select at least 3 option.');
}
});


//test para ver si se almacenan los 3 ministros en variablea a enviar por form
/*
$('#slMinistro').on("change", function(){
    console.log('aaazz');
if ($('#slMinistro[0]').val()) {
    alert(' el select 1 tiene dato');
}
if ($('#slMinistro[1]').val()) {
    alert(' el select 2 tiene  dato');
}
if ($('#slMinistro[2]').val()) {
    alert(' el select 3 tiene  dato');

}
});

*/






});//fin



//funciones

function limpiainput(){//Limpia inputs del modal de ingreso 
	$("#ffolio :input").each(function(){
		$(this).val('');
	});
}

function selectMinistro(){
 $.post("buscarministo.php", {bmateria: materia}, function(mensaje) {
            $("#submateria").html(mensaje);
         }); 
}





