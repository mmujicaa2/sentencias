$(document).ready(function(){
	
	$('#btnfolio').click(function(){
		$('#modal').css("visibility","visible");
		$('#modal').modal();
	});


	
  filas_cebra('tbody tr:odd', 'impar'); 

  function filas_cebra(selector, clase){  
  jQuery(selector).removeClass(clase).addClass(clase);  
} 

$('#enviar').click(function(){
	$.post( $("#ffolio").attr("action"),
	$("#ffolio :input").serializeArray(),
	function(info){ 
		alert('insercion ok');
  		});
	limpiainput();

	});

 
$('#datepicker').datepicker({
 	todayBtn: 'linked',
 	language: 'es',
    autoclose: true
     });

$('#datepicker2').datepicker({
		todayBtn: 'linked',
		language: 'es',
		autoclose: true
        });

$("#datepicker3").datepicker( {
 	todayBtn: 'linked',
 	format: "yyyy",
    language: "es"
});


});//fin

//funciones

function limpiainput(){
	$("#ffolio :input").each(function(){
		$(this).val('');
	});
}


function buscar() {
    var textoBusqueda = $("input#filtrar").val();
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            //$("#resultadoBusqueda").html(mensaje);
            $("#resultadoBusqueda").text(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('');
        };
};


