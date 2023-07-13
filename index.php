<html>
<head>
    <meta charset="UTF-8">
    <title>FK Gamer</title>
    <link rel=StyleSheet href="css/template.css" typr="text/css">
</head>

<body>
<header>
        <h1><img id="Logo1" img src="images/Logo1.jpg" width="100" height="100"></h1>
</header> 
<?php
            session_start();
            require_once("models/isLogin.php");

            if($estado){         
                   
                    ?>
                        <nav>
                        <ul>
                        <li> <a href="views\modules\inicio.php"> Inicio</a> </li>
                        <li> <a href="views\modules\nosotros.php"> Nosotros</a> </li>
                        
                        <li> <a href="views\modules\contactanos.php"> Contactenos</a> </li>
                        <li> <a href="views/modules/compras.php">Compras</a> </li>
                        
                        <li> <a href="models\logout.php"> Cerrar sesión</a> </li>
                       
                    
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
                    <li> <a href="views\modules\inicio.php"> Inicio</a> </li>
                    <li> <a href="views\modules\nosotros.php"> Nosotros</a> </li>
                    <li> <a href="views\modules\contactanos.php"> Contactenos</a> </li>
                    <li> <a href="views/modules/login.php"> Iniciar sesión</a> </li>
                   
                
                </ul>
            </nav>

                <?php
                
            }
        ?>
<header>
        <h1> ÚLTIMOS PRODUCTOS </h1>

</header>


<section>
    
    <br><br>

    <div class="container">
            <div class="col-3">
                <div class="card">
                    <img src="images/Producto1.jpg">
                    <p>AURICULAR GAMING HV-H2158U CONEXIÓN USB 7.1</p>
                    <br>
                    <a href="Productos/auricular-h2158u.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>


            <div class="col-3">
                <div class="card">
                    <img src="images/Producto4.jpg">
                    <p>MOUSE GAMING ÓPTICO REGULABLE HV-MS783</p>
                    <br>
                    <a href="Productos/mouse-ms783.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <img src="images/Producto7.jpg">
                    <p>MOUSE PAD GAMER GAMING HV-MP837</p>
                    <br>
                    <a href="Productos/mousepad-mp837.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <img src="images/Producto8.jpg">
                    <p>SILLA GAMER HV-GC901 EN VARIOS COLORES</p>
                    <br>
                    <a href="Productos/silla-gamer-gc901.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <img src="images/Producto9.jpg">
                    <p>TECLADO GAMING HV-KB417L RETROILUMINADO</p>
                    <br>
                    <a href="Productos/teclado-kb417l.php" class="button" alt="Button">Leer más</a>
                </div>
            </div>
        </div>
    
</section>

</body>

</html>