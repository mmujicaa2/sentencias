<?php 
//var_dump($_POST);
include_once('conexion/db.php');
if ($_POST['id']) {

        $id=$_POST['id'];    
        $erit= $_POST['erit'];
        $eanio= $_POST['eanio'];
        $eministro=$_POST['eslMinistro'];
        $emateria=$_POST['emateria'];
        $esubmateria=$_POST['esubmateria'];
        
    if ($_FILES['einput-b2']) {
        $edocumento= $_POST['einput-b2'];
        $directorio = 'documentos/';
        $nombredoc=$_FILES['einput-b2']['name'];
        $tempdoc=$_FILES['einput-b2']['tmp_name'];
        $prefijodoc=date("d.m.y-");
        move_uploaded_file($tempdoc, $directorio.$prefijodoc.$nombredoc);
                 
          $qedita="UPDATE sentencia set 
          rit=$erit,
          anio=$eanio,
          ministro1='$ministro[0]',
          ministro2='$ministro[1]',
          ministro3='$ministro[2]',
          materia='$emateria',
          submateria='$esubmateria',
          documento='$edocumento'
          where id_oficio=$id";

          //echo $qedita;

        }// fin del if    

        else{
          $qedita="UPDATE sentencia set 
          rit=$erit,
          anio=$eanio,
          ministro1='$ministro[0]',
          ministro2='$ministro[1]',
          ministro3='$ministro[2]',
          materia='$emateria',
          submateria='$esubmateria',
          where id_oficio=$id";

          //echo $qedita;
        }
        
/*

        if(mysqli_query($conn,$qedita)){
                              //  header("Location:indexdt.php");
                            }
                            else{
                                echo "Falló edicion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
                            }
*/
} //fin isste id
else
{
    echo "vaiable id no seteada";
}

    	
 ?>

