<?php
    session_start();
?>
    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ваш профиль</title>
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>
<form>
    <h2 style="font-size: 100px;font-weight: 200;color: #999966;text-shadow: 0px 0px 5px #FF0000, 0px 0px 10px #FF0000, 0px 0px 10px #FF0000,0px 0px 20px #FF0000;"><?= $_SESSION['user']['username'] ?></h2>
    <a href="#" style="font-size: 100px;font-weight: 200;color: #999966;text-shadow: 0px 0px 5px #FF0000, 0px 0px 10px #FF0000, 0px 0px 10px #FF0000,0px 0px 20px #FF0000;"><?= $_SESSION['user']['email'] ?></a>
</form>


</body>


</html>
