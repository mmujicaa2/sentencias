<?php 
 

      if ($_FILES['input-b2']) {

         include_once('conexion/db.php');
        $rit= $_POST['rit'];
        $anio= $_POST['anio'];
        $ministro=$_POST['slMinistro'];
        $materia=$_POST['materia'];
        $submateria=$_POST['submateria'];
        //$documento= $_POST['input-b2'];

        //Subir archivo a carpeta
        $directorio = 'documentos/';
        $nombredoc=$_FILES['input-b2']['name'];
        $tempdoc=$_FILES['input-b2']['tmp_name'];
        $prefijodoc=date("d.m.y-");

            if(move_uploaded_file($tempdoc, $directorio.$prefijodoc.$nombredoc))
                    {
                          $qinserta="INSERT INTO sentencia (rit,anio,ministro1,ministro2,ministro3,materia,submateria,documento) 
                        VALUES('$rit','$anio','$ministro[0]','$ministro[1]','$ministro[2]','$materia','$submateria','$prefijodoc$nombredoc')";
                            
                            //echo $qinserta;

                        echo $result=mysqli_query($conn,$qinserta);

                    }
                   
      }
    	
 ?>




$('#enviar').click(function(){
        rit=$('#rit').val();
        anio=$('#anio').val();
        slMinistro=$('#slMinistro').val();
        materia=$('#materia').val();
        submateria=$('#submateria').val();
        input-b2=$('#input-b2').val();
        subeDatos(rit, anio,slMministro,materia,submateria,input-b2);
    });




function subeDatos(rit, anio,slMinistro,materia,submateria,input-b2){
//alert('subiendo datos');
cadena="rit" + rit +
        "$anio" + anio +
        "$slMinistro" + slMinistro +
        "$materia" + materia +
        "$submateria" + submateria +
        "$input-b2" + input-b2 ;

    $.ajax({
        type: "POST",
        url: "ingsentencia.php",
        data: cadena,
        success: function(r){
            if(r==1){
                //$("#tabladatos").load('../indexdt.php');
                alertify.success("Datos agregados correctamente");
            }else{
                alertify.error("fallo ingreso de datos");
            }
        }

    });

}


