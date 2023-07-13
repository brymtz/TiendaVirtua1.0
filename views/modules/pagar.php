<?php
include '../../models/config.php';
include '../../models/conexion.php';
include 'carrito.php';
?>

<?php
if ($_POST) {

    $total = 0;
    $SID = session_id();
    $Correo = $_POST['email'];

    foreach ($_SESSION['CARRITO'] as $indice => $producto) {

        $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
    }

    $sentencia = $pdo->prepare("INSERT INTO `ventas` 
    (`ID_VEN`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) 
    VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'Pendiente');");

    $sentencia->bindParam(":ClaveTransaccion", $SID);
    $sentencia->bindParam(":Correo", $Correo);
    $sentencia->bindParam(":Total", $total);
    $sentencia->execute();
    $idVenta = $pdo->lastInsertId();

    foreach ($_SESSION['CARRITO'] as $indice => $producto) {

        $sentencia = $pdo->prepare("INSERT INTO `detalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`) 
        VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD);");

        $sentencia->bindParam(":IDVENTA", $idVenta);
        $sentencia->bindParam(":IDPRODUCTO", $producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO", $producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD", $producto['CANTIDAD']);
        $sentencia->execute();
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable = no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <title>Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="compras.php">Compras<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarCarrito.php" tabindex="-1" aria-disabled="true">Carrito(<?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?>)</a>
                </li>
            </ul>
        </div>
    </nav>

    <br><br><br>
    <div class="container">
        <div class="jumbotron text-xl-center text-dark">
            <h1 class="display-4">¡Paso Final!</h1>
            <hr class="my-4">
            <p class="lead">Estas a punto de pagar con paypal la cantidad de:
            <h4><?php echo "$" . number_format($total, 2); ?></h4>
            <div id="paypal-button-container"></div>
            </p>
        </div>
    </div>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        style: {
            color:  'blue',
            shape:  'pill',
            label:  'pay',
            height: 40
            
        }

    }).render('#paypal-button-container');
</script>

</body>

</html>