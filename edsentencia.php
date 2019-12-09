<?php 
var_dump($_POST);
echo "vardunmp----<br>"
 
 $id=$_POST['id'];
 $erit= $_POST['erit'];
 $eanio= $_POST['eanio'];
 $eministro=$_POST['eslMinistro'];
 $emateria=$_POST['emateria'];
 $esubmateria=$_POST['esubmateria'];
 $edocumento= $_FILES['einput'];

echo "edocumento es: ";
echo  $_FILES['einput']['name'];
echo  $_FILES['einput']['size'];
echo  $_FILES['einput']['temp_name'];
echo "---fin edocumento <br>";
 
 echo "el valor de ID es.....";
echo $id;
 echo ".....<br>";
 
 echo $erit;
 echo "<br>";
 
 echo $eanio;
 echo "<br>";
 
 echo $edocumento;
 echo "<br>";


echo $eministro[0];
echo "<br>";


include_once('conexion/db.php');

if ($_POST['id']) {

        
    if ($_FILES['einput']) {
        
        $directorio = 'documentos/';
        $nombredoc=$_FILES['einput']['name'];
        $tempdoc=$edocumento['tmp_name'];
        $prefijodoc=date("d.m.y-");
        $finaldoc=$directorio.$prefijodoc.$nombredoc;
        echo 'Documento final es: ';
        echo $finaldoc;
        echo "-----";

        //move_uploaded_file($tempdoc, $directorio.$prefijodoc.$nombredoc);
        move_uploaded_file($tempdoc, $finaldoc);
          $qedita="UPDATE sentencia set 
          rit=$erit,
          anio=$eanio,
          ministro1='$eministro[0]',
          ministro2='$eministro[1]',
          ministro3='$eministro[2]',
          materia='$emateria',
          submateria='$esubmateria',
          documento='$directorio.$prefijodoc.$nombredoc'
          where id_oficio=$id";

          echo $qedita;

        }// fin del if    

        else{
          $qedita="UPDATE sentencia set 
          rit=$erit,
          anio=$eanio,
          ministro1='$eministro[0]',
          ministro2='$eministro[1]',
          ministro3='$eministro[2]',
          materia='$emateria',
          submateria='$esubmateria',
          where id_oficio=$id";

          echo $qedita;
        }
        


        if(mysqli_query($conn,$qedita)){
                echo "actualizdao ok";
                        //  header("Location:indexdt.php");
              }
        else{
                echo "Falló edicion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
            }

} //fin isste id
else
{
    echo "no entra a al if";
}

      
 ?>

