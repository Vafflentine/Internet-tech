<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .block {
            margin-top: -100px;
        }
        #email, #password, #ok, #login, #descp{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="parent">
    <div class="block">
        <p class="form-title">Your info</p>
        <form action="../models/add-record.php" method="post">
            <p>Resource</p>
            <input type="text" name="resource" id="email" value="">
            <p>Login</p>
            <input type="text" name="login" id="login" value="">
            <p>Password</p>
            <input type="password" name="password" id="password" value="">
            <p>Description</p>
            <textarea name="descp" id="descp" cols="30" rows="10" value=""></textarea>
            <input type="submit" name="add" id="ok" value="OK">
        </form>
    </div>
</div>
</body>
</html>
