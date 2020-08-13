<?php
    include "config.php";

    session_start();

    function getFUllDOBIndonesia($bln)
    {
        $month = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        $explode = explode('-', $bln);
        return $explode[2]." ".$month[(int)$explode[1]]." ".$explode[0];
    }

    if(!isset($_SESSION['api_key'])){
        $_SESSION['error_message'] = "You must login to see this app!";
        $_SESSION['status'] = "failed";
        header("Location: ../");
        return exit();
    }