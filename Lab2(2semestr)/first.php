<?php 
    require_once __DIR__ . "/vendor/autoload.php";
    $league=$_REQUEST['league'];
    $collection = (new MongoDB\Client)->dbforlab->GameInfo;
    $cursor = $collection->find(['League'=>$league], ['projection' => ['League'=>1,'Team1' => 1, 'Team2' => 1, 'Winner'=>1, '_id'=>0]]);
    $toClient=array();
    foreach($cursor as $record)
    {
        array_push($toClient,(array)$record);
    }
    //var_dump($toClient);
    header('Content-Type: application/json');
    echo json_encode($toClient);