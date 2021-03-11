<?php 
include ("../models/connect.php");
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
             background-color: #f2f2f2;
        }
    </style>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="content">
        <div class="head">
        <h2>User Profile</h2>
        <p><b>Wellcome back</b><br><b><?php echo($_SESSION['login']); ?></b></p>
    </div>
    <form action="../models/actions.php" method="post">
        <button name="add" class="add-record">Add</button>
    </form>
    <table id="resources">
        <tr>
            <th>Resource</th>
            <th>Login</th>
            <th>Password</th>
            <th>Desription</th>
            <th>Option</th>
        </tr>
        <?php
            $stm = $pdo -> prepare("SELECT record.id, record.resource, record.login, record.password, record.descp FROM record WHERE record.user_id=?");
            $stm ->execute(array($_SESSION['user_id']));
            $show=$stm->fetchAll();
           foreach($show as $a)
           {
                echo("<tr>");
                foreach(array_slice($a,1) as $d)
                {
                    echo('<td class="cell">');
                    echo base64_decode($d);
                    echo("</td>");
                }
                echo("<td>");
                echo('<form action="../models/actions.php" method="post">');
                echo('<button class="go-change" name="go-change" value="'.$a['id'].'">Change</button>');
                echo('<button class="delete" name="delete" value="'.$a['id'].'">Delete</button>');
                echo('</form>');
                echo("</td>");
                echo("</tr>");
           }
        ?>

    </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/script.js"></script>
</body>
</html>

