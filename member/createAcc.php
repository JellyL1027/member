<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="UTF-8">
        <title> 會員管理 </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="cont">
            <h1> 加入會員 </h1>
            <form action = "checkCreateAcc.php" method = "post"> 
                <table>
                    <tr><td> 帳號: </td><td><input type="text" id = "acc" name = acc required></td></tr>
                    <tr><td> 密碼: </td><td><input type="password" id = "pw" name = "pw" required></td></tr>
                    <tr><td> 確認密碼: </td><td><input type="password" id = "checkPW" name = "checkPW"></td></tr>
                    <tr><td> 性別: </td>
                    <td><select name="gender">
                    <option value= "男"> 男 </option>
                    <option value= "女"> 女 </option>
                    </select></td></tr>

                    <tr><td> 寵物: </td>
                    <td><select name="pets">
                    <option value= "貓"> 貓 </option>
                    <option value= "狗"> 狗 </option>
                    <option value= "熊"> 熊 </option>
                    <option value= "其他"> 其他 </option>
                    </select></td></tr>

                    <tr><td> 運動: </td>
                    <td><select name="sports">
                    <option value= "籃球"> 籃球 </option>
                    <option value= "足球"> 足球 </option>
                    <option value= "排球"> 排球 </option>
                    <option value= "其他球"> 其他球 </option>
                    <option value= "其他不是球"> 其他不是球 </option>
                    </select></td></tr>
                    <tr><td><input type="submit" id = "confirm" value = "確認"></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>