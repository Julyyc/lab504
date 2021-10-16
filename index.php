<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>登入介面</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="login">
        <form class="form" method="post" action="login.php">
            <h1>使 用 者 登 入 系 統</h1>
            <div class="group">
                <label>帳號：</label>
                <input type="text" name="username"><br /><br />
                <label>密碼：</label>
                <input type="password" name="password"><br><br>
            </div>
            <div class="HP">
                <input class="btn" type="submit" value="登入" name="submit">
                <a class="btns" href="register.html"><input class="btn" type="button" onclick="window.location.herf" value="註冊" name="submit"></a>
            </div>
    </div>
    </form>
</body>

</html>