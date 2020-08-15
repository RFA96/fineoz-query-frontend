<?php
    include "../config.php";

    $phone = isset($_POST['phone']) ? $_POST['phone'] : $_GET['phone'];
    $name = isset($_POST['full_name']) ? $_POST['full_name'] : $_GET['full_name'];

    $querySearchPhone = $conn->prepare("SELECT full_name, alamat_sesuai_dgn_ktp, jenis_profesi_, no_hp, nama_usaha, jenis_bidang_usaha, rata_keuntungan_perbulan, hutang_usaha FROM indofund_10 WHERE no_hp = :phone OR full_name = :fullName");
    $querySearchPhone->bindParam(':phone', $phone);
    $querySearchPhone->bindParam(':fullName', $name);
    $querySearchPhone->execute();

    $rowSearchPhone = $querySearchPhone->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rowSearchPhone, JSON_PRETTY_PRINT);