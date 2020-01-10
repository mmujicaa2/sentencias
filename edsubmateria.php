<?php 
// var_dump($_POST);
 
 $id=$_POST['id'];
 $submateria= $_POST['edsubmateria'];
 

include_once('conexion/db.php');

if ($_POST['id']) {
      $qedita="UPDATE materia set submateria='$submateria' where id_materia=$id";

        if(mysqli_query($conn,$qedita)){
                   // header("Location:mant_ministros.php");
          echo "Submateria Actualizada";

                  
              }
        else{
                echo "Falló edición de submateria";
            }

} 
      

 ?>

