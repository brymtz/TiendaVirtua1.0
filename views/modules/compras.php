<?php
include '../../models/config.php';
include '../../models/conexion.php';
include 'carrito.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable = no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <title>Compras</title>
    <link rel=StyleSheet href="../../css/compras.css" typr="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1><img id="Logo1" img src="../../images/Logo1.jpg" width="100" height="100"></h1>
    </header>
    <?php
    
    require_once("../../models/isLogin.php");

    if ($estado) {

    ?>
        <nav>
            <ul>
                <li> <a href="inicio.php">Inicio</a> </li>
                <li> <a href="nosotros.php">Nosotros</a> </li>
                <li> <a href="compras.php">Compras</a> </li>
                <li> <a href="contactanos.php"> Contactenos</a> </li>
                <li> <a href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>)</a> </li>
                <li> <a href="../../models\logout.php"> Cerrar sesión</a> </li>
            </ul>
        </nav>
        <br><br>
    <?php
        echo "Bienvenido/a ";
        echo $_SESSION['nom'];
    } else {

    ?>
        <nav>
            <ul>
                <li> <a href="inicio.php"> Inicio</a> </li>
                <li> <a href="nosotros.php">Nosotros</a> </li>
                <li> <a href="contactanos.php"> Contactenos</a> </li>
                <li> <a href="login.php"> Iniciar Sesión</a> </li>
            </ul>
        </nav>

    <?php

    }
    ?>

    <br>
    <br>
    <div class="container">
        <br>

        <?php if($mensaje !=""){ ?>
        <div class="alert alert-success">
            <?php echo ($mensaje); ?>
            <a href="mostrarCarrito.php" class="badge badge-succes">Ver carrito</a>
        </div>
        <?php } ?>

        <div class="row">
            <?php
            $sentencia = $pdo->prepare("SELECT * FROM productos");
            $sentencia->execute();
            $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
            ?>

            <?php foreach ($listaProductos as $producto) { ?>

                <div class="col-3">
                    <div class="card">
                        <img title="<?php echo $producto['NOM_PROD']; ?>" 
                        class="card-img-top" src="<?php echo $producto['Imagen']; ?>" 
                        alt="<?php echo $producto['NOM_PROD']; ?>"
                        height="250px">
                        <div class="card-body">
                            <span><?php echo $producto['NOM_PROD']; ?></span>
                            <h5 class="card-title">$<?php echo $producto['PRE_PROD']; ?></h5>
                            <!--<p class="card-text">Descripción</p>-->

                        <form action="" method="POST">

                        <input type="hidden" name="ID_PROD" id="ID_PROD" value="<?php echo openssl_encrypt($producto['ID_PROD'],COD,KEY);?>">
                        <input type="hidden" name="NOM_PROD" id="NOM_PROD" value="<?php echo openssl_encrypt($producto['NOM_PROD'],COD,KEY); ?>">
                        <input type="hidden" name="PRE_PROD" id="PRE_PROD" value="<?php echo openssl_encrypt($producto['PRE_PROD'],COD,KEY); ?>">
                        <input type="hidden" name="CANT_PROD" id="CANT_PROD" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="agregar" 
                            type="submit">
                                Agregar al carrito
                            </button>
                        </form>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>











    </div>

</body>

</html>