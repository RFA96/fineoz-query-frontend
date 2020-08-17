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
                <h2 class="mb-4">DETAILS INDOFUND</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_indofund">
                        <thead class="thead-light">
                            <tr>
                                <th>no</th>
                                <th>timestamp</th>
                                <th>full_name</th>
                                <th>email_address</th>
                                <th>no_hp</th>
                                <th>kondisi_ktp</th>
                                <th>kondisi_npwp</th>
                                <th>kondisi_kartu_keluarga</th>
                                <th>kondisi_foto</th>
                                <th>alamat_sesuai_dgn_ktp</th>
                                <th>badan_usaha</th>
                                <th>alamat_saat_ini</th>
                                <th>status_rumah</th>
                                <th>lama_menempati_</th>
                                <th>pekerjaan_lain_</th>
                                <th>jenis_profesi_</th>
                                <th>nama_perusahaan</th>
                                <th>jenis_bidang_usaha</th>
                                <th>kategori_jml_pekerja</th>
                                <th>kategori_jabatan</th>
                                <th>lama_bekerja_dalam_tahun</th>
                                <th>alamat_perusahaan</th>
                                <th>kode_wilayah</th>
                                <th>no_telp_perusahaan</th>
                                <th>afiliasi_perusahaan</th>
                                <th>kondisi_bukti_akte</th>
                                <th>kondisi_siup</th>
                                <th>kondisi_domisili</th>
                                <th>kondisi_daftar_perusahaan</th>
                                <th>kondisi_profil_perusahaan</th>
                                <th>kondisi_laporan_keuangan</th>
                                <th>nama_usaha</th>
                                <th>jml_karyawan</th>
                                <th>kategori_jenis_usaha</th>
                                <th>lama_usaha_dalam_tahun</th>
                                <th>rata_penjualan_perbulan</th>
                                <th>rata_keutungan_perbulan</th>
                                <th>hutang_usaha</th>
                                <th>detail_hutang</th>
                                <th>nominal_hutang</th>
                                <th>kategori_hutang</th>
                                <th>kondisi_buku_tabungan</th>
                                <th>kondisi_dokumentasi_usaha</th>
                                <th>deskripsi_usaha</th>
                                <th>akun_facebook</th>
                                <th>akun_instagram</th>
                                <th>akun_twitter</th>
                                <th>akun_youtube</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchIndofund = $conn ->query("SELECT * FROM indofund_10");
                                $rowFetchIndofund= $sqlFetchIndofund->fetchAll(PDO::FETCH_ASSOC);

                                for($i = 0; $i < count($rowFetchIndofund); $i++) {
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchIndofund[$i]['timestamp'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['full_name'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['email_address'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['no_hp'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_ktp'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_npwp'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_kartu_keluarga'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_foto'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['alamat_sesuai_dgn_ktp'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['badan_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['alamat_saat_ini'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['status_rumah'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['lama_menempati_'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['pekerjaan_lain_'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['jenis_profesi_'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['nama_perusahaan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['jenis_bidang_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kategori_jml_pekerja'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kategori_jabatan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['lama_bekerja_dalam_tahun'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['alamat_perusahaan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kode_wilayah'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['no_telp_perusahaan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['afiliasi_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_bukti_akte'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_siup'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_domisili'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_daftar_perusahaan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_profil_perusahaan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_laporan_keuangan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['nama_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['jml_karyawan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kategori_jenis_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['lama_usaha_dalam_tahun'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['rata_penjualan_perbulan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['rata_keuntungan_perbulan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['hutang_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['detail_hutang'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['nominal_hutang'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kategori_hutang'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_buku_tabungan'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['kondisi_dokumentasi_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['deskripsi_usaha'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['akun_facebook'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['akun_instagram'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['akun_twitter'] ?></td>
                                            <td><?= $rowFetchIndofund[$i]['akun_youtube'] ?></td>
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
            $('#table_indofund').DataTable({
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
