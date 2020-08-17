<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>BYB</title>
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
                <h2 class="mb-4">DETAILS BYB</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_byb">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>uid</th>
                                <th>order_uid</th>
                                <th>loan_id</th>
                                <th>id_card_no</th>
                                <th>birthplace</th>
                                <th>birthdate</th>
                                <th>religion</th>
                                <th>gender</th>
                                <th>flag_gender</th>
                                <th>marital_status</th>
                                <th>country</th>
                                <th>id_card_address_street_name_house_no</th>
                                <th>id_card_kelurahan_village</th>
                                <th>id_card_kecamatan_sub_district</th>
                                <th>id_card_dati_2_city_regency</th>
                                <th>id_card_province</th>
                                <th>id_card_postal_code</th>
                                <th>mobile_phone_no</th>
                                <th>length_of_stay_years</th>
                                <th>length_of_work_years</th>
                                <th>monthly_income</th>
                                <th>monthly_expense</th>
                                <th>loan_amount_principal</th>
                                <th>loan_period_months</th>
                                <th>new_detor_repeat_order</th>
                                <th>goods_price</th>
                                <th>down_payment</th>
                                <th>loan_string_date</th>
                                <th>domicile_province</th>
                                <th>dpd</th>
                                <th>usia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchByb = $conn ->query("SELECT * FROM byb");
                                $rowFetchByb = $sqlFetchByb->fetchAll(PDO::FETCH_ASSOC);

                                for($i = 0; $i < count($rowFetchByb); $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchByb[$i]['uid'] ?></td>
                                            <td><?= $rowFetchByb[$i]['order_id'] ?></td>
                                            <td><?= $rowFetchByb[$i]['loan_id'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_no'] ?></td>
                                            <td><?= $rowFetchByb[$i]['birthplace'] ?></td>
                                            <td><?= $rowFetchByb[$i]['birthdate'] ?></td>
                                            <td><?= $rowFetchByb[$i]['religion'] ?></td>
                                            <td><?= $rowFetchByb[$i]['gender'] ?></td>
                                            <td><?= $rowFetchByb[$i]['flag_gender'] ?></td>
                                            <td><?= $rowFetchByb[$i]['marital_status'] ?></td>
                                            <td><?= $rowFetchByb[$i]['country'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_address_street_name_house_no'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_kelurahan_village'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_kecamatan_sub_district'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_dati_2_city_regency'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_province'] ?></td>
                                            <td><?= $rowFetchByb[$i]['id_card_postal_code'] ?></td>
                                            <td><?= $rowFetchByb[$i]['mobile_phone_no'] ?></td>
                                            <td><?= $rowFetchByb[$i]['length_of_stay_years'] ?></td>
                                            <td><?= $rowFetchByb[$i]['length_of_work_years'] ?></td>
                                            <td><?= $rowFetchByb[$i]['monthly_income'] ?></td>
                                            <td><?= $rowFetchByb[$i]['monthly_expense'] ?></td>
                                            <td><?= $rowFetchByb[$i]['loan_amount_principal'] ?></td>
                                            <td><?= $rowFetchByb[$i]['loan_period_months'] ?></td>
                                            <td><?= $rowFetchByb[$i]['new_detor_repeat_order'] ?></td>
                                            <td><?= $rowFetchByb[$i]['goods_price'] ?></td>
                                            <td><?= $rowFetchByb[$i]['down_payment'] ?></td>
                                            <td><?= $rowFetchByb[$i]['loan_string_date'] ?></td>
                                            <td><?= $rowFetchByb[$i]['domicile_province'] ?></td>
                                            <td><?= $rowFetchByb[$i]['dpd'] ?></td>
                                            <td><?= $rowFetchByb[$i]['usia'] ?></td>
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
            $('#table_byb').DataTable({
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
