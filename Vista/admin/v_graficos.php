<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Graficos de Barras</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/v_style.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">Reporte de usuarios chart.js</h1>
        <div class="row">
            <div class="col-md-3">
                <h3 class="page-header text-center">Añadir compra/venta</h3>
                <form id="formVentayCompra" method="POST">
                    <div class="form-group">
                        <label>Monto:</label>
                        <input id="monto" type="text" class="form-control" name="amount" required >

                    </div>
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input id="fecha" type="date" class="form-control" name="sales_date" required>
                    </div>

                    <div class="form-group">
                        <label>Tipo de transacción:</label>
                        <select id="tTransaccion" name="type" id="type" class="form-control" required>
                            <option value="">Selecciona</option>
                            <option value="1">Ventas</option>
                            <option value="2">Compras</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="guardarVentayCompra()">Guardar</button>
                </form>
            </div>
            <div class="col-md-9">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <?php
                        date_default_timezone_set('America/El_Salvador');
                        $year = date('Y');
                        ?>
                        <h3 class="box-tittle">Reporte de compras y ventas
                            <?php echo $year; ?>
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="barChart" style="height:230px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once '../../config.php';
    include_once BASE_DIR . '/controlador/c_datosGrafica.php'
        ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/funciones.js"></script>
    <script>
        $(document).ready(function () {

            var barcharData = {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                    'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'Diciembre'],
                datasets: [
                    {
                        label: 'Compras',
                        fillColor: 'rgba(210,214,222,1)',
                        strokeColor: 'rgba(210,214,222,1)',
                        pointColor: 'rgba(210,214,222,1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: ["<?php echo $pjan; ?>",
                            "<?php echo $pfeb; ?>",
                            "<?php echo $pmar; ?>",
                            "<?php echo $pabr; ?>",
                            "<?php echo $pmay; ?>",
                            "<?php echo $pjun; ?>",
                            "<?php echo $pjul; ?>",
                            "<?php echo $paugu; ?>",
                            "<?php echo $psep; ?>",
                            "<?php echo $poct; ?>",
                            "<?php echo $pnov; ?>",
                            "<?php echo $pdec; ?>",
                        ]
                    },
                    {

                        label: 'ventas',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: ["         <?php echo $tjan; ?>",
                            "<?php echo $tfeb; ?>",
                            "<?php echo $tmar; ?>",
                            "<?php echo $tabr; ?>",
                            "<?php echo $tmay; ?>",
                            "<?php echo $tjun; ?>",
                            "<?php echo $tjul; ?>",
                            "<?php echo $taugu; ?>",
                            "<?php echo $tsep; ?>",
                            "<?php echo $toct; ?>",
                            "<?php echo $tnov; ?>",
                            "<?php echo $tdic; ?>",

                        ]
                    }
                ]
            };

            const ctx = document.getElementById('barChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: barcharData.labels,
                    datasets: barcharData.datasets
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        });
    </script>
</body>

</html>