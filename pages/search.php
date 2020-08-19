<?php include "../session.php";?>
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
                <div class="mt-4">
                    <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="list_card.php" class="text-white"><i class="fas fa-angle-left"></i> Back</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-lg-6">
                    <div class="card card-stats">
                        <div class="card-body">
                            <h2 class="text-center">Search</h2>
                            <hr/>
                            <form>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                    <input class="form-control" type="text" name="full_name" id="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="form-control-label">Mobile Number</label>
                                    <input class="form-control" type="text" name="msisdn" id="msisdn" placeholder="Mobile Number">
                                </div>
                                <button class="btn btn-primary" type="button" id="btn_search">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <h2>INDOFUND</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_indofund">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Alamat Lengkap</th>
                                <th>Pekerjaan</th>
                                <th>Nomor HP</th>
                                <th>Nama Usaha</th>
                                <th>Kategori Jenis Usaha</th>
                                <th>Profit per Bulan (Rata-Rata)</th>
                                <th>Hutang Usaha</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr/>
            <div class="row">
                <h2>INDOSAT</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_indosat">
                        <thead class="thead-light">
                            <tr>
                                <th>MSISDN</th>
                                <th>Status Pelanggan</th>
                                <th>Tipe Pelanggan</th>
                                <th>Jenis Kelamin</th>
                                <th>Kota</th>
                                <th>Merk HP</th>
                                <th>Jumlah Pemakaian</th>
                                <th>Jumlah Pemakaian Data (dalam MB)</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr/>
            <div class="row">
                <h2>INDIHOME</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_indihome">
                        <thead class="thead-light">
                            <tr>
                                <th>Nomor Telepon</th>
                                <th>Kategori Umur</th>
                                <th>Status Sosial Ekonomi</th>
                                <th>Lama Tinggal</th>
                                <th>Kecepatan Internet</th>
                                <th>Penggunaan Telepon</th>
                                <th>ARPU</th>
                                <th>Tanggal Pengaktifan</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <?php include "../partials/assets_js.php"; ?>
        <script>
            let tableIndihome = $("#table_indihome");
            let tableIndofund = $("#table_indofund");
            let tableIndosat = $("#table_indosat");
            let tableDukcapil = $("#table_dukcapil");
            $("#table_indihome, #table_indofund, #table_indosat, #table_dukcapil").DataTable({
                ordering: false,
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            });

            $("#btn_search").on('click', function () {
                let msisdn = $("#msisdn").val();
                let fullName = $("#full_name").val();
                tableIndihome.DataTable().clear().destroy();
                tableIndihome.DataTable({
                    ordering: false,
                    language: {
                        paginate: {
                            previous: "<i class='fas fa-angle-left'>",
                            next: "<i class='fas fa-angle-right'>"
                        }
                    },
                    ajax: {
                        url: '../api/search_indihome.php',
                        type: "POST",
                        dataSrc: "",
                        data: {phone: msisdn}
                    },
                    columns: [
                        {data: "phone"},
                        {data: "_AGE_CATEGORY_"},
                        {data: "_SOSIAL_ECO_STATUS_"},
                        {data: "_LENGTH_OF_STAY_"},
                        {data: "_SPEED_INTERNET_"},
                        {data: "_PHONE_NUMBER_DURATION_"},
                        {data: "_ARPU_"},
                        {data: "_ACTIVATION_"},
                    ]
                });

                tableIndofund.DataTable().clear().destroy();
                tableIndofund.DataTable({
                    ordering: false,
                    language: {
                        paginate: {
                            previous: "<i class='fas fa-angle-left'>",
                            next: "<i class='fas fa-angle-right'>"
                        }
                    },
                    ajax: {
                        url: '../api/search_indofund.php',
                        type: "POST",
                        dataSrc: "",
                        data: {phone: msisdn, full_name: fullName}
                    },
                    columns: [
                        {data: "full_name"},
                        {data: "alamat_sesuai_dgn_ktp"},
                        {data: "jenis_profesi_"},
                        {data: "no_hp"},
                        {data: "nama_usaha"},
                        {data: "jenis_bidang_usaha"},
                        {data: "rata_keuntungan_perbulan"},
                        {data: "hutang_usaha"},
                    ]
                });

                tableIndosat.DataTable().clear().destroy();
                tableIndosat.DataTable({
                    ordering: false,
                    language: {
                        paginate: {
                            previous: "<i class='fas fa-angle-left'>",
                            next: "<i class='fas fa-angle-right'>"
                        }
                    },
                    ajax: {
                        url: '../api/search_indosat.php',
                        type: "POST",
                        dataSrc: "",
                        data: {phone: msisdn}
                    },
                    columns: [
                        {data: "phone"},
                        {data: "status"},
                        {data: "subscriber_type"},
                        {data: "gender"},
                        {data: "city_kabupaten"},
                        {data: "handset_brand"},
                        {data: "vol_of_usg"},
                        {data: "data_usage_in_mb"},
                    ]
                });
            });
        </script>
    </body>

</html>