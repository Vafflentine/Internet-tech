<?php
  include ("connect.php");
  global $pdo;
  $stm = $pdo -> query('SELECT DISTINCT league FROM team')->fetchAll(PDO::FETCH_COLUMN);
  $stm1= $pdo -> query('SELECT DISTINCT name FROM team')->fetchAll(PDO::FETCH_COLUMN);
  
  $stm2= $pdo -> query("SELECT player.Name
  FROM player
  WHERE player.FID_Team=1")->fetchAll(PDO::FETCH_COLUMN);
?>