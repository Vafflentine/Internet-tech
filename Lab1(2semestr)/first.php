<?php
include ("index.php");
    $value = $_POST['league_id'];
    global $pdo;
    $stm = $pdo -> query("SELECT DISTINCT t1.name as First_Command, t2.name as Second_Command, game.score,t1.league
    FROM team as t1 
    INNER JOIN game ON  game.FID_Team1=t1.ID_Team  
    INNER JOIN team as t2 ON game.FID_Team2=t2.ID_Team
    WHERE t1.league='$value' AND t2.league='$value'");
    
?>

<table class="city_list">
<tr>
    <th>First command</th>
    <th>Second command</th>
    <th>score</th>
    <th>league</th>
</tr>
	<?php foreach($stm as $a): ?>
	<tr>
		<?php foreach($a as $d): ?>
		<td>
        <?php $a=array_chunk($a,4); ?>
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