<?php

session_start();
include 'DatabaseConnection.php';
$message = array();
if (isset($_POST['uname']) && !empty($_POST['uname'])) {
    $uname = $_POST['uname'];
} else {
    $message[] = 'Please enter username';
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $message[] = 'Please enter password';
}

$countError = count($message);
if ($countError > 0) {
    for ($i = 0; $i < $countError; $i++) {
        echo ucwords($message[$i]) . '<br/><br/>';
    }
} else {
    $query = "SELECT *  FROM member where username =? AND password =?";
    $STH = $DBH->prepare($query);
    $STH->bindParam(1, $uname);
    $STH->bindParam(2, $password);
    $STH->execute();
    $result = $STH->fetchAll();
    $count = $STH->rowCount();
    if ($count > 0) {
        $_SESSION['LOGIN_STATUS'] = true;
        $_SESSION['UNAME'] = $uname;
        echo 'correct';
    } else {
        echo ucwords('please enter correct user details');
    }
}
?>

