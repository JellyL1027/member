<?php
    session_start();
    include("connect.php");
    if(isset($_POST["action"]) && ($_POST["action"]=="update")){
        $sql = "SELECT * FROM `hw7` WHERE `acc` = '$_SESSION[acc]'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_row($result);
        if (password_verify($_POST["pw"], $row[2]) && $_POST["newPW"] == $_POST["newPW2"]) {
            $pw = $_POST["newPW"];	
            $sql = "UPDATE `hw7` SET ";
            $sql .= "`pw`='".password_hash($_POST["newPW"], PASSWORD_DEFAULT)."' ";
            $sql .= "WHERE `acc`= '$_SESSION[acc]'";	
            mysqli_query($connect, $sql);
            //重新導向回到主畫面
            header("Location: member.php");
        }
        else {
            echo "密碼錯誤!";
        }
    }
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<html>
    <head>
        <meta charset="UTF-8" />
        <title> 會員管理 </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id = "cont" align = "center">
        <h1> 變更密碼 </h1>
        <form action = "changePW.php" method = "post"> 
            <table>
                <tr><th>欄位</th><th>資料</th></tr>
                <tr><td>舊密碼</td><td><input type="text" name="pw" id="pw"></td></tr>
                <tr><td>新密碼</td><td><input type="text" name="newPW" id="newPW"></td></tr>
                <tr><td>新密碼</td><td><input type="text" name="newPW2" id="newPW2"></td></tr>
                <tr>
                <td><input type="submit" name="button" id="button" value="確認更改"></td>
                <td><input type="reset" name="button2" id="button2" value="重新填寫"></td>
                <td><button><a href="member.php" style="text-decoration:none; color: black;"> 返回 </a></button></td>
                <td><input name="action" type="hidden" value="update"></td>
                </tr>
            </table>
        </form>
    </div>
    </body>
</html>