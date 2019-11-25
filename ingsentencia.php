<?php 
 


      if ($_FILES['input-b2']) {

         include_once('conexion/db.php');
        $rit= $_POST['rit'];
        $anio= $_POST['anio'];
        $ministro=$_POST['slMinistro'];
        $materia=$_POST['materia'];
        $submateria=$_POST['submateria'];
        //$documento= $_POST['input-b2'];

        //Subir archivo a carpeta
        $directorio = 'documentos/';
        $nombredoc=$_FILES['input-b2']['name'];
        $tempdoc=$_FILES['input-b2']['tmp_name'];
        $prefijodoc=date("d.m.y-");

            if(move_uploaded_file($tempdoc, $directorio.$prefijodoc.$nombredoc))
                    {
                          $qinserta="INSERT INTO sentencia (rit,anio,ministro1,ministro2,ministro3,materia,submateria,documento) 
                        VALUES('$rit','$anio','$ministro[0]','$ministro[1]','$ministro[2]','$materia','$submateria','$prefijodoc$nombredoc')";
                            
                            //echo $qinserta;

                        if(mysqli_query($conn,$qinserta)){
                                header("Location:indexdt.php");
                            }
                            else{
                                echo "Falló insercion, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl";
                            }

                    }
                    else
                    {
                      echo 'Error en la carga de archivo, intentelo denuevo o contactese con el Webmaster mmujica@pjud.cl';
                      header("Location:indexdt.php");
                    }
      }
    	
 ?>

