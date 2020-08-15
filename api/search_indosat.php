<?php
    include "../config.php";

    $phone = isset($_POST['phone']) ? $_POST['phone'] : $_GET['phone'];

    $querySearchPhone = $conn->prepare("SELECT phone, status, subscriber_type, gender, city_kabupaten, handset_brand, vol_of_usg, data_usage_in_mb FROM indosat_10 WHERE phone = :phone");
    $querySearchPhone->bindParam(':phone', $phone);
    $querySearchPhone->execute();

    $rowSearchPhone = $querySearchPhone->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rowSearchPhone, JSON_PRETTY_PRINT);