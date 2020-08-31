<?php include "../config.php";?>
<!doctype html>
<html lang="en">

<head>
    <title>Visitor Lobby</title>
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
                <h2 class="mb-4">DETAILS VISITOR LOBBY</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_slik">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>visitor_id</th>
                                <th>visitor_type</th>
                                <th>jenis_identitas</th>
                                <th>no_identitas</th>
                                <th>nama</th>
                                <th>jenis_kelamin</th>
                                <th>alamat</th>
                                <th>tempat_lahir</th>
                                <th>tanggal_lahir</th>
                                <th>pekerjaan</th>
                                <th>image_identitas</th>
                                <th>image_template</th>
                                <th>yitu_respond</th>
                                <th>c_date</th>
                                <th>c_by</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchVisitor = $conn->query("SELECT * FROM visitor_lobby");
                                $rowFetchVisitor = $sqlFetchVisitor->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchVisitor); $i++){
                                    ?>
                                    <tr>
                                        <td><?= $i+1?></td>
                                        <td><?= $rowFetchVisitor[$i]['visitor_id']?></td>
                                        <td><?= $rowFetchVisitor[$i]['visitor_type']?></td>
                                        <td><?= $rowFetchVisitor[$i]['jenis_identitas']?></td>
                                        <td><?= $rowFetchVisitor[$i]['no_identitas']?></td>
                                        <td><?= $rowFetchVisitor[$i]['nama']?></td>
                                        <td><?= $rowFetchVisitor[$i]['jenis_kelamin']?></td>
                                        <td><?= $rowFetchVisitor[$i]['alamat']?></td>
                                        <td><?= $rowFetchVisitor[$i]['tempat_lahir']?></td>
                                        <td><?= $rowFetchVisitor[$i]['tanggal_lahir']?></td>
                                        <td><?= $rowFetchVisitor[$i]['pekerjaan']?></td>
                                        <td><?= $rowFetchVisitor[$i]['image_identitas']?></td>
                                        <td><?= $rowFetchVisitor[$i]['image_template']?></td>
                                        <td><?= $rowFetchVisitor[$i]['yitu_respond']?></td>
                                        <td><?= $rowFetchVisitor[$i]['c_date']?></td>
                                        <td><?= $rowFetchVisitor[$i]['c_by']?></td>
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
