<?php
 require "../../header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="../form.css">
</head>
<body>
       <div id="main">
              <div class="filter">
                     <div class="dev-form">
                            <h2>Your email is already in our system.</h2>
                            <h3>Check out our socials:</h3>
                            <div id="socials">
                                   <button class="orange-border-button" onclick="redirectOut('https://discord.gg/26e75fxG')"><img src="../../assets/discord-v2-svgrepo-com.svg" width="50" height="50"/> Discord</button>
                                   <button class="orange-border-button" onclick="redirectOut('https://www.reddit.com/r/Inthee/')"><img src="../../assets/reddit-svgrepo-com.svg" width="50" height="50"/> Reddit</button>
                                   <button class="orange-border-button" onclick="redirectOut('https://www.instagram.com/inthee.games/')"><img src="../../assets/instagram-1-svgrepo-com.svg" width="50" height="50"/> Instagram</button>
                            </div>
                            <button class="major-input" onclick="redirectBack()">Exit back to the landing page</button>
                     </div>
              </div>
       </div>
</body>
<script src="redirect_back.js"></script>
</html>