<?php
    session_start();
    include "../config.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $loginQuery = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $loginQuery->bindParam(':username', $username);
    $loginQuery->bindParam(':password', $password);
    $loginQuery->execute();
    $rowLoginQuery = $loginQuery->fetchAll(PDO::FETCH_ASSOC);

    if($loginQuery->rowCount() == 1) {
        $_SESSION['username'] = $rowLoginQuery[0]['username'];
        header("Location: ../pages/list_card.php");
    } else {
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = 'Username or password is wrong!';
        header("Location: ../");
    }