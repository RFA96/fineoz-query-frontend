<?php include "../config.php"?>
<!doctype html>
<html lang="en">

    <head>
        <title>Investree OSF</title>
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
                <h2 class="mb-4">DETAILS INVESTREE OSF</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_osf">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>eld_id</th>
                                <th>loan_type</th>
                                <th>email</th>
                                <th>mobile_number</th>
                                <th>year_birth</th>
                                <th>ktp_postal_code</th>
                                <th>npwp_masking</th>
                                <th>selfie_with_ktp</th>
                                <th>cd_gaya_bahasa</th>
                                <th>cd_pov</th>
                                <th>eld_status_tempat_usaha</th>
                                <th>bpd_status_pefindo</th>
                                <th>eld_loan_reg_date</th>
                                <th>eld_loan_disbursement_date</th>
                                <th>eld_loan_due_date</th>
                                <th>eld_update_from_database_date</th>
                                <th>eld_last_paid_date</th>
                                <th>eld_loan_reg_date1</th>
                                <th>eld_loan_amount</th>
                                <th>eld_loan_tenor</th>
                                <th>seller_type</th>
                                <th>product_category</th>
                                <th>flag_branded</th>
                                <th>flag_grosir</th>
                                <th>flag_dropship</th>
                                <th>kualitas_barang</th>
                                <th>gender_pengguna_produk</th>
                                <th>umur_pengguna_produk</th>
                                <th>ecommerce_name</th>
                                <th>ecommerce_seller_since</th>
                                <th>seller_rating</th>
                                <th>number_of_employee</th>
                                <th>product_category1</th>
                                <th>dominant_product</th>
                                <th>flag_premium</th>
                                <th>total_active_product</th>
                                <th>total_sold_item</th>
                                <th>successful_transaction</th>
                                <th>product_quality_rating</th>
                                <th>satisfaction_sentiment</th>
                                <th>total_review</th>
                                <th>total_followers</th>
                                <th>dukungan_pengiriman</th>
                                <th>total_discussion</th>
                                <th>total_transaction</th>
                                <th>successful_transaction1</th>
                                <th>description_from_investree</th>
                                <th>offline_store_address_postal_code</th>
                                <th>borrower_bank_name</th>
                                <th>upload_cover_buku_tabungan</th>
                                <th>sales_from_ecommerce</th>
                                <th>profit_from_ecommerce</th>
                                <th>other_income</th>
                                <th>existing_installment</th>
                                <th>disposable_income</th>
                                <th>investree_installment</th>
                                <th>idir</th>
                                <th>length_of_selling_through_ecommerce</th>
                                <th>length_of_doing_business</th>
                                <th>individual_or_company</th>
                                <th>premium_subscription</th>
                                <th>seller_rating1</th>
                                <th>loan_period</th>
                                <th>email_domain</th>
                                <th>phone_number</th>
                                <th>bank_name</th>
                                <th>profit_margin</th>
                                <th>sales_trend</th>
                                <th>idir_binning</th>
                                <th>average_monthly_turnover</th>
                                <th>number_of_platform_ascociated_with</th>
                                <th>existence_of_offline_business</th>
                                <th>concentration_customer_over_platform</th>
                                <th>seller_product_category</th>
                                <th>existence_of_previous_deliquency</th>
                                <th>ever_restructured</th>
                                <th>new_to_credit</th>
                                <th>loan_perf_status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchInvestreeOSF = $conn->query("SELECT * FROM osf_100");
                                $rowFetchInvestreeOSF = $sqlFetchInvestreeOSF->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchInvestreeOSF); $i++){
                                    ?>
                                    <tr>
                                        <td><?= $i+1?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_id']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['loan_type']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['email']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['mobile_number']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['year_birth']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['ktp_postal_code']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['npwp_masking']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['selfie_with_ktp']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['cd_gaya_bahasa']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['cd_pov']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_status_tempat_usaha']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['bpd_status_pefindo']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_loan_reg_date']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_loan_disbursement_date']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_loan_due_date']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_update_from_database_date']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_last_paid_date']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_loan_reg_date1']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_loan_amount']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['eld_loan_tenor']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['seller_type']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['product_category']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['flag_branded']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['flag_grosir']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['flag_dropship']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['kualitas_barang']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['gender_pengguna_produk']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['umur_pengguna_produk']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['ecommerce_name']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['ecommerce_seller_since']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['seller_rating']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['number_of_employee']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['product_category1']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['dominant_product']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['flag_premium']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['total_active_product']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['total_sold_item']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['successful_transaction']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['product_quality_rating']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['satisfaction_sentiment']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['total_review']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['total_followers']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['dukungan_pengiriman']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['total_discussion']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['total_transaction']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['successful_transaction1']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['description_from_investree']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['offline_store_address_postal_code']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['borrower_bank_name']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['upload_cover_buku_tabungan']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['sales_from_ecommerce']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['profit_from_ecommerce']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['other_income']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['existing_installment']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['disposable_income']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['investree_installment']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['idir']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['length_of_selling_through_ecommerce']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['length_of_doing_business']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['individual_or_company']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['premium_subscription']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['seller_rating1']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['loan_period']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['email_domain']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['phone_number']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['bank_name']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['profit_margin']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['sales_trend']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['idir_binning']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['average_monthly_turnover']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['number_of_platform_ascociated_with']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['existence_of_offline_business']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['concentration_customer_over_platform']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['seller_product_category']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['existence_of_previous_deliquency']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['ever_restructured']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['new_to_credit']?></td>
                                        <td><?= $rowFetchInvestreeOSF[$i]['loan_perf_status']?></td>
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
            $('#table_osf').DataTable({
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