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


$('.modal').on('hidden.bs.modal', function(){//limpia input  cuando cierra modal
    $(this).find('form')[0].reset();
     location.reload();
});


 $("#materia").on("change", function(){
  var materia = $("select#materia").val();
     if (materia != "" ) {
        $.post("buscarsubmateria.php", {bmateria: materia}, function(mensaje) {
            $("#submateria").html(mensaje);
         }); 
     } 
});

 $("#emateria").on("change", function(){
  var emateria = $("select#emateria").val();
     if (emateria != "" ) {
        $.post("buscarsubmateria.php", {bmateria: emateria}, function(mensaje) {
            $("#esubmateria").html(mensaje);
         }); 
     } 
});




/*
$('#btneditar').on('click', function(e) {
        e.preventDefault();
        alert($('#id').val());
        var dataString = $('#efolio').serialize();
        console.log('Datos serializados: '+dataString);
    }); 

*/


$('#btneditar').on('click', function(e) {
            e.preventDefault();
            var id = $("input#id").val();
            var erit = $("input#erit").val();
            var eanio = $("#edatepicker2").val();
            var eslMinistro = $("select#eslMinistro").val();
            var emateria = $("#emateria").val();
            var esubmateria = $("select#submateria").val();
            var einput = $("#einput").val();


            if (id != "" ) {
                           
                        $.ajax({                        
                            method:"POST",                 
                            url:"edsentencia.php",
                            data: {id: id, erit: erit, eanio:eanio, eslMinistro:eslMinistro, emateria:emateria, esubmateria:esubmateria, einput:einput},
                            success: function(data)             
                            {
                                alertify.success(data);
                            }

                        });        
                    } 


    });


  


});//fin document.ready








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



function datosEditar(id,rit,anio,ministros,materia,submateria,sentencia){
    //alert(anio);
  $('#id').attr('value', id).change();
  $('#erit').attr('value', rit).change();
  $('#edatepicker2').attr('value', anio).change();
    
  /* Prueba alertify
          var a=$('#id').val();
          var b=$('#erit').val();
          var c=$('#edatepicker2').val();
          alertify.success(a+' '+b+' '+c);
           */
}
 






/*
$('#tabladatos tbody').on( 'click', 'tr', function () {
        //$(this).toggleClass('selected');

  var valores= new Array();
  i=0;

  $(this).find("td").each(function(){
                valores[i]=$(this).text();
                 i++; 
                 });
            //ocupar metodo attr value  porque metodo val(algo) no cambia el dom  solo el texto cTM!
            //$('#id').val(id).trigger('change');
            $('#id').attr('value', id).trigger('change');
            
            $('#id').attr('defaultvalue', id).trigger('change');
            $('#erit').attr('value',valores[1]).trigger('change');
            $("#edatepicker2").attr('value',valores[2]).trigger('change');
            //$("#eslMinistro").attr('value',valores[2]);
*/



