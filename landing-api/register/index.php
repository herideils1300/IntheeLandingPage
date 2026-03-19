<?php
include "../depends/dep_csv.php";
include "../cors-policy/var_allowed_origins.php";

if($_POST == null){
       header("Location: $origin");
}

if(in_array($origin, CORSOrigin::$allowed_origins)){
       die("Invalid origin.");
}

$email_variable = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$flag = $_POST["flag"];
$origin = $_POST["origin"];

if($flag == "dev"){
       $check_data = $csv->return_all_instances();
       if(in_array($email_variable, $check_data)){
              die("The email already exists!");
       }
       $csv->add_instance($email_variable, "data/mail_developers.csv");
}else{
       $check_data = $csv->return_all_instances("data/mail_gamers.csv");
       if(in_array($email_variable, $check_data)){
              die("The email already exists!");
       }
       $csv->add_instance($email_variable, "data/mail_gamers.csv");
}


header("Location: $origin/form/confirmation/");