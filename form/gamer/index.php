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
                            <h2>Gamer form</h2>
                            <p>By submiting your email you will get:</p>
                            <ul>
                                   <!-- TODO: Name conditions and benefits -->
                                   <li>Messages regarding launch date and the launch information</li>
                                   <li>A unique code to claim a game of your choice for free</li>
                            </ul>
                            <form action="../../api/register/" method="POST">
                                   <label for="email">Enter your email here</label>
                                   <input type="email" name="email" id="email-input" />
                                   <input type="text" value="gamer" name="flag" hidden="1">
                                   <p style="text-align:center;font-size:15px;" class="alert">By clicking the submit button you agree
                                          to our
                                          terms and conditions <br>
                                          and want to recieve information about the store launch.</p>
                                   <button type="submit" class="major-input">Become a member</button>
                            </form>
                     </div>
              </div>

       </div>
</body>

</html>