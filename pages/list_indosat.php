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
                <h2 class="mb-4">DETAILS INDOSAT</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_indosat">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>msisdn_encrypted</th>
                                <th>status</th>
                                <th>tenure</th>
                                <th>subscriber_type</th>
                                <th>city_kabupaten</th>
                                <th>area</th>
                                <th>vip_flag</th>
                                <th>handset_type</th>
                                <th>handset_brand_type</th>
                                <th>handset_brand</th>
                                <th>current_service_package</th>
                                <th>activation_date_package</th>
                                <th>expired_date_package</th>
                                <th>vol_of_usg</th>
                                <th>data_rev</th>
                                <th>sms_offnet_hits</th>
                                <th>sms_offnet_rev</th>
                                <th>sms_onnet_hits</th>
                                <th>sms_onnet_rev</th>
                                <th>voice_duration</th>
                                <th>voice_rev</th>
                                <th>last_voice_usage_date</th>
                                <th>last_sms_usage_date</th>
                                <th>last_data_usage_date</th>
                                <th>last_voice_pack_subscription_date</th>
                                <th>last_sms_pack_subscription_date</th>
                                <th>last_data_pack_subscription_date</th>
                                <th>last_combo_pack_subscription_date</th>
                                <th>last_any_event_date</th>
                                <th>credit_limit_info</th>
                                <th>invoice_amount</th>
                                <th>data_usage_in_mb</th>
                                <th>total_topups</th>
                                <th>reload_date</th>
                                <th>usage_in_a_month</th>
                                <th>roaming_flag</th>
                                <th>apps_travel</th>
                                <th>apps_ecommerce</th>
                                <th>apps_finance</th>
                                <th>apps_socialnet</th>
                                <th>apps_transportation</th>
                                <th>apps_video</th>
                                <th>age_catg</th>
                                <th>gender</th>
                                <th>package_name</th>
                                <th>package_end_date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchIndosat = $conn ->query("SELECT * FROM indosat_10");
                                $rowFetchIndosat = $sqlFetchIndosat->fetchAll(PDO::FETCH_ASSOC);

                                for($i = 0; $i < count($rowFetchIndosat); $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchIndosat[$i]['msisdn_encrypted'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['status'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['tenure'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['subscriber_type'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['city_kabupaten'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['area'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['vip_flag'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['handset_type'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['handset_brand_type'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['handset_brand'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['current_service_package'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['activation_date_package'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['expired_date_package'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['vol_of_usg'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['data_rev'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['sms_offnet_hits'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['sms_offnet_rev'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['sms_onnet_hits'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['sms_onnet_rev'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['voice_duration'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['voice_rev'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_voice_usage_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_sms_usage_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_data_usage_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_voice_pack_subscription_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_sms_pack_subscription_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_data_pack_subscription_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_combo_pack_subscription_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['last_any_event_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['credit_limit_info'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['invoice_amount'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['data_usage_in_mb'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['total_topups'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['reload_date'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['usage_in_a_month'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['roaming_flag'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['apps_travel'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['apps_ecommerce'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['apps_finance'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['apps_socialnet'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['apps_transportation'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['apps_video'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['age_catg'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['gender'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['package_name'] ?></td>
                                            <td><?= $rowFetchIndosat[$i]['package_end_date'] ?></td>
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
            $('#table_indosat').DataTable({
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
