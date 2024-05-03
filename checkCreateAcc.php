<?php
    session_start();
    include("connect.php");
    $acc = $_POST["acc"];
    $pw = $_POST["pw"];
    $checkPW = $_POST["checkPW"];
    $gender = $_POST["gender"];
    $pets = $_POST["pets"];
    $sports = $_POST["sports"];

    // 判斷帳號是否已被注冊
    $sql = "SELECT * FROM `hw7` WHERE `acc` = '$acc'";
    $result = mysqli_query($connect, $sql);
    $nums = mysqli_num_rows($result);
    if ($nums == 1) {
        echo '帳號已被注冊';
        header("Refresh:2, url=login.php");
        exit;
    }
    
    if ($pw == $checkPW) {
        //新增資料進資料庫語法
        $pwdHash=password_hash($pw, PASSWORD_DEFAULT);
        $sql = "insert into hw7(acc, pw, gender, pets, sports) values('$acc', '$pwdHash', '$gender', '$pets', '$sports')";
        mysqli_query($connect, $sql);
        echo '新增成功!';
        header("Refresh:2, url=login.php");
    }
    else {
        echo '密碼錯誤!';
        header("Refresh:2, url=createAcc.php");
    }
?>