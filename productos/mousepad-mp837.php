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
		<img class="izquierda" src="../images/Producto7.jpg" >
<aside>MOUSE GAMING ÓPTICO REGULABLE HV-MS801
	<br>
    <br>		
    
Materiales:	Fibra, Gel, Caucho<br>
Peso:	140 g<br>
Ancho:	195 mm<br>
Profundidad:	225 mm<br>
Grosor:	2,2 cm<br>
Descansa muñecas: Si<br>	
Base antiderrapante: Si	<br>
Diseño confortable: Si<br>		
Coloración de superficie: Rojo y Negro<br>	
Color del producto:	Negro<br>
Lavable: Si	<br>
</aside>            
				<div class="reset"></div>
				</div>
    </body>
</html>    