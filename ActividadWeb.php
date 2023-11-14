<?php include("Actividad2.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1</title>
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="fonts/fontawesome6/pro/css/all.min.css">
    <script src="js/adminlte.min.js"></script>
    <script src="js/Tooltip.js"></script>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <span class="brand-text font-weight-light">Computación en el Servidor Web</span>
                </a>
        </nav>
        <div class="container-fluid">
            <div class="row col-lg-12">
                <div class="card col-lg-12 mt-3">
                    <div class="card-header bg-primary">
                        <h3 class="mt-2 ml-3">Actividades de PHP - Maestría UNIR</h3>
                    </div>
                    <div class="card-body">
                        <div class="row col-lg-12">
                            <div class="col-lg-3">
                                <ul class="ml-4 mb-0 fa-ul">
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>varNumerica:</b>
                                        <?= $varNumerica ?>
                                    </li>
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>totalNum:</b>
                                        <?= $totalNum ?>
                                    </li>
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>otroTotal (Modulo):</b>
                                        <?= $otroTotalM ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="ml-4 mb-0 fa-ul">
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>otroTotal:</b>
                                        <?= $otroTotal ?>
                                    </li>
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>varBooleana:</b>
                                        <?= $varBooleana == 0 ? "false" : "true" ?>
                                    </li>
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>otraBooleana:</b>
                                        <?= $otraBooleana == 0 ? "false" : "true" ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="ml-4 mb-0 fa-ul">
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>varBooleana_:</b>
                                        <?= $varBooleana == 0 ? "false" : "true" ?>
                                    </li>
                                    <li class="small mt-3">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-check"></i>
                                        </span> <b>otraBooleana_:</b>
                                        <?= $otraBooleana_ == 0 ? "false" : "true" ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>