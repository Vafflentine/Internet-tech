<?php
include ("index.php");
    $value = $_POST['first'];
    $value1 = $_POST['second'];
    global $pdo;
    $stm = $pdo -> query("SELECT *
    From game
    WHERE game.date_game BETWEEN '$value' AND '$value1'");
?>


<table class="city_list">
<tr>
    <th>ID_Game</th>
    <th>date_game</th>
    <th>place</th>
    <th>score</th>
    <th>FID_Team1</th>
    <th>FID_Team2</th>
</tr>
	<?php foreach($stm as $a): ?>
	<tr>
		<?php foreach($a as $d): ?>
		<td>
        <?php $a=array_chunk($a,6); ?>
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