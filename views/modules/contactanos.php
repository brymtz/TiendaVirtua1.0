<html>
<head>
<meta charset="UTF-8">
    <title>Contactos</title>
    <link rel=StyleSheet href="../../css/contactanos.css" typr="text/css">
    <link rel=StyleSheet href="../../css/template.css" typr="text/css">
    <link rel=StyleSheet href="bootstrap/css/bootstrap.min.css" typr="text/css">
    
</head>

<body>
<header>
        <h1><img id="Logo1" img src="../../images/Logo1.jpg" width="100" height="100"></h1>
</header> 
<?php
session_start();
            require_once("../../models/isLogin.php");

            if($estado){         
                   
                    ?>
                        <nav>
                        <ul>
                        <li> <a href="inicio.php"> Inicio</a> </li>
                        <li> <a href="nosotros.php"> Nosotros</a> </li>
                       
                        <li> <a href="contactanos.php"> Contactenos</a> </li>
                        <li> <a href="compras.php"> Compras</a> </li>
                        <li> <a href="../../models/logout.php"> Cerrar Sesión</a> </li>
                    </ul>
                </nav>
                <br>
        <?php
         echo "Bienvenido/a ";
         echo $_SESSION['nom'];
         ?>

         <br><br>
         <?php
            }else{
            
                ?>
                    <nav>
                    <ul>
                    <li> <a href="inicio.php"> Inicio</a> </li>
                    <li> <a href="nosotros.php"> Nosotros</a> </li>
                   
                    <li> <a href="contactanos.php"> Contactenos</a> </li>
                    
                    <li> <a href="login.php"> Iniciar Sesión</a> </li>
                </ul>
            </nav>

                <?php
                
            }
        ?>
    <section>

        <table alight="center"> 
            <tr>
                <th colspan="4" alight="center"> SITIOS OFICIALES </th>
            </tr>

            <tr>
                <td rowspan="3"><img src="https://images.assetsdelivery.com/compings_v2/redlinevector/redlinevector1809/redlinevector180900031.jpg"></td>
                <td><a href="http://www.facebook.com/" target="_blank"><img src="../../images/logo_facebook.png" width=32 height=32  /></a> FKGAMER</td>
                <td><a href="http://www.gmail.com/" target="_blank"><img alt="correo" src="../../images/correo.png" width=32 height=32  /></a> fkgamer@gamer.com </td>
                 <td><a href="https://www.google.com/maps/place/Parroquia+La+Merced,+Ambato/@-1.2269399,-78.7426428,11z/data=!4m8!1m2!2m1!1sgoogle+maps!3m4!1s0x91d381bc7458fce1:0xf97d76c9001375b4!8m2!3d-1.2330962!4d-78.6200129" target="_blank"><img alt="visitanos" src="../../images/ubicacion.png" width=32 height=32  /></a> Av. La Merced</td>
            </tr>                                           
        </table>
    </section> 

</body>


</html>

