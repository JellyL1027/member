<?php 
    session_start();
    include("connect.php");
    if(isset($_POST["action"]) && ($_POST["action"]=="update")){	
    	$sql = "UPDATE `hw7` SET ";
	    $sql .= "`gender`='".$_POST["gender"]."',";
	    $sql .= "`pets`='".$_POST["pets"]."',";
	    $sql .= "`sports`='".$_POST["sports"]."' ";
	    $sql .= "WHERE `acc`= '$_SESSION[acc]'";	
	    mysqli_query($connect, $sql);
	    //重新導向回到主畫面
	    header("Location: member.php");
    }
    $sql = "SELECT * FROM `hw7` WHERE `acc` = '$_SESSION[acc]'";
    $result = mysqli_query($connect, $sql);
    $row_result=mysqli_fetch_assoc($result);
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
            <h1> 修改資料 </h1>
            <form action = "changeProfile.php" method = "post"> 
                <table>
                    <tr><td> 性別: </td>
                    <td><select name="gender">
                    <option value= "男" <?php if($row_result["gender"]=="男") echo "selected";?>> 男 </option>
                    <option value= "女" <?php if($row_result["gender"]=="女") echo "selected";?>> 女 </option>
                    </select></td></tr>

                    <tr><td> 寵物: </td>
                    <td><select name="pets">
                    <option value= "貓" <?php if($row_result["pets"]=="貓") echo "selected";?>> 貓 </option>
                    <option value= "狗" <?php if($row_result["pets"]=="狗") echo "selected";?>> 狗 </option>
                    <option value= "熊" <?php if($row_result["pets"]=="熊") echo "selected";?>> 熊 </option>
                    <option value= "其他" <?php if($row_result["pets"]=="其他") echo "selected";?>> 其他 </option>
                    </select></td></tr>

                    <tr><td> 運動: </td>
                    <td><select name="sports">
                    <option value= "籃球" <?php if($row_result["sports"]=="籃球") echo "selected";?>> 籃球 </option>
                    <option value= "足球" <?php if($row_result["sports"]=="足球") echo "selected";?>> 足球 </option>
                    <option value= "排球" <?php if($row_result["sports"]=="排球") echo "selected";?>> 排球 </option>
                    <option value= "其他球" <?php if($row_result["sports"]=="其他球") echo "selected";?>> 其他球 </option>
                    <option value= "其他不是球" <?php if($row_result["sports"]=="其他不是球") echo "selected";?>> 其他不是球 </option>
                    </select></td></tr>
                    <tr>
                    <td><input name="action" type="hidden" value="update"></td>
                    <td><input type="submit" name="button" id="button" value="確認更改"></td>
                    <td><input type="reset" name="button2" id="button2" value="重新填寫"></td>
                    <td><button><a href="member.php" style="text-decoration:none; color: black;"> 返回 </a></button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>