<html>
<head>
    <meta charset="UTF-8">
    <title>Game Shop</title>
    <link rel=StyleSheet href="../css/productos.css" typr="text/css">
</head>

    <body>

    <header>
        <h1><img id="Logo1" img src="../images/Logo1.jpg" width="100" height="100"></h1>
        </header> 
    	<?php
            session_start();
            require_once("../models/isLogin.php");

            if($estado){         
                   
                    ?>
                        <nav>
                        <ul>
                        <li> <a href="../views\modules\inicio.php"> Inicio</a> </li>
                        <li> <a href="../views\modules\nosotros.php"> Nosotros</a> </li>
                        
                        <li> <a href="../views\modules\contactanos.php"> Contactenos</a> </li>
                        <li> <a href="../views/modules/compras.php">Compras</a> </li>
                        
                        <br><br>
                        <li> <a href="../models\logout.php"> Cerrar sesión</a> </li>
                       
                    
                    </ul>
                </nav>
            <br><br>
        <?php
         echo "Bienvenido/a ";
         echo $_SESSION['nom'];
            }else{
            
                ?>
                    <nav>
                    <ul>
                    <li> <a href="../views\modules\inicio.php"> Inicio</a> </li>
                    <li> <a href="../views\modules\nosotros.php"> Nosotros</a> </li>
                    <li> <a href="../views\modules\contactanos.php"> Contactenos</a> </li>
                    <br><br>
                    <li> <a href="../views/modules/login.php"> Iniciar sesión</a> </li>
                   
                
                </ul>
            </nav>

                <?php
                
            }
        ?>
		<div class="noticia">
		<img class="izquierda" src="../images/Producto5.jpg" >
<aside>MOUSE GAMING ÓPTICO REGULABLE HV-MS801
	<br>
    <br>		
    
Altura: 115 mm<br>
Anchura: 72 mm<br>
Profundidad: 37 mm<br>
Peso: 82 g, sólo mouse<br>
Longitud de cable: 2,10 m<br>
Resolución: 200 – 2.500 dpi<br>
Sin suavizado/aceleración/filtros<br>
Aceleración máx.: >20 G2Pruebas realizadas sobre alfombrilla de mouse para juegos<br>
Velocidad máx.: >150 ips3Pruebas realizadas sobre alfombrilla de mouse para juegos<br>
Formato de datos USB: 16 bits/eje<br>
Velocidad de respuesta USB: 1000 Hz (1 ms)<br>
Microprocesador: 32 bits ARM</aside>            
				<div class="reset"></div>
				</div>
    </body>
</html>    