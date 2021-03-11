<?php
include ("connect.php");
session_start();
    if(isset($_POST['change']))
    {
        $toTable= array(base64_encode($_POST['resource']),base64_encode($_POST['login']),base64_encode($_POST['password']),base64_encode($_POST['descp']),$_SESSION['id']);
        $stm = $pdo -> prepare("UPDATE record SET resource = ?, login = ?, password = ?, descp = ? WHERE record.id=?;");
        $stm ->execute($toTable);
        $test=$stm->fetchAll();
        header( "Location: ../views/user.php" );
    }