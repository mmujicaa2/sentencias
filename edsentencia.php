<?php 
//var_dump($_POST);

 
 $id=$_POST['id'];
 //$erit= $_POST['erit'];
 //$eanio= $_POST['eanio'];
 $eredactor= $_POST['eredactor'];
 $eintegrante1= $_POST['eintegrante1'];
 $eintegrante2= $_POST['eintegrante2'];
 $emateria=$_POST['emateria'];
 $esubmateria=$_POST['esubmateria'];
 $eestado=$_POST['eestado'];



if ($_POST['id']) {

				
				include_once('conexion/db.php');
        
        
    if ($_FILES['einput']['name'] !="") {
        $nombredoc=$_FILES['einput']['name'];
        $directorio = 'documentos/';
        $tempdoc=$_FILES['einput']['tmp_name'];
        $prefijodoc=date("d.m.y-");

        $finaldoc=$directorio.$prefijodoc.$nombredoc;
        
        //move_uploaded_file($tempdoc, $directorio.$prefijodoc.$nombredoc);
        move_uploaded_file($tempdoc, $finaldoc);
          $qedita="UPDATE sentencia set 
          
          ministro1='$eredactor',
          ministro2='$eintegrante1',
          ministro3='$eintegrante2',
          materia='$emateria',
          submateria='$esubmateria',
          estado='$eestado',
          documento='$prefijodoc$nombredoc'
          where id_oficio=$id";

          echo $qedita;
          echo "con subir archivo";

        }// fin del if    

        else{
          $qedita="UPDATE sentencia set 
          
          ministro1='$eredactor',
          ministro2='$eintegrante1',
          ministro3='$eintegrante2',
          materia='$emateria',
          submateria='$esubmateria',
          estado='$eestado'
          where id_oficio=$id";

          echo $qedita;
          echo "sin subir archivo";
        }
        


        if(mysqli_query($conn,$qedita)){
                echo "Actualizado OK";
                header("Location:mant_sentencias.php");
              }
        else{
               echo "Falló edicion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
               header("Location:mant_sentencias.php");
            }

} //fin isste id
else
{
    echo "no entra a al if";
   // header("Location:mant_sentencias.php");
}
      
 ?>

