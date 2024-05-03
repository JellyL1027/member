<?php
    session_start();
    include("connect.php");
    if(isset($_POST["login"])) {
        $acc = $_POST["acc"];
        $pw = $_POST["pw"];

        // 搜尋資料庫
        $sql = "SELECT * FROM `hw7` WHERE `acc` = '$acc'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_row($result);
        $nums = mysqli_num_rows($result);
        // 判斷帳號是否已被注冊
        if ($nums == 0) {
            echo '查無此帳號!';
            header("Refresh:1, url=login.php");
            exit;
        }
        if ($row[1] == $acc && password_verify($pw, $row[2])) {
            //將帳號寫入session，方便驗證使用者身份
            $_SESSION['acc'] = $acc;
        }
        else {
            echo '登入失敗!';
            header("Refresh:1, url=login.php");
            exit;
        }
    }  
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="UTF-8">
        <title> 會員管理 </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="cont">
            <h1> 歡迎 </h1>
            <table>
                <tr><td><button style="width:120px;height:40px;font-size:13pt"><a href="profile.php" style="text-decoration:none; color: black;"> 瀏覽資料 </a></button></td>
                <td><button style="width:120px;height:40px;font-size:13pt"><a href="changeProfile.php" style="text-decoration:none; color: black;"> 修改資料 </a></button></td>
                <td><button style="width:120px;height:40px;font-size:13pt"><a href="changePW.php" style="text-decoration:none; color: black;"> 變更密碼 </a></button></td>
                <td><button style="width:120px;height:40px;font-size:13pt"><a href="logout.php" style="text-decoration:none; color: black;"> 登出 </a></button></td>
                </tr>      
            </table>
        </div>
    </body>
</html>