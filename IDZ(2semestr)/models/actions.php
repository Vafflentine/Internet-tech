<?php 
    include ("connect.php");
    session_start();    
    if(isset($_POST['go-change']))
    {
        $stm = $pdo -> prepare("SELECT record.resource, record.login, record.password, record.descp FROM record WHERE record.id=?");
        $stm ->execute(array($_POST['go-change']));
        $show=$stm->fetchAll();
        $_SESSION['resource']=base64_decode($show[0]['resource']);
        $_SESSION['loginChange']=base64_decode($show[0]['login']);
        $_SESSION['passwordChange']=base64_decode($show[0]['password']);
        $_SESSION['descp']=base64_decode($show[0]['descp']);
        $_SESSION['id']=$_POST['go-change'];
        header( "Location: ../views/change.php" );
    }

    else if(isset($_POST['add']))
    {
        $_SESSION['resource']="";
        $_SESSION['loginChange']="";
        $_SESSION['passwordChange']="";
        $_SESSION['descp']="";
        header( "Location: ../views/add.php" );
    }

    else if(isset($_POST['delete']))
    {
        $stm = $pdo -> prepare("DELETE FROM record WHERE record.id LIKE ?");
        $stm ->execute(array($_POST['delete']));
        header( "Location: ../views/user.php" );
    }
?>