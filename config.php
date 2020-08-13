<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = '';

    date_default_timezone_set("Asia/Jakarta");
    $myPDO = new PDO('mysql:host='.$host.';dbname='.$database,$username,$password);
