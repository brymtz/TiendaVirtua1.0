<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: application/json');
include 'conexion1.php';
$op=$_POST['op'];
if($op===null)
{
    echo "Error";
}
else{
switch($op)
{
        case 'insertarUsuario':
            header('Content-Type: application/json');
            $nombre=$_POST['NOM_USU'];
            $clave=$_POST['CLAVE_USU'];
            $sqlInsert="INSERT INTO usuarios(NOM_USU,CLAVE_USU) VALUES ('$nombre','$clave')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            echo json_encode("Usuario creado de manera exitosa");
           
            }
            else
            {
            echo "Error:".$sqlInsert."<br>".$mysqli->error;
            echo  $sqlInsert;
            }
            $mysqli->close();
        break;
        
          
}
}

?>