<?php 
include "../depends/dep_db.php";


$sql_gamers = <<<SQL
SELECT COUNT(*) FROM gamers;
SQL;


$sql_developers = <<<SQL
SELECT COUNT(*) FROM developers;
SQL;


$result_gamers = $db->query($sql_gamers);
$result_developers = $db->query($sql_developers);

$result_list = [
       "gamers" => $result_gamers,
       "developers" => $result_developers 
];

echo json_encode($result_list);
exit();

$db->disconnect();

$json = json_encode($result);

echo $json;
