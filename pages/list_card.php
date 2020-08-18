<?php include "../config.php"?>
<!doctype html>
<html lang="en">

    <head>
        <title>Monitoring</title>
        <?php include "../partials/assets_css.php"; ?>

    </head>

    <body class="bg-white">
        <?php include "../partials/topnav.php"; ?>

        <div class="container">
            <div class="row">
                <div class="mt-4">
                    <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="search.php" class="text-white"><i class="fas fa-angle-left"></i> Back</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">TELCO</h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row ml-2">
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Indosat</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_indosat.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Indihome</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_indihome.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">FINTECH</h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row ml-2">
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Bank Mega</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_bank_mega.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Bsm</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_bsm.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Byb</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_byb.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Indofund</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_indofund.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Investree</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_investree.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Investree OSF</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_investree_osf.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Mandala</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_mandala.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Modal Antara</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_modal_antara.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Tiga Raksa</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_tiga_raksa.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Tri Megah</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_trimegah.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">DATA</h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row ml-2">
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Slik</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_slik.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 22rem;">
                                            <div class="card card-stats mr-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title text-uppercase font-weight-bold mb-0">Dukcapil</h2>
<!--                                                            <span class="text-info text-sm"><i class="fa fa-database"></i> 348</span>-->
<!--                                                            <span class="text-muted text-sm">Data Field</span>-->
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="mt-0 mb-0 text-left">
                                                        <a href="list_dukcapil.php" class="btn btn-sm btn-outline-primary text-sm">Details <i class="fas fa-angle-right"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../partials/assets_js.php"; ?>

    </body>

</html>