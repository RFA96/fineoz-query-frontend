<!doctype html>
<html lang="en">

<head>
    <title>Monitoring</title>
    <?php include "../partials/assets_css.php"; ?>

</head>

<body class="bg-white">
<?php include "../partials/topnav.php"; ?>

<div class="container">
    <div class="row py-4">
        <h2 class="mb-4">INDOSAT</h2>
        <div class="table-responsive">
            <table class="table table-flush" id="table_indosat">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Status</th>
                    <th>Gender</th>
                    <th>Age Category</th>
                    <th>Handset Type</th>
                    <th>Handset Brand</th>
                    <th>Total Reload</th>
                    <th>Total Voice Usage</th>
                    <th>Total Sms Usage</th>
                    <th>Total Data Usage</th>
                    <th>Total Voice Duration</th>
                    <th>Total Sms Hit</th>
                    <th>Total Data Byte</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "../partials/assets_js.php"; ?>

<script>
    $('#table_individu, #table_indohome, #table_indosat, #table_media, #table_slik').DataTable({
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