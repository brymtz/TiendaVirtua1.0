<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable = no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <title>Nosotros</title>
    <link rel=StyleSheet href="../../css/nosotros.css" typr="text/css">
   
    
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
            <br><br>
        <?php
         echo "Bienvenido/a ";
         echo $_SESSION['nom'];
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
        <main id="page">
            <header id="header">
                <h1>Quienes Somos</h1>
            </header>
            <section id="wrapper">
                <div class="container">
                    <div id="columns_inner">
                        <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
                            <section id="main">
                                <section id="content" class="page-content page-cms page-cms-4">
                                    <p style="text-align: justify;">
                                    <span style="font-family:'times new roman', times;font-size:12pt;">
                                        <strong>FK Gamer</strong>
                                        ,empresa dedicadas a la venta de productos y servicios informáticos con los 
                                        más altos estándares de calidad a precios muy bajos, nuestra 
                                        empresa iniciada en el año 2006 nos ha dado hasta ahora más de 14 
                                        años de experiencia en el mercado Ecuatoriano con lo cual podemos 
                                        contar con una atención al cliente muy personalizada; atendiendo 
                                        las necesidades de los Ecuatorianos, ofreciéndoles acceso a 
                                        tecnología de punta, contamos con las mejores marcas del mercado 
                                        internacional brindado de esta manera un producto y servicio de 
                                        excelencia y con garantía real.
                                    </span>
                                    </p>
                                    <p></p>
                                    <p></p>
                                    <p style="text-align: center;">
                                        <span style="font-family: 'Times New Roman', Times, serif; font-size: 12pt;">
                                        <strong>Nuestra Misión</strong>
                                        </span>
                                    </p>
                                    <p>
                                    <img src="https://compunixec.com/wp-content/uploads/2018/03/MISION_au10vx-300x220.jpg">
                                    </p>
                                    <p style="text-align: justify;">
                                        <span style="font-family: 'Times New Roman'; font-size: 12pt;">
                                            Ofrecer tecnología de punta a precios muy bajos, brindarles a nuestros 
                                            clientes una atención eficaz y personalizada y Comercializar, partes y 
                                            piezas de equipos de computación y soluciones en informática, comunicación 
                                            y entretenimiento etc, para satisfacer las necesidades del mercado 
                                            nacional, con marcas reconocidas por su prestigio mundial, brindando 
                                            productos con garantías reales y asesoría personalizada.
                                        </span>
                                    </p>
                                    <p></p>
                                    <p></p>
                                    <p style="text-align: center;">
                                        <span style="font-family: 'Times New Roman', Times, serif; font-size: 12pt;">
                                        <strong>Nuestra Visión</strong>
                                        </span>
                                    </p>
                                    <p>
                                    <img src="https://compunixec.com/wp-content/uploads/2018/03/Vision_xhnu5d-300x201.jpg">
                                    </p>
                                    <p style="text-align: justify;">
                                        <span style="font-family: 'Times New Roman'; font-size: 12pt;">
                                            Ser una empresa lider en distribución a nivel nacional de productos 
                                            tecnológicos, brindar servicios con excelencia, enseñar y ser responsables 
                                            en nuestras labores de esta manera seguir mejorando cada día por el 
                                            progreso de nuestro país!.
                                        </span>
                                    </p>

                                </section>
                            </section>

                        </div>
                    </div>
                </div>
            </section>
        </main>
    
    </body>

</html>