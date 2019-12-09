<?php 
// var_dump($_POST);
 
 $id=$_POST['id'];
 $edministro= $_POST['edministro'];
 

include_once('conexion/db.php');

if ($_POST['id']) {
      $qedita="UPDATE ministro set nombre_ministro='$edministro' where id_ministro=$id";

        if(mysqli_query($conn,$qedita)){
                   // header("Location:mant_ministros.php");
          echo "Ministro actualizado";
          
                  
              }
        else{
                echo "Falló edición";
            }

} 
      

 ?>

