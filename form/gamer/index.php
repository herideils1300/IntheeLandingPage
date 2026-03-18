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
       <script src="index.js"></script>
       <div id="main">
              <div class="filter">
                     <div class="dev-form">
                            <div class="explanation-div">
                                   As an early community member you get:
                                   <li>A welcome gift consisting of multiple classic games</li>
                                   <li>A notification for the exclusive first launch</li>
                            </div>
                            <form method="POST">
                                   <label for="email">Enter your email here</label>
                                   <input type="email" name="email" id="email-input" />
                                   <input type="text" value="gamer" name="flag" hidden="1">
                                   <p style="text-align:center;font-size:15px;" class="alert">By clicking the submit button you agree
                                          to our
                                          terms and conditions <br>
                                          and want to recieve information about the store launch.</p>
                                   <button type="button" onclick="submitForm()" class="major-input">Become a member</button>
                            </form>
                     </div>
              </div>

       </div>
</body>

</html>