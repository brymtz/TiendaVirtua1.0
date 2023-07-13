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
		<img class="izquierda" src="../images/Producto8.jpg" >
<aside>SILLA GAMER HV-GC901 EN VARIOS COLORES

	<br>
    <br>		
    
Base de aluminio de 5 bazos acabado en negro con ruedas.<br>
Estructura compuesta de dos elementos (1+1).<br>
Elemento 1: Silla con bastidor y mecanismo.<br>
Elemento 2: Tapizado intercambiable disponibles en varios materiales con banda flexible.<br>
Respaldo de contacto permanente.<br>
Altura del asiento de 450-620 mm.<br>
Regulación de peso.<br>
Ajuste de la profundidad e inclinación del asiento.<br>
Ajuste de altura del respaldo.<br>
10 años de garantía.
</aside>            
				<div class="reset"></div>
				</div>
    </body>
</html> 
