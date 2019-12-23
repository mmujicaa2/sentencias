<?php 
 
include_once('conexion/db.php');
        
if(isset($_GET['idfolio'])){
        $id=$_GET['idfolio'];

           $qelimina="DELETE from sentencia where id_oficio='$id'";
           echo $qelimina;
                if(mysqli_query($conn,$qelimina)){
                        header("Location:mant_sentencias.php");
                    }
            
                else{
                        echo "Falló ,contactese con el Webmaster mmujica@pjud.cl";
                    }

                    
        }
      
    	
 ?>

