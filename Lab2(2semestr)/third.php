<?php 
    require_once __DIR__ . "/vendor/autoload.php";
    $teamName=$_REQUEST['teams'];
    $collection = (new MongoDB\Client)->dbforlab->GameInfo;
    $cursor = $collection->find(array('$or' => array(array('Team1' => $teamName),array('Team2' => $teamName))), ['projection' => ['League'=>1,'Team1' => 1, 'Team2' => 1, 'Winner'=>1, '_id'=>0]]);
    $toClient=array();
    foreach($cursor as $record)
    {
        array_push($toClient,(array)$record);
    }
    //var_dump($toClient);
    header('Content-Type: application/json');
    echo json_encode($toClient);