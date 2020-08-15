<?php
    include "../config.php";

    $phone = isset($_POST['phone']) ? $_POST['phone'] : $_GET['phone'];

    $querySearchPhone = $conn->prepare("SELECT phone, _AGE_CATEGORY_, _SOSIAL_ECO_STATUS_, _LENGTH_OF_STAY_, _SPEED_INTERNET_, _PHONE_NUMBER_DURATION_, _ARPU_, _ACTIVATION_ FROM indihome_10 WHERE phone = :phone");
    $querySearchPhone->bindParam(':phone', $phone);
    $querySearchPhone->execute();

    $rowSearchPhone = $querySearchPhone->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rowSearchPhone, JSON_PRETTY_PRINT);