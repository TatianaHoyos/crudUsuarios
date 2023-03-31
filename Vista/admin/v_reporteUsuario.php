<?php
include_once '../../config.php';

include_once BASE_DIR . '/controlador/c_consultaUsuario.php';
//require '../../Controlador/c_consultaUsuario.php';
include '../utilidades/plantilla.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 6, 'Usuario', 1, 0, 'C', 1);
$pdf->Cell(22, 6, 'documento', 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'T. documento', 1, 0, 'C', 1);
$pdf->Cell(15, 6, 'genero', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'celular', 1, 0, 'C', 1);
$pdf->Cell(38, 6, 'email', 1, 0, 'C', 1);
$pdf->Cell(24, 6, 'rol', 1, 0, 'C', 1);
$pdf->Cell(18, 6, 'empresa', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);
foreach ($rows as $fila) {
    $pdf->Cell(30, 6, $fila['usuario'], 1, 0, 'C', 1);
    $pdf->Cell(22, 6, $fila['documento'], 1, 0, 'C', 1);
    $pdf->Cell(25, 6, $fila['tipoDocumento'], 1, 0, 'C', 1);
    $pdf->Cell(15, 6, $fila['genero'], 1, 0, 'C', 1);
    $pdf->Cell(20, 6, $fila['celularUsuario'], 1, 0, 'C', 1);
    $pdf->Cell(38, 6, $fila['email'], 1, 0, 'C', 1);
    $pdf->Cell(24, 6, $fila['rol'], 1, 0, 'C', 1);
    $pdf->Cell(18, 6, $fila['empresa'], 1, 1, 'C', 1);

}
$pdf->Output();


?>