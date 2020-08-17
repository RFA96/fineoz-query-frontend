<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Bank Mega</title>
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
            <h2 class="mb-4">DETAILS BANK MEGA</h2>
            <div class="table-responsive">
                <table class="table table-flush" id="table_bankmega">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>CC_CIF_NO</th>
                            <th>FULL_NM</th>
                            <th>MOBILE</th>
                            <th>EMAIL</th>
                            <th>SEX</th>
                            <th>DOB</th>
                            <th>H_ADDR_L1</th>
                            <th>H_ADDR_L2</th>
                            <th>H_ADDR_L3</th>
                            <th>H_ADDR_L4</th>
                            <th>H_ADDR_L5</th>
                            <th>H_POST_CD</th>
                            <th>H_TEL</th>
                            <th>COM_NM</th>
                            <th>C_ADDR_L1</th>
                            <th>C_ADDR_L2</th>
                            <th>C_ADDR_L3</th>
                            <th>C_ADDR_L4</th>
                            <th>C_ADDR_L5</th>
                            <th>C_POST_CD</th>
                            <th>C_TEL</th>
                            <th>REL_NAME</th>
                            <th>REL_ADDR_L</th>
                            <th>REL_ADDR_0</th>
                            <th>REL_ADDR_1</td>
                            <th>REL_ADDR_2</td>
                            <th>REL_ADDR_3</td>
                            <th>REL_TEL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlFetchBankMega = $conn->query("SELECT * FROM bank_mega");
                            $rowFetchBankMega = $sqlFetchBankMega->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < count($rowFetchBankMega); $i++){
                                ?>
                                    <tr>
                                        <td><?= $i+1?></td>
                                        <td><?= $rowFetchBankMega[$i]['CC_CIF_NO']?></td>
                                        <td><?= $rowFetchBankMega[$i]['FULL_NM']?></td>
                                        <td><?= $rowFetchBankMega[$i]['MOBILE']?></td>
                                        <td><?= $rowFetchBankMega[$i]['EMAIL']?></td>
                                        <td><?= $rowFetchBankMega[$i]['SEX']?></td>
                                        <td><?= $rowFetchBankMega[$i]['DOB']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_ADDR_L1']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_ADDR_L2']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_ADDR_L3']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_ADDR_L4']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_ADDR_L5']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_POST_CD']?></td>
                                        <td><?= $rowFetchBankMega[$i]['H_TEL']?></td>
                                        <td><?= $rowFetchBankMega[$i]['COM_NM']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_ADDR_L1']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_ADDR_L2']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_ADDR_L3']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_ADDR_L4']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_ADDR_L5']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_POST_CD']?></td>
                                        <td><?= $rowFetchBankMega[$i]['C_TEL']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_NAME']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_ADDR_L']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_ADDR_0']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_ADDR_1']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_ADDR_2']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_ADDR_3']?></td>
                                        <td><?= $rowFetchBankMega[$i]['REL_TEL']?></td>
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
        $('#table_bankmega').DataTable({
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