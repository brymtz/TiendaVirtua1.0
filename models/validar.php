<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","tienda");

$consulta="SELECT*FROM usuarios where NOM_USU='$usuario' and CLAVE_USU='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_fetch_array($resultado);

if(is_null($filas)){
    
    echo "<script>
               alert('Usuario o contraseña incorrecto');
               window.location= '../views/modules/login.php'
   </script>";
?>
<?php



    
}else{
    session_start();
    $_SESSION['nom'] = $filas['NOM_USU']; 
    
    header("location:../index.php");
    

}

mysqli_free_result($resultado);

mysqli_close($conexion);