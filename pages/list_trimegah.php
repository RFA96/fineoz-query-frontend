<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Tri Megah</title>
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
                <h2 class="mb-4">DETAILS TRI MEGAH</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_trimegah">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>OfficeID</th>
                                <th>SalesPersonID</th>
                                <th>SalesPersonName</th>
                                <th>ClientID</th>
                                <th>ClientName</th>
                                <th>ClientCategory</th>
                                <th>CurrencyID</th>
                                <th>CreditLimit</th>
                                <th>Deposit_CC</th>
                                <th>AC_CC</th>
                                <th>Buy_CC</th>
                                <th>Sell_CC</th>
                                <th>Interest_CC</th>
                                <th>Total</th>
                                <th>MarketValue_CS</th>
                                <th>HaircutValue_CS</th>
                                <th>CurrentCollateralRatio</th>
                                <th>TradeLimit</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchTriMegah = $conn->query("SELECT * FROM trimegah_100");
                                $rowFetchTriMegah = $sqlFetchTriMegah->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchTriMegah); $i++){
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchTriMegah[$i]['OfficeID']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['SalesPersonID']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['SalesPersonName']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['ClientID']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['ClientName']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['ClientCategory']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['CurrencyID']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['CreditLimit']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['Deposit_CC']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['AC_CC']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['Buy_CC']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['Sell_CC']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['Interest_CC']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['Total']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['MarketValue_CS']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['HaircutValue_CS']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['CurrentCollateralRatio']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['TradeLimit']?></td>
                                            <td><?= $rowFetchTriMegah[$i]['Tanggal']?></td>
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
            $('#table_trimegah').DataTable({
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