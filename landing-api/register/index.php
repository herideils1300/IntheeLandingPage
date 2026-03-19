<?php
include "../depends/dep_csv.php";
include "../cors-policy/var_allowed_origins.php";

if($_POST == null){
       die("403 Forbidden");
}

$origin = htmlspecialchars($_POST["origin"]);

if(in_array($origin, CORSOrigin::$allowed_origins)){
       http_response_code(403);
       die("Invalid origin.");
}

$email_variable = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$flag = htmlspecialchars($_POST["flag"]);


if($flag == "dev"){
       $check_data = $csv->return_all_instances();
       if($check_data != false && in_array($email_variable, $check_data)){
              echo(false);
       }
       $csv->add_instance($email_variable, "data/mail_developers.csv");
}else{
       $check_data = $csv->return_all_instances("data/mail_gamers.csv");
       if($check_data != false && in_array($email_variable, $check_data)){
              die("The email already exists!");
       }

       $csv->add_instance($email_variable, "data/mail_gamers.csv");
}


header("Location: $origin/form/confirmation/");