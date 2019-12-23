$(document).ready(function(){


$('#slMinistro').select2({
      language: "es",
      multiple: true, //multiselect
      placeholder:  'Redactor, Integrante1,Integrante2',
      allowClear: true, //permite X para eliminar seleccoin
      dropdownParent: $('#ingresaoficio'), //Para no salirse del modal
      maximumSelectionLength: 3, //maximo de seleccion
      placeholder: 'Redactor, Integrante1,Integrante2',
          ajax: {
                  url: 'select2ministros.php',
                  dataType: 'json',
                 processResults: function (data) {
                      return {
                        results: $.map(data, function(obj) {
                          return { id: obj.nombre, text: obj.nombre };
                        })
                      };
                    }
              },


    });

$("#slMinistro").on("select2:select", function (evt) { //para mantener orden de seleccion y luego volcarlo a la BBDD
  var element = evt.params.data.element;
  var $element = $(element);
  
  $element.detach();
  $(this).append($element);
  $(this).trigger("change");
});


   

$("#boton").on("click", function(){
               alert ($('#slMinistro').val());
               
               });



//$('select').selectpicker();

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
            var id = $("#id").val();
            var erit = $("input#erit").val();
            var eanio = $("#edatepicker2").val();
            var eslMinistro = $("select#eslMinistro").val();
            var emateria = $("select#emateria").val();
            var esubmateria = $("select#submateria").val();

           //var einput = $("#einput")prop(files)[0];
            alertify.success(einput);


                        $.ajax({                        
                            data: {
                                id:id,
                                erit:erit,
                                eanio:eanio,
                                eslMinistro:eslMinistro,
                                emateria:emateria,
                                esubmateria:esubmateria,
                                einput:einput,
                            },
                            url:"edsentencia.php",
                            type:"POST",
                            contentType: false,
                            procesData: false,       
                            
                            success: function(data)             
                            {
                               alertify.success(data);
                            }

                        });       


    });


$('#btnedtmin').on('click', function(e) {
            e.preventDefault(); 
           
            var id = $("#id").val();
            var edministro = $("input#edministro").val();
            
            // alert(id);
            // alert(edministro);


         $.ajax({                        
                    data: {id:id,edministro:edministro},
                    url:"edministro.php",
                    type:"POST",
                    // contentType: false,
                    // procesData: false,       
                    
                    success: function(data)             
                    {
                       //$('#confirm-update').modal('hide');
                       var msg = alertify.success(data);
                       msg.delay(1).setContent(data);
                       setTimeout(function() {$('#confirm-update').modal('hide');}, 1000);
                       
                    }

                });       


    });

  

//$("div.bottom").addClass("container");




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



function datosEditar(id,rit,anio){
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
 

function ministroEditar(id,edministro){

  $('#id').attr('value', id).change();
  $('#edministro').attr('value', edministro).change();
           
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



