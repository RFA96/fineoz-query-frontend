<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Modal Antara</title>
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
                <h2 class="mb-4">DETAILS MODAL ANTARA PEMINJAM</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_modalantara1">
                        <thead class="thead-light">
                            <tr>
                                <th>no</th>
                                <th>mitra_id</th>
                                <th>nama_lengkap</th>
                                <th>tanggal_lahir</th>
                                <th>tipe_mitra</th>
                                <th>pekerjaan</th>
                                <th>nama_perusahaan</th>
                                <th>bidang_pekerjaan_perusahaan</th>
                                <th>id_card</th>
                                <th>pengalaman_kerja</th>
                                <th>jabatan_id</th>
                                <th>pendapatan</th>
                                <th>nomor_bpjs</th>
                                <th>status_kawin</th>
                                <th>jumlah_tanggungan</th>
                                <th>pendidikan</th>
                                <th>nomor_ktp</th>
                                <th>nomor_cc</th>
                                <th>no_npwp</th>
                                <th>kepemilikan</th>
                                <th>alamat_sesuai_ktp</th>
                                <th>kelengkapan_dokumen</th>
                                <th>frekuensi_pinjaman</th>
                                <th>frekuensi_denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchModalAntaraP = $conn ->query("SELECT * FROM modal_antara_peminjam");
                                $rowFetchModalAntaraT= $sqlFetchModalAntaraP->fetchAll(PDO::FETCH_ASSOC);

                                for($i = 0; $i < count($rowFetchModalAntaraT); $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['mitra_id'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nama_lengkap'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['tanggal_lahir'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['tipe_mitra'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['pekerjaan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nama_perusahaan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['bidang_pekerjaan_perusahaan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['id_card'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['pengalaman_kerja'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['jabatan_id'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['pendapatan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nomor_bpjs'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['status_kawin'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['jumlah_tanggungan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['pendidikan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nomor_ktp'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nomor_cc'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['no_npwp'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['kepemilikan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['alamat_sesuai_ktp'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['kelengkapan_dokumen'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['frekuensi_pinjaman'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['frekuensi_denda'] ?></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row py-2">
                <h2 class="mb-4 mt-6">DETAILS MODAL ANTARA TRANSAKSI</h2>
                <div class="table-responsive mb-6">
                    <table class="table table-flush" id="table_modalantara2">
                        <thead class="thead-light">
                            <tr>
                                <th>no</th>
                                <th>project_id</th>
                                <th>mitra_id</th>
                                <th>pinjaman</th>
                                <th>invoice_tenor</th>
                                <th>loan_tenor</th>
                                <th>tenor_satuan</th>
                                <th>due_date</th>
                                <th>jatuh_tenggang</th>
                                <th>paid_date</th>
                                <th>cicilan_biaya</th>
                                <th>paid_amount</th>
                                <th>nama_produk</th>
                                <th>status</th>
                                <th>keterangan</th>
                                <th>bank_id</th>
                                <th>nama_bank</th>
                                <th>angsuran_ke</th>
                                <th>date_time_entry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchModalAntaraT = $conn ->query("SELECT * FROM modal_antara_transaksi");
                                $rowFetchModalAntaraT= $sqlFetchModalAntaraT->fetchAll(PDO::FETCH_ASSOC);

                                for($i = 0; $i < count($rowFetchModalAntaraT); $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['project_id'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['mitra_id'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['pinjaman'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['invoice_tenor'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['loan_tenor'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['tenor_satuan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['due_date'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['jatuh_tenggang'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['paid_date'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['cicilan_biaya'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['paid_amount'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nama_produk'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['status'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['keterangan'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['bank_id'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['nama_bank'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['angsuran_ke'] ?></td>
                                            <td><?= $rowFetchModalAntaraT[$i]['date_time_entry'] ?></td>
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
            $('#table_modalantara1, #table_modalantara2').DataTable({
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
