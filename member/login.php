<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="UTF-8">
        <title> 會員管理 </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="cont">
            <h1> 會員登入 </h1>
            <form action = "member.php" method = "post"> 
                <table>
                    <tr><td> 帳號: </td> <td><input type="text" id = "acc" name = "acc" required></td></tr>
                    <tr><td> 密碼: </td> <td><input type="password" id = "pw" name = "pw" required></td></tr>
                    <tr><td><input type="submit" id = "login" name = "login" value = "登入"></td>
                    <td><button><a href="createAcc.php" style="text-decoration:none; color: black;"> 加入會員 </a></button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>