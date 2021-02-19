<?php
    include ("connect.php");
    $nameTeam=$_GET['team'];
    $namePlayer=$_GET['player'];

    $temp=$pdo->query("SELECT DISTINCT player.FID_Team
    FROM player
    INNER JOIN team ON team.ID_Team=player.FID_Team
    WHERE team.name='$nameTeam'")->fetchAll(PDO::FETCH_COLUMN);

    $stm = $pdo -> query("SELECT DISTINCT game.ID_Game, P1.Name
    FROM game
    INNER JOIN player as P1 ON P1.FID_Team=game.FID_Team1
    WHERE P1.Name='$namePlayer' AND P1.FID_Team='$temp[0]'
    UNION
    SELECT DISTINCT game.ID_Game, P2.Name
    FROM game
    INNER JOIN player as P2 ON P2.FID_Team=game.FID_Team2
    WHERE P2.Name='$namePlayer' AND P2.FID_Team='$temp[0]'");

    header('Content-Type: application/json');
    header("Cache-Control: no-cache, must-revalidate");
    $timetable = $stm->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($timetable);
?>

