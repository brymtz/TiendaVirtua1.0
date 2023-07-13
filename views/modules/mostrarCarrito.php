<?php
include '../../models/config.php';
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
                <li> <a href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?>)</a> </li>
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
                <li> <a href="compras.php">Compras</a> </li>
                <li> <a href="contactanos.php"> Contactenos</a> </li>
                <li> <a href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?>)</a> </li>
                <li> <a href="login.php"> Iniciar Sesión</a> </li>
            </ul>
        </nav>

    <?php

    }
    ?>

    <br>
    <h3>Lista del Carrito</h3>
    <?php
    if (!empty($_SESSION['CARRITO'])) { ?>
        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th width="25%">Nombre</th>
                    <th width="10%">Cantidad</th>
                    <th width="20%">Precio</th>
                    <th width="20%">Total</th>
                    <th width="5%">--</th>
                </tr>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                    <tr>
                        <td width="25%"><?php echo $producto['NOMBRE'] ?></td>
                        <td width="10%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                        <td width="20%" class="text-center"><?php echo $producto['PRECIO'] ?></td>
                        <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></td>
                        <td width="5%">

                            <form action="" method="post">

                                <input type="hidden" name="ID_PROD" id="ID_PROD" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">

                                <button class="btn btn-danger" name="btnAccion" value="eliminar" type="submit">
                                    ELIMINAR
                                </button>

                            </form>

                        </td>
                    </tr>
 
                    <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                <?php } ?>

                <tr>
                    <td colspan="3" align="right">
                        <h3>Total</h3>
                    </td>
                    <td align="right">
                        <h3>$<?php echo number_format($total, 2); ?></h3>
                    </td>
                </tr>

                <tr>
                <td colspan="5">

                <form action="pagar.php" method="post">

                    <div class="alert alert-success">
                        
                <div class="form-group">
                        <label for="my-input">Correo de contacto: </label>
                        <input id="email" 
                        name="email" 
                        class="form-control" type="email" 
                        placeholder="Ingrese su correo"
                        required="true">
                    </div>

                    <small id="emailHelp" class="form-text text-muted">
                    La informacion de pago se enviara a este correo.
                    </small>

                    </div>
                    <button class="btn btn-primary btn-lg btn-block" 
                    type="submit"
                    name="btnAccion"
                    value="proceder">Proceder a pagar >></button>
                
                </form>
                </td>
                </tr>
            
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-success">
            No hay productos en el carrito...
        </div>
    <?php } ?>

</body>

</html>