<?php 
 
include_once('conexion/db.php');
        
if(isset($_GET['submateria'])){
        $submateria=$_GET['submateria'];
        $materia=$_GET['materia'];

           $qelimina="DELETE from materia where submateria like '$submateria'";
           //echo $qelimina;
                if(mysqli_query($conn,$qelimina)){
                        //echo $qelimina;
                        //echo $materia;
                        header("Location:mant_submaterias.php?materia=$materia");
                    }
            
                else{
                        echo "Falló ,contactese con el Webmaster mmujica@pjud.cl";
                    }

                    
        }
      
    	
 ?>

