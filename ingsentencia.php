<?php 
 include_once('conexion/db.php');
        $rit= $_POST['rit'];
        $anio= $_POST['anio'];
        $ministro=$_POST['slMinistro'];
        $materia=$_POST['materia'];
        $submateria=$_POST['submateria'];
        //$documento= $_POST['input-b2'];

        $documento=$_FILES['input-b2']['name'];
        $tmpdoc=$_FILES['input-b2']['tmp_name'];
        $rutadocumentos="../documentos"."/".$documento;

        echo $tmpdoc;
    	
 ?>

