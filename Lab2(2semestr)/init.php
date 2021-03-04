<?php
    require_once __DIR__ . "/vendor/autoload.php";
    global $teamInfoCollection;
    global $gameInfoCollection;
    $gameInfoCollection = (new MongoDB\Client)->dbforlab->GameInfo;
    $teamInfoCollection = (new MongoDB\Client)->dbforlab->TeamInfo;
    $cursor1 = $gameInfoCollection->distinct('League');
    $cursor2 = $teamInfoCollection->distinct('Team');
?>