S<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Investree</title>
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
                <h2 class="mb-4">DETAILS INVESTREE</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_investree">
                        <thead class="thead-light">
                            <tr>
                                <th>no</th>
                                <th>bld_id</th>
                                <th>bld_bpd_id</th>
                                <th>mbp_name_en</th>
                                <th>mbp_name_en_flag</th>
                                <th>bpd_cdoc_npwp_masked</th>
                                <th>bpd_cdoc_npwp_masked_flag</th>
                                <th>bpd_cdoc_menhunkam_register_date</th>
                                <th>bpd_cdoc_menhunkam_register_date_flag</th>
                                <th>d_menhunkam_age</th>
                                <th>mlt_name</th>
                                <th>bld_invoice_amount</th>
                                <th>x_cdoc_npwp_masked_amount</th>
                                <th>x_loan_cdoc_npwp_masked_amount</th>
                                <th>bid_invoice_tenor</th>
                                <th>r_inv_tenor_amount</th>
                                <th>r_loan_tenor_amount</th>
                                <th>bid_invoice_receipt_date</th>
                                <th>bid_invoice_receipt_date_flag</th>
                                <th>x_invoice_receipt_date_amount</th>
                                <th>x_loan_receipt_date_amount</th>
                                <th>d_receipt_age</th>
                                <th>marketplace_fee</th>
                                <th>r_marketplace_inv_amount</th>
                                <th>r_loan_marketplace_inv_amount</th>
                                <th>bld_investor_rate</th>
                                <th>bld_loan_disbursement_amount</th>
                                <th>r_loan_disbursement_inv_amount</th>
                                <th>r_loan_disbursement_tenor</th>
                                <th>mb_name</th>
                                <th>mb_name_category</th>
                                <th>mb_name_category_num</th>
                                <th>x_ratio_mb_name</th>
                                <th>bcsd_survey_office_status</th>
                                <th>bcsd_survey_office_status_new</th>
                                <th>bcsd_survey_office_status_num</th>
                                <th>x_ratio_survey_office</th>
                                <th>bcsd_survey_file</th>
                                <th>bcsd_survey_file_flag</th>
                                <th>x_survey_file_amount</th>
                                <th>x_loan_survey_file_amount</th>
                                <th>bld_loan_reg_date</th>
                                <th>invoice_type</th>
                                <th>invoice_type_flag</th>
                                <th>bcd_doc_name1</th>
                                <th>bcd_doc_name1_flag</th>
                                <th>x_doc_name1_invoice</th>
                                <th>x_loan_doc_name1</th>
                                <th>x_ratio_doc_name1</th>
                                <th>bcd_doc_name2</th>
                                <th>bcd_doc_name2_flag</th>
                                <th>x_doc_name2_invoice</th>
                                <th>x_loan_doc_name2</th>
                                <th>x_ratio_doc_name2</th>
                                <th>bcd_doc_name3</th>
                                <th>bcd_doc_name3_flag</th>
                                <th>x_doc_name3_invoice</th>
                                <th>x_loan_doc_name3</th>
                                <th>x_ratio_doc_name3</th>
                                <th>bld_grace_period</th>
                                <th>bld_loan_tenor</th>
                                <th>bld_loan_due_date</th>
                                <th>bld_loan_tenor_prorate</th>
                                <th>bld_rm_name</th>
                                <th>mbbf_name_en</th>
                                <th>mbbf_name_en_category</th>
                                <th>mbfc_name_en_category</th>
                                <th>bmbl_stock_flag</th>
                                <th>x_stock_amount</th>
                                <th>x_loan_stock_amount</th>
                                <th>bmbl_year_start</th>
                                <th>bmbl_status</th>
                                <th>bmbl_status_category</th>
                                <th>doc_siup_upload</th>
                                <th>doc_siup_upload_flag</th>
                                <th>doc_tdp_upload</th>
                                <th>doc_tdp_upload_flag</th>
                                <th>doc_est_upload</th>
                                <th>doc_est_upload_flag</th>
                                <th>doc_upd_upload</th>
                                <th>doc_upd_upload_flag</th>
                                <th>doc_skdp_upload</th>
                                <th>doc_skdp_upload_flag</th>
                                <th>doc_skm_upload</th>
                                <th>doc_skm_upload_flag</th>
                                <th>doc_cprofile_upload</th>
                                <th>doc_cprofile_upload_flag</th>
                                <th>doc_finrpt_uploaded</th>
                                <th>doc_finrpt_uploaded_flag</th>
                                <th>doc_bstmt_uploaded</th>
                                <th>doc_bstmt_uploaded_flag</th>
                                <th>mr_ct_lang</th>
                                <th>mr_ct_lang_flag</th>
                                <th>mbfc_name_en</th>
                                <th>bpd_company_year_start</th>
                                <th>bpd_company_kab_kot</th>
                                <th>bpd_company_kab_kot_new</th>
                                <th>bpd_company_fax_flag</th>
                                <th>bpd_website_url_flag</th>
                                <th>bpd_website_url_flag_flag</th>
                                <th>x_website_url_flag_amount</th>
                                <th>x_loan_website_url_flag_amount</th>
                                <th>bldf_grading_average_cash_balance</th>
                                <th>bldf_grading_average_cash_balance_flag</th>
                                <th>x_grading_average_cash_balance_amount</th>
                                <th>x_loan_grading_average_cash_balance_amount</th>
                                <th>bldf_grading_lending_relationship_with_bank</th>
                                <th>bldf_grading_lending_relationship_with_bank_flag</th>
                                <th>x_grading_lending_relationship_with_bank_amount</th>
                                <th>Expr2</th>
                                <th>bldf_grading_ownership</th>
                                <th>bldf_grading_ownership_flag</th>
                                <th>x_grading_ownership_amount</th>
                                <th>x_loan_grading_ownership_amount</th>
                                <th>bldf_grading_sales_to_payor</th>
                                <th>bldf_grading_sales_to_payor_flag</th>
                                <th>x_grading_sales_to_payor_amount</th>
                                <th>x_loan_grading_sales_to_payor_amount</th>
                                <th>bldf_grading_escrow_accounts</th>
                                <th>bldf_grading_escrow_accounts_flag</th>
                                <th>x_grading_escrow_accounts_amount</th>
                                <th>x_loan_grading_escrow_accounts_amount</th>
                                <th>bldf_grading_payor_credibility</th>
                                <th>bldf_grading_payor_credibility_flag</th>
                                <th>bldf_grading_trade_relationship_with_payor</th>
                                <th>bldf_grading_trade_relationship_with_payor_flag</th>
                                <th>x_grading_trade_raltionship_with_payor_amount</th>
                                <th>x_loan_grading_trade_raltionship_with_payor_amount</th>
                                <th>line_facility_flag</th>
                                <th>line_facility_flag_flag</th>
                                <th>x_line_facility_flag_flag_amount</th>
                                <th>x_loan_line_facility_flag_flag_amount</th>
                                <th>bld_full_paid_date</th>
                                <th>bpd_companay_province</th>
                                <th>bpd_company_postal_code</th>
                                <th>STATUS</th>
                                <th>inv_start_date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchInvestree = $conn ->query("SELECT * FROM investree");
                                $rowFetchInvestree= $sqlFetchInvestree->fetchAll(PDO::FETCH_ASSOC);

                                for($i = 0; $i < count($rowFetchInvestree); $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_id'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_bpd_id'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mbp_name_en'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mbp_name_en_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_cdoc_npwp_masked'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_cdoc_npwp_masked_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_cdoc_menhumkam_register_date'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_cdoc_menhumkam_register_date_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['d_menhumkam_age'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mlt_name'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_invoice_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_cdoc_npwp_masked_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_cdoc_npwp_masked_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bid_invoice_tenor'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['r_inv_tenor_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['r_loan_tenor_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bid_invoice_receipt_date'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bid_invoice_receipt_date_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_invoice_receipt_date_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_receipt_date_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['d_receipt_age'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['marketplace_fee'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['r_marketplace_inv_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['r_loan_marketplace_inv_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_investor_rate'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_loan_disbursement_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['r_loan_disbursement_inv_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['r_loan_disbursement_tenor'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mb_name'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mb_name_category'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mb_name_category_num'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_ratio_mb_name'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcsd_survey_office_status'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcsd_survey_office_status_new'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcsd_survey_office_status_num'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_ratio_survey_office'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcsd_survey_file'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcsd_survey_file_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_survey_file_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_survey_file_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_loan_reg_date'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['invoice_type'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['invoice_type_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcd_doc_name1'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcd_doc_name1_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_doc_name1_invoice'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_doc_name1'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_ratio_doc_name1'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcd_doc_name2'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcd_doc_name2_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_doc_name2_invoice'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_doc_name2'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_ratio_doc_name2'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcd_doc_name3'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bcd_doc_name3_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_doc_name3_invoice'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_doc_name3'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_ratio_doc_name3'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_grace_period'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_loan_tenor'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_loan_due_date'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_loan_tenor_prorate'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_rm_name'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mbbf_name_en'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mbbf_name_en_category'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mbfc_name_en_category'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bmbl_stock_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_stock_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_stock_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bmbl_year_start'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bmbl_status'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bmbl_status_category'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_siup_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_siup_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_tdp_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_tdp_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_est_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_est_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_upd_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_upd_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_skdp_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_skdp_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_skm_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_skm_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_cprofile_upload'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_cprofile_upload_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_finrpt_uploaded'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_finrpt_uploaded_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_bstmt_uploaded'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['doc_bstmt_uploaded_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mr_ct_lang'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mr_ct_lang_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['mbfc_name_en'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_company_year_start'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_company_kab_kot'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_company_kab_kot_new'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_company_fax_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_website_url_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_website_url_flag_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_website_url_flag_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_website_url_flag_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_average_cash_balance'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_average_cash_balance_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_grading_average_cash_balance_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_grading_average_cash_balance_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_lending_relationship_with_bank'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_lending_relationship_with_bank_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_grading_lending_relationship_with_bank_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['Expr2'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_ownership'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_ownership_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_grading_ownership_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_grading_ownership_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_sales_to_payor'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_sales_to_payor_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_grading_sales_to_payor_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_grading_sales_to_payor_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_escrow_accounts'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_escrow_accounts_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_grading_escrow_accounts_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_grading_escrow_accounts_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_payor_credibility'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_payor_credibility_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_trade_relationship_with_payor'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bldf_grading_trade_relationship_with_payor_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_grading_trade_relationship_with_payor_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_grading_trade_relationship_with_payor_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['line_facility_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['line_facility_flag_flag'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_line_facility_flag_flag_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['x_loan_line_facility_flag_flag_amount'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bld_full_paid_date'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_company_province'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['bpd_company_postal_code'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['STATUS'] ?></td>
                                            <td><?= $rowFetchInvestree[$i]['inv_start_date'] ?></td>
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
            $('#table_investree').DataTable({
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
