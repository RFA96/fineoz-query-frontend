<?php include "../config.php";?>
<!doctype html>
<html lang="en">

<head>
    <title>STNK</title>
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
                <h2 class="mb-4">DETAILS STNK</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_slik">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nomor Polisi</th>
                                <th>Nama Pemilik</th>
                                <th>Nomor Rangka</th>
                                <th>Nomor Mesin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchStnk = $conn->query("SELECT * FROM stnk");
                                $rowFetchStnk = $sqlFetchStnk->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchStnk); $i++){
                                    ?>
                                    <tr>
                                        <td><?= $i+1?></td>
                                        <td><?= $rowFetchStnk[$i]['nomor_polisi']?></td>
                                        <td><?= $rowFetchStnk[$i]['nama_pemilik']?></td>
                                        <td><?= $rowFetchStnk[$i]['nomor_rangka']?></td>
                                        <td><?= $rowFetchStnk[$i]['nomor_mesin']?></td>
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
            $('#table_slik').DataTable({
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
