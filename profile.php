<?php 
    session_start();
	include("connect.php");
	$sql = "SELECT * FROM `hw7` WHERE `acc` = '$_SESSION[acc]'";
	$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="UTF-8">
        <title> 會員管理 </title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <style type = "text/css">
            table {
                font-size: 15pt;
            }
            caption {
                font-weight: bold;
                font-size: 20pt;
            }
        </style>
    </head>
    <body>
        <div id="cont" align = "center">
            <table>
                <caption> 個人資料 </caption>
                <!-- 表格表頭 -->
                <tr>
                    <th> 帳號 </th>
                    <th> 密碼 </th>
                    <th> 性別 </th>
                    <th> 寵物 </th>
                    <th> 運動 </th>
                </tr>
                <!-- 資料內容 -->
                <?php
                    while($row_result=mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row_result["acc"]."</td>";
                        echo "<td> *** </td>";
                        echo "<td>".$row_result["gender"]."</td>";
                        echo "<td>".$row_result["pets"]."</td>";
                        echo "<td>".$row_result["sports"]."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <button style="width:70px;height:30px"><a href="member.php" style="text-decoration:none; color: black;"> 返回 </a></button>
        </div>
    </body>
</html>