<?php 

      if ($_FILES['input-b2']) {

         include_once('conexion/db.php');
        $rit= $_POST['rit'];
        $anio= $_POST['anio'];
        $redactor=$_POST['redactor'];
        $integrante1=$_POST['integrante1'];
        $integrante2=$_POST['integrante2'];
        //$ministro=$_POST['slMinistro'];
        $materia=$_POST['materia'];
        $submateria=$_POST['submateria'];
        $estado=$_POST['estado'];
        //$documento= $_POST['input-b2'];

        //Subir archivo a carpeta
        $directorio = 'documentos/';
        $nombredoc=$_FILES['input-b2']['name'];
        $tempdoc=$_FILES['input-b2']['tmp_name'];
        $prefijodoc=date("d.m.y-");

            if(move_uploaded_file($tempdoc, $directorio.$prefijodoc.$nombredoc))
                    {
                          $qinserta="INSERT INTO sentencia (rit,anio,ministro1,ministro2,ministro3,materia,submateria,estado,documento) 
                        VALUES('$rit','$anio','$redactor','$integrante1','$integrante2','$materia','$submateria','$estado','$prefijodoc$nombredoc')";
                            
                            //echo $qinserta;

                        if(mysqli_query($conn,$qinserta)){
                                header("Location:mant_sentencias.php");
                            }
                            else{
                                echo "Falló insercion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
                            }

                    }
                    else
                    {
                      echo 'Error en la carga de archivo, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl';
                      header("Location:mant_sentencias.php");
                    }
      }
    	
 ?>

