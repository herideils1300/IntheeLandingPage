<?php
if($_POST == null){
       header("Location: ./confirmation");
}

$redirect_url = "http://localhost:3000/register/";

$post_content = array(
       'email' => $_POST["email"],
       'flag' => $_POST["flag"],
       'origin' => $_POST["origin"]
);

$curl = curl_init($redirect_url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_content);
curl_setopt($curl, CURLOPT_POST, true);
curl_exec($curl);
curl_close($curl);
?>