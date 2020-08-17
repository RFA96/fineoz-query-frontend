<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>DUKCAPIL</title>
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
                <h2 class="mb-4">DETAILS DUKCAPIL</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_dukcapil">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>DPID</th>
                                <th>No KK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Status Perkawinan B/S/P</th>
                                <th>Jenis Kelamin  L/P</th>
                                <th>Jalan/Dukuh</th>
                                <th>Rt</th>
                                <th>Rw</th>
                                <th>Dis-abilitas</th>
                                <th>Keterangan  *)</th>
                                <th>Sumber Data</th>
                                <th>TPS</th>
                                <th>Desa/Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kabupaten/Kota</th>
                                <th>Provinsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchDukcapil = $conn->query("SELECT * FROM dukcapil_100");
                                $rowFetchDukcapil = $sqlFetchDukcapil->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchDukcapil); $i++){
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchDukcapil[$i]['DPID']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['No KK']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['NIK']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Nama']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Tempat Lahir']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Status Perkawinan B/S/P']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Jenis Kelamin  L/P']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Jalan/Dukuh']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Rt']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Rw']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Dis-abilitas']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Keterangan  *)']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Sumber Data']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['TPS']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Desa/Kelurahan']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Kecamatan']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Kabupaten/Kota']?></td>
                                            <td><?= $rowFetchDukcapil[$i]['Provinsi']?></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include "../partials/assets_js.php"; ?>

        <script>
            $('#table_dukcapil').DataTable({
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