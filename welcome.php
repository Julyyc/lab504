<?php
session_start();  //很重要，可以用的變數存在session裡
$username = $_SESSION["username"];
echo "<h1>你好 " . $username . "</h1>";
echo "<a href='logout.php'>登出</a>";
?>

<!DOCTYPE html>
<html>

<head>

    <title>Realtime communication with PI</title>

    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <h1>Realtime communication with WebRTC</h1>

    <video autoplay playsinline></video>

    <script src="video1.js"></script>

</body>

</html>