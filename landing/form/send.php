<?php
if($_POST == null){
       header("Location: ./confirmation");
}

$redirect_url = "http://localhost:3000/register/";
$origin = $_POST["origin"];

$post_content = array(
       'email' => $_POST["email"],
       'flag' => $_POST["flag"],
       'origin' => $origin
);

$curl = curl_init($redirect_url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_content);
curl_exec($curl);
curl_close($curl);

header("Location: $origin/form/confirmation/");
?>