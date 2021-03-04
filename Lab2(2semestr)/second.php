<?php 
    require_once __DIR__ . "/vendor/autoload.php";
    $teamName=$_REQUEST['teamg'];
    $collection = (new MongoDB\Client)->dbforlab->TeamInfo;
    $cursor = $collection->find(['Team'=>$teamName], ['projection' => ['Team'=>1, 'Players'=>1, '_id'=>0]]);
    $toClient=array();
    foreach($cursor as $record)
    {
        array_push($toClient,(array)$record);
    }
    //var_dump($toClient);
    header('Content-Type: application/json');
    echo json_encode($toClient);