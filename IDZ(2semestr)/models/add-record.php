<?php
include ("connect.php");
session_start();
    if(isset($_POST['add']))
    {
        $toTable=array(base64_encode($_POST['resource']),base64_encode($_POST['login']),base64_encode($_POST['password']),base64_encode($_POST['descp']),$_SESSION['user_id']);
        $stm = $pdo -> prepare("INSERT INTO record (resource, login, password, descp, user_id) VALUES (?, ?, ?, ?, ?)");
        $stm ->execute($toTable);
        header( "Location: ../views/user.php" );
    }