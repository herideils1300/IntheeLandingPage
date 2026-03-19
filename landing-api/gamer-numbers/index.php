<?php
include '../depends/dep_csv.php';
$instances = $csv->return_all_instances("gamers");
if($instances != false){
       echo(json_encode(count($instances)));
}else{
       echo(json_encode(0));
}
?>