<?php 
        include_once('conexion/db.php');

        $materia= $_POST['nmateria'];
        
        $qinserta="INSERT INTO materia (materia) VALUES('$materia')";
                
                echo $qinserta;

            if(mysqli_query($conn,$qinserta)){
                    header("Location:mant_materias.php");
                }
            else{
                    echo "Falló insercion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
                }
    	
 ?>

