<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>Slik</title>
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
                <h2 class="mb-4">DETAILS SLIK</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_slik">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Kode Jenis Pelapor</th>
                                <th>Kode Pelapor</th>
                                <th>Tahun Bulan Data</th>
                                <th>Kode Register atau Nomor Agunan</th>
                                <th>Nomor Rekening Fasilitas</th>
                                <th>Nomor CIF Debitur</th>
                                <th>Kode Jenis Segmen Fasilitas</th>
                                <th>Kode Status Agunan</th>
                                <th>Kode Jenis Agunan</th>
                                <th>Peringkat Agunan</th>
                                <th>Kode Lembaga Pemeringkat</th>
                                <th>Kode Jenis Pengikatan</th>
                                <th>Tanggal Pengikatan</th>
                                <th>Bukti Kepemilikan</th>
                                <th>Alamat Agunan</th>
                                <th>Kode Kabupaten atau Kota Lokasi Agunan</th>
                                <th>Nilai Agunan Sesuai NJOP</th>
                                <th>Nilai Agunan menurut Pelapor</th>
                                <th>Tanggal Penilaian Agunan Menurut Pelapor</th>
                                <th>Nilai Agunan menurut Penilai Independen</th>
                                <th>Nama Penilai Independen</th>
                                <th>Tanggal Penilaian Agunan menurut Penilai Independen</th>
                                <th>Status Paripasu</th>
                                <th>Persentase Paripasu</th>
                                <th>Status Kredit Joint Account</th>
                                <th>Diasuransikan</th>
                                <th>Keterangan</th>
                                <th>Kode Kantor Cabang</th>
                                <th>Operasi Data</th>
                                <th>Status Delete</th>
                                <th>Create Date</th>
                                <th>Update Date</th>
                                <th>LOAD_DATE</th>
                                <th>src_table</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchSlik = $conn->query("SELECT * FROM slik");
                                $rowFetchSlik = $sqlFetchSlik->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchSlik); $i++){
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Jenis Pelapor']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Pelapor']?></td>
                                            <td><?= $rowFetchSlik[$i]['Tahun Bulan Data']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Register atau Nomor Agunan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Nomor Rekening Fasilitas']?></td>
                                            <td><?= $rowFetchSlik[$i]['Nomor CIF Debitur']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Jenis Segmen Fasilitas']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Status Agunan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Jenis Agunan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Peringkat Agunan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Lembaga Pemeringkat']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Jenis Pengikatan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Tanggal Pengikatan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Bukti Kepemilikan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Alamat Agunan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Kabupaten atau Kota Lokasi Agunan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Nilai Agunan Sesuai NJOP']?></td>
                                            <td><?= $rowFetchSlik[$i]['Nilai Agunan menurut Pelapor']?></td>
                                            <td><?= $rowFetchSlik[$i]['Tanggal Penilaian Agunan Menurut Pelapor']?></td>
                                            <td><?= $rowFetchSlik[$i]['Nilai Agunan menurut Penilai Independen']?></td>
                                            <td><?= $rowFetchSlik[$i]['Nama Penilai Independen']?></td>
                                            <td><?= $rowFetchSlik[$i]['Tanggal Penilaian Agunan menurut Penilai Independen']?></td>
                                            <td><?= $rowFetchSlik[$i]['Status Paripasu']?></td>
                                            <td><?= $rowFetchSlik[$i]['Persentase Paripasu']?></td>
                                            <td><?= $rowFetchSlik[$i]['Status Kredit Joint Account']?></td>
                                            <td><?= $rowFetchSlik[$i]['Diasuransikan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Keterangan']?></td>
                                            <td><?= $rowFetchSlik[$i]['Kode Kantor Cabang']?></td>
                                            <td><?= $rowFetchSlik[$i]['Operasi Data']?></td>
                                            <td><?= $rowFetchSlik[$i]['Status Delete']?></td>
                                            <td><?= $rowFetchSlik[$i]['Create Date']?></td>
                                            <td><?= $rowFetchSlik[$i]['Update Date']?></td>
                                            <td><?= $rowFetchSlik[$i]['LOAD_DATE']?></td>
                                            <td><?= $rowFetchSlik[$i]['src_table']?></td>
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