<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Monitoring</title>
        <?php include "../partials/assets_css.php"; ?>

    </head>

    <body class="bg-white">
    <?php include "../partials/topnav.php"; ?>

    <div class="container">
        <div class="row py-4">
            <h2 class="mb-4">INDIHOME</h2>
            <div class="table-responsive">
                <table class="table table-flush" id="table_indohome">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>_ID_</th>
                        <th>_BAD_DEBT_SCORE_</th>
                        <th>_SOSIAL_ECO_STATUS_</th>
                        <th>_COUNT_HIT_</th>
                        <th>_INTERNET_USAGE_</th>
                        <th>_PAKET_INTERNET_</th>
                        <th>_LENGTH_OF_STAY_</th>
                        <th>_TV_DURATION_</th>
                        <th>_CHANNEL_TV_</th>
                        <th>_PAYMENT_DATE_</th>
                        <th>_TV_PROGRAM_</th>
                        <th>_SPEED_INTERNET_</th>
                        <th>_PHONE_NUMBER_DURATION_</th>
                        <th>_PRODUCT_CATEGORY_</th>
                        <th>_ADD_ON_</th>
                        <th>_STATUS_</th>
                        <th>_ARPU_</th>
                        <th>_AGE_CATEGORY_</th>
                        <th>_ACTIVATION_</th>
                        <th>_EXPIRED_</th>
                        <th>_ZIP_CODE_</th>
                        <th>_CITY_</th>
                        <th>_PROVINCE_</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlFetchIndihome = $myPDOIndihome->query("SELECT * FROM indihome_10");
                            $rowFetchIndihome = $sqlFetchIndihome->fetchAll(PDO::FETCH_ASSOC);

                            for($i = 0; $i < count($rowFetchIndihome); $i++){
                                ?>
                                    <tr>
                                        <td><?= $i+1?></td>
                                        <td><?= $rowFetchIndihome[$i]['_ID_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_BAD_DEBT_SCORE_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_SOSIAL_ECO_STATUS_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_COUNT_HIT_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_INTERNET_USAGE_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_PAKET_INTERNET_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_LENGTH_OF_STAY_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_TV_DURATION_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_CHANNEL_TV_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_PAYMENT_DATE_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_TV_PROGRAM_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_SPEED_INTERNET_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_PHONE_NUMBER_DURATION_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_PRODUCT_CATEGORY_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_ADD_ON_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_STATUS_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_ARPU_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_AGE_CATEGORY_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_ACTIVATION_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_EXPIRED_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_ZIP_CODE_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_CITY_']?></td>
                                        <td><?= $rowFetchIndihome[$i]['_PROVINCE_']?></td>
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
        $('#table_individu, #table_indohome, #table_indosat, #table_media, #table_slik').DataTable({
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