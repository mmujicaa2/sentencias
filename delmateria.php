<?php 
 
include_once('conexion/db.php');
        
if(isset($_GET['materia'])){
        $materia=$_GET['materia'];

           $qelimina="DELETE from materia where materia like '$materia'";
           //echo $qelimina;
                if(mysqli_query($conn,$qelimina)){
                        //echo $qelimina;
                        header("Location:mant_materias.php");
                    }
            
                else{
                        echo "Falló ,contactese con el Webmaster mmujica@pjud.cl";
                    }

                    
        }
      
    	
 ?>

