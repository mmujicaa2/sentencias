<?php 
 //var_dump($_POST);
 
 $materia=$_POST['materia'];
 $submateria= $_POST['submateria'];
 $oldsubmateria= $_POST['oldsubmateria'];

include_once('conexion/db.php');

if ($_POST['materia']) {
      $qedita="UPDATE materia set submateria='$submateria' where materia='$materia' and submateria='$oldsubmateria' ";
      //echo $qedita;
        if(mysqli_query($conn,$qedita)){
                   // header("Location:mant_ministros.php");
          echo "Submateria Actualizada";

                  
              }
        else{
                echo "Falló edición de submateria";
            }

} 
      

 ?>

