<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "hw7";
    // 連線
    $connect = mysqli_connect($servername, $username, $password, $databasename);
    // 測試連線
    if(!$connect){
        die('連線失敗' . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'utf8mb4');
?>