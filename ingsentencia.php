<?php 
 include_once('conexion/db.php');
        $rit= $_POST['rit'];
        $anio= $_POST['anio'];
        $ministro=$_POST['slMinistro'];
        $materia=$_POST['materia'];
        $submateria=$_POST['submateria'];
        $documento= $_POST['input-b2'];


/*
        foreach ($_POST['slMinistro'] as $ministro)
{
        print "Ministro!!!! ..   $ministro<br/>";
}
*/


		$qinserta="INSERT INTO sentencia (rit,anio,ministro1,ministro2,ministro3,materia,submateria,documento) VALUES('$rit','$anio','$ministro[0]','$ministro[1]','$ministro[2]','$materia','$submateria','$documento')";

        //echo $qinserta;
        
        if(mysqli_query($conn,$qinserta)){
             header("Location:indexdt.php");
        }
        else{
            echo "Falló insercion";
            echo "<br>";
            echo $qinserta;
        }
    	
 ?>

