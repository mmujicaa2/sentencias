<?php 
 
include_once('conexion/db.php');
        
if(isset($_GET['idministro'])){
        $id=$_GET['idministro'];

           $qelimina="DELETE from ministro where id_ministro='$id'";
           //echo $qelimina;
                if(mysqli_query($conn,$qelimina)){
                        header("Location:mant_ministros.php");
                    }
            
                else{
                        echo "Falló ,contactese con el Webmaster mmujica@pjud.cl";
                    }

                    
        }
      
    	
 ?>

