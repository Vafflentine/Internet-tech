<?php
 include ("connect.php");
 $nameTeam=$_GET['team'];
 $temp=$pdo->query("SELECT player.Name FROM player INNER JOIN team WHERE player.FID_Team=team.ID_Team AND team.name LIKE '$nameTeam'")->fetchAll(PDO::FETCH_COLUMN);
        foreach($temp as $d)
        {
            echo '<option value="'. $d .'">'. $d .'</option>';
        }
 ?>
