<?php
include_once '../../config.php';
#echo BASE_DIR;
include_once BASE_DIR . '/modelo/conexion.php';

date_default_timezone_set('America/El_salvador');
$year = date('Y');
$total = array();
for ($month = 1; $month <= 12; $month++) {
    $sql = "select *, sum(amount)as total from sales where month(sales_date)='$month' and year (sales_date)='$year'";
    $query = $conexion->query($sql);
    $row = $query->fetch_array();
    $total[] = $row['total'];
    //Desde la línea 4 hasta la línea 6 se realiza el horario y la fecha de los datos añadido
//Desde la línea 7 a la línea 13 se crea un bucle el cual es para los meses y el año que se genere cada
//dato
}

$tjan = $total[0];
$tfeb = $total[1];
$tmar = $total[2];
$tabr = $total[3];
$tmay = $total[4];
$tjun = $total[5];
$tjul = $total[6];
$taugu = $total[7];
$tsep = $total[8];
$toct = $total[9];
$tnov = $total[10];
$tdic = $total[11];

$pYear = $year - 1;
$ptotal = array();

for ($pmonth = 1; $pmonth <= 12; $pmonth++) {
    $sql = "select *, sum(amount) as ptotal from purchases where month(purchase_date)='$pmonth' and year (purchase_date)='$year'";
    $pquery = $conexion->query($sql);
    $prow = $pquery->fetch_array();
    $ptotal[] = $prow['ptotal'];

}
$pjan = $ptotal[0];
$pfeb = $ptotal[1];
$pmar = $ptotal[2];
$pabr = $ptotal[3];
$pmay = $ptotal[4];
$pjun = $ptotal[5];
$pjul = $ptotal[6];
$paugu = $ptotal[7];
$psep = $ptotal[8];
$poct = $ptotal[9];
$pnov = $ptotal[10];
$pdec = $ptotal[11];
?>