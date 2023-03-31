<?php
include_once '../modelo/conexion.php';

if (isset($_POST['type'])) {
    $amount = floatval($_POST['amount']);
    $date = $_POST['sales_date'];
    $type = intval($_POST['type']);
    if ($type == 1) {
        $sql = "insert into sales (amount, sales_date) values ('$amount','$date')";
    } elseif ($type == 2) {
        $sql = "insert into purchases (amount, purchase_date) values ('$amount','$date')";

    }
    $conexion->query($sql);

    echo "se ha guardado el registro con exito";
}
?>