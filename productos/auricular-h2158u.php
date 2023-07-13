<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable = no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
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
		<img class="izquierda" src="../images/Producto1.jpg" >
<aside>AURICULAR GAMING HAVIT HV-H2158U CONEXIÓN USB 7.1 
	<br>
	<br>		
				Tipo:Over Ear / Circumaurales<br>
				Conectividad:	Alámbrico<br>
				Cancelación de ruido:	NO<br>
				Peso:	260 grm<br>
				Colores:	Blanco, Negro<br>
				Autonomía de batería:	No tiene<br>
				Tipo de material:	Plástico<br>
				Componentes incluidos:	Audio (3,5 mm)<br>
				Tipo de contector:	Auxiliar jack 3.5mm<br>
				Respuesta de frequencia:	20Hz – 20Khz</aside>            
				<div class="reset"></div>
				</div>
    </body>
</html>    
