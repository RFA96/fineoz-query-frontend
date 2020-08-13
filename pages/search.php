<!doctype html>
<html lang="en">

    <head>
        <title>Monitoring</title>

        <?php include "../partials/assets_css.php"; ?>
    </head>

    <body class="bg-white">
        <?php include "../partials/topnav.php"; ?>

        <div class="container">
            <div class="row justify-content-center py-4">
                <div style="width: 30rem;">
                    <div class="card card-stats mr-4">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Search</h2>
                            <form>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                    <input class="form-control" type="text" placeholder="Full Name" id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="form-control-label">ID KTP</label>
                                    <input class="form-control" type="number" placeholder="ID KTP" id="keyword">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="form-control-label">Mobile Number</label>
                                    <input class="form-control" type="number" placeholder="Mobile Number" id="example-email-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="form-control-label">Fixed Phone</label>
                                    <input class="form-control" type="number" placeholder="Fixed Phone" id="example-url-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-tel-input" class="form-control-label">SocMedID</label>
                                    <input class="form-control" type="text" placeholder="Social Media" id="example-tel-input">
                                </div>
                                <button class="btn btn-primary" type="button" id="btn-search">Button</button>
                                <button class="btn btn-warning" type="button">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <h2>INDIVIDU</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_individu">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Sound</th>
                            <th>Video</th>
                            <th>Photo</th>
                            <th>Organization</th>
                            <th>Political Party</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <br/>
            <div class="row">
                <h2>SOCIAL MEDIA</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_media">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Instagram</th>
                            <th>Linkedin</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <br/>
            <div class="row">
                <h2>SLIK</h2>
                <div class="table-responsive">
                    <table class="table table-flush" id="table_slik">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>ID KTP</th>
                            <th>Bank Code</th>
                            <th>Account No</th>
                            <th>Initial Contract Date</th>
                            <th>Create Date</th>
                            <th>Guarante Name</th>
                            <th>Currency Code</th>
                            <th>Office Code</th>
                            <th>Collectibility Type</th>
                            <th>BG Amount</th>
                            <th>Collateral Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <br/>
            <div class="row">
                <h2>INDOSAT</h2>
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
            <br/>
            <div class="row">
                <h2>INDIHOME</h2>
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
            /*$('#table_individu, #table_indohome, #table_indosat, #table_media, #table_slik').DataTable({
                ordering:false,
                language:{
                    paginate:{
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            });*/
        </script>

    </body>

</html>