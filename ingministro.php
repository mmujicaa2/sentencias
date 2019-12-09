<?php 
        include_once('conexion/db.php');

        $ministro= $_POST['nministro'];
        
        $qinserta="INSERT INTO ministro (nombre_ministro) VALUES('$ministro')";
                
                echo $qinserta;

            if(mysqli_query($conn,$qinserta)){
                    header("Location:mant_ministros.php");
                }
            else{
                    echo "Falló insercion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
                }
    	
 ?>

