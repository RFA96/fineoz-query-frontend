<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Tiga Raksa</title>
        <?php include "../partials/assets_css.php"; ?>

    </head>

    <body class="bg-white">
        <?php include "../partials/topnav.php"; ?>

        <div class="container">
            <div class="row">
                <div class="mt-4 mb-2 ml--4">
                    <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="list_card.php" class="text-white"><i class="fas fa-angle-left"></i> Back</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row py-2">
                <h2 class="mb-4">DETAILS TIGA RAKSA OPT</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_tigaraksa_opt">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>BRANCHID</th>
                                <th>BRANCHNAME</th>
                                <th>OUTLETID</th>
                                <th>OUTLETNAME</th>
                                <th>BILLCODEID</th>
                                <th>REGDATE</th>
                                <th>CONTACT</th>
                                <th>TGL_LAHIR</th>
                                <th>KTP</th>
                                <th>NPWP</th>
                                <th>PROPINSI</th>
                                <th>KAB</th>
                                <th>KEC</th>
                                <th>KEL</th>
                                <th>CUST_TYPE</th>
                                <th>FILEDATE</th>
                                <th>VOUCHER_NO</th>
                                <th>INVOICE_NO</th>
                                <th>PAID_AMOUNT</th>
                                <th>PAID_DATE</th>
                                <th>PAID_TYPE</th>
                                <th>GROSS_SLS</th>
                                <th>INVOICE_AMOUNT</th>
                                <th>TOP</th>
                                <th>INVOICE_DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchTigaRaksaOpt = $conn->query("SELECT * FROM tiga_raksa_opt_100");
                                $rowFetchTigaRaksaOpt = $sqlFetchTigaRaksaOpt->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchTigaRaksaOpt); $i++){
                                ?>
                                    <tr>
                                        <td><?= $i+1?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['BRANCHID']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['BRANCHNAME']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['OUTLETID']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['OUTLETNAME']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['BILLCODEID']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['REGDATE']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['CONTACT']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['TGL_LAHIR']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['KTP']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['NPWP']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['PROVINSI']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['KAB']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['KEC']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['KEL']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['CUST_TYPE']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['FILEDATE']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['VOUCHER_NO']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['INVOICE_NO']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['PAID_AMOUNT']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['PAID_DATE']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['PAID_TYPE']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['GROSS_SLS']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['INVOICE_AMOUNT']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['TOP']?></td>
                                        <td><?= $rowFetchTigaRaksaOpt[$i]['INVOICE_DATE']?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row py-2">
                <h2 class="mb-4 mt-6">DETAILS TIGA RAKSA OUTLET</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_tigaraksa_outlet">
                        <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>BRANCHID</th>
                            <th>BRANCHNAME</th>
                            <th>OUTLETID</th>
                            <th>OUTLETNAME</th>
                            <th>BILLCODEID</th>
                            <th>REGDATE</th>
                            <th>CONTACT</th>
                            <th>TGL_LAHIR</th>
                            <th>KTP</th>
                            <th>NPWP</th>
                            <th>PROPINSI</th>
                            <th>KAB</th>
                            <th>KEC</th>
                            <th>KEL</th>
                            <th>CUST_TYPE</th>
                            <th>FILEDATE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sqlFetchTigaRaksaOutlet = $conn->query("SELECT * FROM tiga_raksa_outlet_100");
                        $rowFetchTigaRaksaOutlet = $sqlFetchTigaRaksaOutlet->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($rowFetchTigaRaksaOutlet); $i++){
                            ?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['BRANCHID']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['BRANCHNAME']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['OUTLETID']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['OUTLETNAME']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['BILLCODEID']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['REGDATE']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['CONTACT']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['TGL_LAHIR']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['KTP']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['NPWP']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['PROPINSI']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['KAB']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['KEC']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['KEL']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['CUST_TYPE']?></td>
                                <td><?= $rowFetchTigaRaksaOutlet[$i]['FILEDATE']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row py-2">
                <h2 class="mb-4 mt-6">DETAILS TIGA RAKSA PEMBAYARAN</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_tigaraksa_pembayaran">
                        <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>BRANCHID</th>
                            <th>BRANCHNAME</th>
                            <th>VOUCHER_NO</th>
                            <th>INVOICE_NO</th>
                            <th>BILLCODEID</th>
                            <th>PAID_AMOUNT</th>
                            <th>PAID_DATE</th>
                            <th>PAID_TYPE</th>
                            <th>FILEDATE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sqlFetchTigaRaksaPembayaran= $conn->query("SELECT * FROM tiga_raksa_pembayaran_100");
                        $rowFetchTigaRaksaPembayaran = $sqlFetchTigaRaksaPembayaran->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($rowFetchTigaRaksaOpt); $i++){
                            ?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['BRANCHID']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['BRANCHNAME']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['VOUCHER_NO']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['INVOICE_NO']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['BILLCODEID']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['PAID_AMOUNT']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['PAID_DATE']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['PAID_TYPE']?></td>
                                <td><?= $rowFetchTigaRaksaPembayaran[$i]['FILEDATE']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row py-2">
                <h2 class="mb-4 mt-6">DETAILS TIGA RAKSA TRANSAKSI</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_tigaraksa_transaksi">
                        <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>INVOICE_NO</th>
                            <th>BILLCODEID</th>
                            <th>GROSS_SLS</th>
                            <th>INVOICE_AMOUNT</th>
                            <th>TOP</th>
                            <th>INVOICE_DATE</th>
                            <th>FILEDATE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sqlFetchTigaRaksaTransaksi = $conn->query("SELECT * FROM tiga_raksa_transaksi_100");
                        $rowFetchTigaRaksaTransaksi = $sqlFetchTigaRaksaTransaksi->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($rowFetchTigaRaksaOpt); $i++){
                            ?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['INVOICE_NO']?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['BILLCODEID']?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['GROSS_SLS']?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['INVOICE_AMOUNT']?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['TOP']?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['INVOICE_DATE']?></td>
                                <td><?= $rowFetchTigaRaksaTransaksi[$i]['FILEDATE']?></td>

                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php include "../partials/assets_js.php"; ?>

        <script>
            $('#table_tigaraksa_opt').DataTable({
                ordering:false,
                language:{
                    paginate:{
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            });

            $('#table_tigaraksa_outlet').DataTable({
                ordering:false,
                language:{
                    paginate:{
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            });

            $('#table_tigaraksa_pembayaran').DataTable({
                ordering:false,
                language:{
                    paginate:{
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            });

            $('#table_tigaraksa_transaksi').DataTable({
                ordering:false,
                language:{
                    paginate:{
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            });
        </script>

    </body>

</html>
