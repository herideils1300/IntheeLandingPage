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
                     <div class="explanation-div">
                            As an early developer you get:
                            <ul>
                                          <li>1. Access to 1 of 3 Curated Game Bundles <br/>
                                   Subscribers receive access to one of three rotating curated game bundles.</li>
                                   <li>2. Personal Game Library without path reset (Browser Access)</li>
                                   <li>3. Access to the idea market</li>
                            </ul>
                     </div>
                            <form action="../../api/register/" method="POST">
                                   <label for="email">Enter your email here</label>
                                   <input type="email" name="email" id="email-input" />
                                   <input type="text" value="dev" name="flag" hidden="1" />
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