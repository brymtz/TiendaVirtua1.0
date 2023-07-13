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
		<img class="izquierda" src="../images/Producto9.jpg" >
<aside>TECLADO GAMING HV-KB417L RETROILUMINADO

	<br>
    <br>		
    
Longitud: 475 mm<br>
Anchura: 150 mm<br>
Altura: 22 mm<br>
Peso (sin cable): 1045 g<br>
Peso (con cable): 1145 g<br>
Longitud de cable de PC: 1,8 m<br>
Distancia real: 1,5 mm<br>
Fuerza de actuación: 45 g<br>
Recorrido total: 3,0 mm<br>
Dos perfiles de iluminación<br>
Tres perfiles de macros de teclas G
</aside>            
				<div class="reset"></div>
				</div>
    </body>
</html> 
