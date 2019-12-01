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


$("#edatepicker2").datepicker({
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



/*

$('#enviar').click(function(){ //funcion mala!!!!
        rit=$('#rit').val();
        anio=$('#anio').val();
        slMinistro=$('#slMinistro').val();
        materia=$('#materia').val();
        submateria=$('#submateria').val();
        input-b2=$('#input-b2').val();
        subeDatos(rit, anio,slMministro,materia,submateria,input-b2);
    });
*/






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


/* Funcion para obtener el id para editar vale hongo
$('.edid').on("click", function(id){
id = $(".edid").attr("data-href");
alert(id);

})
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


function datosEditar(id){
//alert(id); test para mostrar el id  de la bbdd
 $('#tabladatos tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');

  var valores= new Array();
  i=0;

  $(this).find("td").each(function(){
                valores[i]=$(this).html();
                 i++; 
                 });
            
            $("#erit").val(valores[1]);
            $("#edatepicker2").val(valores[2]);
            //$("#eslMinistro").val(valores[5]);
            $('#eslMinistro').val('Marcelo Mujica').attr("selected", "selected");
            //$("#eslMinistro").selectmenu('refresh')

    });



}





