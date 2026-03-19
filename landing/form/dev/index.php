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
       <!--<script src="https://t.contentsquare.net/uxa/7700e7f6bf328.js"></script>-->
</head>

<body>
       <script src="index.js"></script>
       <div id="main">
              <div class="filter">
                     <div class="dev-form">
                            <form action="http://localhost:3000/register/" method="POST">
                                   <label for="email">Enter your email here</label>
                                   <input type="email" name="email" id="email-input" />
                                   <input type="text" value="dev" name="flag" hidden="1" />
                                   <input type="text" hidden="1" name="origin" id="locationValue"/>
                                   <p style="text-align:center;font-size:15px;" class="alert">By clicking the submit button you agree
                                          to our
                                          terms and conditions <br>
                                          and want to recieve information about the store launch.</p>
                                   <button type="submit" class="major-input">Become an Inthee developer</button>
                            </form>
                     </div>
              </div>

       </div>
</body>

</html>