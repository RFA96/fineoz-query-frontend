<?php include "../config.php";?>
<!doctype html>
<html lang="en">

    <head>
        <title>BSM</title>
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
                <h2 class="mb-4">DETAILS BSM MANDIRI</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_bsm_mandiri">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>NOLOAN</th>
                                <th>RESTRUCTFLAG</th>
                                <th>OSPOKOKCONVERSION</th>
                                <th>kdcabangupdate (gabung)</th>
                                <th>nmcabangupdate (gabung)</th>
                                <th>produk Lama</th>
                                <th>produk</th>
                                <th>Status Outlet</th>
                                <th>Keterangan KOL OK</th>
                                <th>Keterangan Pencairan</th>
                                <th>Keterangan</th>
                                <th>NPF Lainnya</th>
                                <th>NPF 1 Tahun</th>
                                <th>NPF 2 Tahun</th>
                                <th>KOL 2</th>
                                <th>Lancar Lainnya</th>
                                <th>Lancar 6 Bulan</th>
                                <th>Lancar 1 Tahun</th>
                                <th>Lancar 1,5 Tahun</th>
                                <th>Lancar 2 Tahun</th>
                                <th>Ags17</th>
                                <th>Sept17</th>
                                <th>Okt17</th>
                                <th>Nov17</th>
                                <th>Des17</th>
                                <th>Jan18</th>
                                <th>Feb18</th>
                                <th>Mar18</th>
                                <th>Apr18</th>
                                <th>Mei18</th>
                                <th>Jun18</th>
                                <th>Jul18</th>
                                <th>Ags18</th>
                                <th>Sept18</th>
                                <th>Okt18</th>
                                <th>Nov18</th>
                                <th>Des18</th>
                                <th>Jan19</th>
                                <th>Feb19</th>
                                <th>Mar19</th>
                                <th>Apr19</th>
                                <th>Mei19</th>
                                <th>Juni19</th>
                                <th>Juli19</th>
                                <th>cek</th>
                                <th>Ags171</th>
                                <th>Sept171</th>
                                <th>Okt171</th>
                                <th>Nov171</th>
                                <th>Des171</th>
                                <th>Jan181</th>
                                <th>Feb181</th>
                                <th>Mar181</th>
                                <th>Apr181</th>
                                <th>Mei181</th>
                                <th>Jun181</th>
                                <th>Jul181</th>
                                <th>Ags181</th>
                                <th>Sept181</th>
                                <th>Okt181</th>
                                <th>Nov181</th>
                                <th>Des181</th>
                                <th>Jan191</th>
                                <th>Feb191</th>
                                <th>Mar191</th>
                                <th>Apr191</th>
                                <th>Mei191</th>
                                <th>Juni191</th>
                                <th>Juli191</th>
                                <th>Okt16</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchBsmMandiri = $conn->query("SELECT * FROM bsm_mandiri_kol");
                                $rowFetchBsmMandiri = $sqlFetchBsmMandiri->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchBsmMandiri); $i++){
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['NOLOAN']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['RESTRUCTFLAG']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['OSPOKOKCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['kdcabangupdate (gabung)']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['nmcabangupdate (gabung)']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['produk Lama']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['produk']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Status Outlet']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Keterangan KOL OK']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Keterangan Pencairan']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Keterangan']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['NPF Lainnya']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['NPF 1 Tahun']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['NPF 2 Tahun']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['KOL 2']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Lancar Lainnya']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Lancar 6 Bulan']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Lancar 1 Tahun']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Lancar 1,5 Tahun']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Lancar 2 Tahun']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Ags17']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Sept17']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Okt17']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Nov17']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Des17']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jan18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Feb18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mar18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Apr18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mei18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jun18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jul18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Ags18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Sept18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Okt18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Nov18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Des18']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jan19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Feb19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mar19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Apr19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mei19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Juni19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Juli19']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['cek']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Ags171']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Sept171']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Okt171']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Nov171']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Des171']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jan181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Feb181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mar181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Apr181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mei181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jun181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jul181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Ags181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Sept181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Okt181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Nov181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Des181']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Jan191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Feb191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mar191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Apr191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Mei191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Juni191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Juli191']?></td>
                                            <td><?= $rowFetchBsmMandiri[$i]['Okt16']?></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row py-2">
                <h2 class="mb-4 mt-6">DETAILS BSM MIKRO</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_bsm_mikro">
                        <thead class="thead-light">
                            <tr>
                                <th>no</th>
                                <th>FICMISDATE</th>
                                <th>NoLoanAB</th>
                                <th>NOLOAN</th>
                                <th>NOMORCIF</th>
                                <th>NAMALENGKAP</th>
                                <th>KodeCabangLama</th>
                                <th>KODECABANGBARU</th>
                                <th>NAMACABANG</th>
                                <th>JENISPIUTANGPEMBIAYAAN</th>
                                <th>JENISPENGGUNAANCODE</th>
                                <th>SEKTOREKONOMICODE</th>
                                <th>TGLPENCAIRAN</th>
                                <th>tahun</th>
                                <th>TGl Cair</th>
                                <th>TGl Angsuran</th>
                                <th>TGLJTTEMPO</th>
                                <th>DAYPASTDUE</th>
                                <th>DIVISI</th>
                                <th>CURRENCY</th>
                                <th>LOANTYPE</th>
                                <th>CATEGORY</th>
                                <th>RESTRUCTFLAG</th>
                                <th>PRICING</th>
                                <th>REKPEMBYPOKOK</th>
                                <th>TENOR</th>
                                <th>RESTRUCTDATE</th>
                                <th>KOLBSM</th>
                                <th>KOLCIF</th>
                                <th>SOURCEDATACODE</th>
                                <th>OSPOKOKCONVERSION</th>
                                <th>OSMARGINCONVERSION</th>
                                <th>OSGROSSCONVERSION</th>
                                <th>TUNGGAKANPOKOKCONVERSION</th>
                                <th>TUNGGAKANMARGINCONVERSION</th>
                                <th>TUNGGAKANGROSSCONVERSION</th>
                                <th>PENCAIRANPOKOKCONVERSION</th>
                                <th>PENCAIRANMARGINCONVERSION</th>
                                <th>PENCAIRANGROSSCONVERSION</th>
                                <th>REALISASI_BAGIHASIL</th>
                                <th>PROYEKSI_BAGIHASIL</th>
                                <th>ACCOUNTOFFICER</th>
                                <th>ACCOUNTOFFICER2</th>
                                <th>EQVRATE</th>
                                <th>INTEREST_RATE</th>
                                <th>MISACCOUNTOFFICR</th>
                                <th>NAMAPERUSAHAANNASABAH</th>
                                <th>LD_ECONOMICSECTOR</th>
                                <th>TUNGGAKANPINALTYCONVERSION</th>
                                <th>NAPNO</th>
                                <th>CompanyName</th>
                                <th>kdcabangupdate</th>
                                <th>nmcabangupdate</th>
                                <th>kdcabangupdate (gabung)</th>
                                <th>nmcabangupdate (gabung)</th>
                                <th>produk Lama</th>
                                <th>posting</th>
                                <th>KolLalu</th>
                                <th>KolBSM_lalu</th>
                                <th>JenisKelamin</th>
                                <th>Umur</th>
                                <th>StatusPernikahan</th>
                                <th>pendidikan</th>
                                <th>saldo_rekening</th>
                                <th>SchedDueAmtPokok</th>
                                <th>SchedDueAmtMargin</th>
                                <th>SchedDueAmt</th>
                                <th>SchedDate</th>
                                <th>AreaMicroBanking</th>
                                <th>AreaMicroBanking New</th>
                                <th>Region</th>
                                <th>Region New</th>
                                <th>AREA DSG</th>
                                <th>AREA DSG New</th>
                                <th>SCHEDTYPE</th>
                                <th>SOCODE</th>
                                <th>PEKERJAAN</th>
                                <th>SEGMENTASI</th>
                                <th>LoanTypeDesc</th>
                                <th>produk blm Cleansing</th>
                                <th>produk</th>
                                <th>Tujuan Penggunaan</th>
                                <th>kdpmm</th>
                                <th>nmpmm</th>
                                <th>nmmfs</th>
                                <th>milik</th>
                                <th>TlpAktif</th>
                                <th>NomorTelpRmh_Kantor_Ponsel_Fax</th>
                                <th>Sistem kerjasama</th>
                                <th>Sektor Usaha Aliansi</th>
                                <th>Asuransi Jiwa</th>
                                <th>Asuransi Penjaminan</th>
                                <th>Asuransi Kerugian</th>
                                <th>Kode Program</th>
                                <th>STS_PENCAIRAN</th>
                                <th>Ket Cair</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Kelompok Sektor Ekonomi (Format LSMK)</th>
                                <th>Kelompok Sektor Ekonomi (Format Reporting Package Mandiri)</th>
                                <th>JENISAGUNAN</th>
                                <th>JENISPENGIKATAN</th>
                                <th>BUKTIKEPEMILIKAN</th>
                                <th>Cek</th>
                                <th>Nama Pemutus</th>
                                <th>Jabatan Pemutus</th>
                                <th>Sektor Unggulan</th>
                                <th>Sektor Ekonomi</th>
                                <th>Sektor Usaha</th>
                                <th>Jenis Usaha</th>
                                <th>Radius</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlFetchBsmMikro = $conn->query("SELECT * FROM bsm_mikro");
                                $rowFetchBsmMikro = $sqlFetchBsmMikro->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($rowFetchBsmMandiri); $i++){
                                    ?>
                                        <tr>
                                            <td><?= $i+1?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['FICMISDATE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NoLoanAB']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NOLOAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NOMORCIF']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NAMALENGKAP']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['KodeCabangLama']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['KODECABANGBARU']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NAMACABANG']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['JENISPIUTANGPEMBIAYAAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['JENISPENGGUNAANCODE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SEKTOREKONOMICODE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TGLPENCAIRAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['tahun']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TGl Cair']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TGl Angsuran']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TGLJTTEMPO']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['DAYPASTDUE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['DIVISI']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['CURRENCY']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['LOANTYPE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['CATEGORY']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['RESTRUCTFLAG']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['PRICING']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['REKPEMBYPOKOK']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TENOR']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['RESTRUCTDATE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['KOLBSM']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['KOLCIF']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SOURCEDATACODE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['OSPOKOKCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['OSMARGINCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['OSGROSSCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TUNGGAKANPOKOKCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TUNGGAKANMARGINCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TUNGGAKANGROSSCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['PENCAIRANPOKOKCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['PENCAIRANMARGINCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['PENCAIRANGROSSCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['REALISASI_BAGIHASIL']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['PROYEKSI_BAGIHASIL']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['ACCOUNTOFFICER']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['ACCOUNTOFFICER2']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['EQVRATE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['INTEREST_RATE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['MISACCOUNTOFFICR']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NAMAPERUSAHAANNASABAH']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['LD_ECONOMICSECTOR']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TUNGGAKANPINALTYCONVERSION']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NAPNO']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['CompanyName']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['kdcabangupdate']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['nmcabangupdate']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['kdcabangupdate (gabung)']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['nmcabangupdate (gabung)']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['produk Lama']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['posting']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['KolLalu']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['KolBSM_lalu']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['JenisKelamin']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Umur']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['StatusPernikahan']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['pendidikan']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['saldo_rekening']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SchedDueAmtPokok']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SchedDueAmtMargin']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SchedDueAmt']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SchedDate']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['AreaMicroBanking']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['AreaMicroBanking New']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Region']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Region New']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['AREA DSG']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['AREA DSG New']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SCHEDTYPE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SOCODE']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['PEKERJAAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['SEGMENTASI']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['LoanTypeDesc']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['produk blm Cleansing']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['produk']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Tujuan Penggunaan']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['kdpmm']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['nmpmm']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['nmmfs']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['milik']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['TlpAktif']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['NomorTelpRmh_Kantor_Ponsel_Fax']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Sistem kerjasama']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Sektor Usaha Aliansi']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Asuransi Jiwa']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Asuransi Penjaminan']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Asuransi Kerugian']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Kode Program']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['STS_PENCAIRAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Ket Cair']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Alamat']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Kota']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Provinsi']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Kelompok Sektor Ekonomi (Format LSMK)']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Kelompok Sektor Ekonomi (Format Reporting Package Mandiri)']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['JENISAGUNAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['JENISPENGIKATAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['BUKTIKEPEMILIKAN']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Cek']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Nama Pemutus']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Jabatan Pemutus']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Sektor Unggulan']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Sektor Ekonomi']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Sektor Usaha']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Jenis Usaha']?></td>
                                            <td><?= $rowFetchBsmMikro[$i]['Radius']?></td>
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
            $('#table_bsm_mandiri, #table_bsm_mikro').DataTable({
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