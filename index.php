<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <style>
        .login-page {
            width: 500px;
            padding: 6% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 500px;
            margin: 0 auto 100px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 14px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            /* text-transform: uppercase; */
            outline: 0;
            background: orange;
            width: 100%;
            border: 0;
            padding: 15px;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        /*.form button a{*/
        /*    text-decoration: none;*/
        /*    color:white;*/
        /*}*/

        /*.form button:hover,*/
        /*.form button:active,*/
        /*.form button:focus {*/
        /*    background: #00D1B2;*/
        /*}*/

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 13px;
        }

        .form .message a {
            color: #00D1B2;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .form .logo {
            width: 250px;
            padding-bottom: 35px;
        }

        .form .text1 {
            font-size: 28px;
            text-align: left;
        }

        .form .text2 {
            font-size: 14px;
            text-align: left;
            padding-bottom: 10px;
        }

        .form .line {
            border: 1px solid rgba(0, 0, 0, 0.05);
            margin: 10px;
        }

        .form .login-form {
            padding-top: 35px;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            /* background: url("assets/img/background-image.png"); */
            background-size: cover;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <link rel="icon" type="image/png" href="assets/img/brand/fineoz_icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="assets/img/brand/fineoz_logo.png" class="logo">
                        <hr class="line"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text1"><center><strong>Welcome</strong></center></p>
                        <span class="text2"><center>Login to big database</center></p></span>
                        <hr class="line">
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['status'])){
                        ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong><?= ucfirst($_SESSION['status'])?>!</strong> <?= $_SESSION['message']?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        unset($_SESSION['status']); unset($_SESSION['message']);
                    }
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" action="action/login.php" class="login-form">
                            <input type="text" name="username" placeholder="Username" />
                            <input type="password" name="password" placeholder="password"/>
                            <button type="submit" style="color: white">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>