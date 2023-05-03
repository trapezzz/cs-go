<?php
session_start()
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Вход в аккаунт </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<form action="vendor/signin.php" method="post"
<div class="login-form">
    <div class="text">
        LOGIN
    </div>
    <form>
        <div class="field">
            <div class="fas fa-envelope"></div>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="field">
            <div class="fas fa-lock"></div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit">LOGIN</button>
    </form>
</div>
</body>
</html>