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
        <h2 class="mb-4">INDIHOME</h2>
        <div class="table-responsive">
            <table class="table table-flush" id="table_indohome">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>ID KTP</th>
                    <th>Mobile Number</th>
                    <th>TV Duration</th>
                    <th>Channel TV</th>
                    <th>Payment Date</th>
                    <th>TV Program</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                    <th>Activation</th>
                    <th>Birth Date</th>
                    <th>Province</th>
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