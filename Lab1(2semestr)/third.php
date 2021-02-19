<?php
include ("index.php");
    $nameTeam=$_POST['team'];
    $namePlayer=$_POST['player'];
    global $pdo;

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
?>

<table class="city_list">
<tr>
    <th>ID_Game</th>
    <th>Name</th>
</tr>
	<?php foreach($stm as $a): ?>
	<tr>
		<?php foreach($a as $d): ?>
		<td>
        <?php $a=array_chunk($a,2); ?>
        <?php echo $d; ?>
        </td>
        <?php endforeach; ?>
	</tr>
    <?php endforeach; ?>
</table>
 

<style>
.city_list 
{
	width: 30%;
}
.city_list td 
{
	width: 150px;
	border: 1px solid #ddd;
	padding: 7px 10px;
}