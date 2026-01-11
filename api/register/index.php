<?php
include "../depends/dep_db.php";

$email_variable = $_POST["email"];
$flag = $_POST["flag"];

$table_var = ($flag == "dev") ? "developers" : "gamers";

$sql = "INSERT INTO $table_var (email) VALUES (?)";

$result = $db->execute_prepared($sql, [$email_variable]);

if ($result){
       echo "Success";
       header("Location: ../../form/confirmation/");
}else{
       die("Error in execution.");
}

die();