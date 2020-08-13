<nav class="navbar navbar-horizontal navbar-expand-lg navbar-white navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="../pages/search.php"><img src="../assets/img/brand/fineoz_logo.png"></a><span></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">

            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../pages/search.php">
                            <img src="../assets/img/brand/image-logo.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav ml-lg-auto ml-md-0">
                <li class="nav-item dropdown">
                    <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="../assets/img/theme/avatar.png">
                    </span>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bold-down"></i>
                        <span class="nav-link-inner--text d-lg-none">Settings</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">
                            <i class="ni ni-single-02"></i>
                            <span>Sondang</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <a href="../action/logout.php" class="dropdown-item" onclick="return confirm('Yakin ingin keluar?')">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>