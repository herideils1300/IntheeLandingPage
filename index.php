<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="index.css">
       <title>Inthee: Independant game store</title>
</head>

<body>
       <div id="nav-bar">
              <div id="logo"><img src="./assets/Game Shack.png" alt="Inthee logo" width="100" height="30" /></div>
              <div class="spacer-div"></div>
              <a href=""><div class="nav-bar-element">Terms and conditions</div></a>
              <a href=""><div class="nav-bar-element">Benefits</div></a>
       </div>
       <div id="main">
              <div class="filter-div-orange">
                     <div id="title" class="slide-div">
                            <div id="title-logo">
                                   <h1 class="bold-and-orange" style="font-size: 20vh; visibility: hidden;">INThee</h1>
                                   <h1 class="big-text"><span class="bold-and-orange">Thee</span> Gamestore for new classics</h1>
                            </div>
                            <div class="options-div">
                                   <button id="join-as-dev" class="stand-out-button"
                                          onclick="navigateToPath('/form/dev');">
                                          <div id="dev-button-text">For game developers </div>
                                          <div id="dev-icon">
                                                 <img src="./assets/keyboard-svgrepo-com.svg" width="30" height="30" />
                                          </div>
                                   </button>
                                   <button id="join-as-gamer" class="stand-out-button"
                                          onclick="navigateToPath('/form/gamer');">
                                          <div id="gamer-button-text" class="button-text">For gamers</div>
                                          <div id="gamer-icon">
                                                 <img src="./assets/game-controller-joystick-svgrepo-com.svg" width="30"
                                                        height="30" />
                                          </div>
                                   </button>
                            </div>
                     </div>
              </div>
              <div class="slide-div">
                     <div id="explanation">
                            <div class="filter-div">
                                   <h1>What is <span class="bold-and-orange">Inthee</span>?</h1>
                                   <p style="margin-right: 50px;">A <span class="bold-and-orange">game store</span>
                                          with new classics made by <span class="bold-and-orange">independent
                                                 and solo developers</span> focusing on <span class="bold-and-orange">2d
                                                 and early 3d game graphics</span>.
                                   </p>
                            </div>

                     </div>
              </div>
              <div class="slide-div">
                     <div>
                            <h2>How <span class="bold-and-orange">Inthee</span> works?</h2>
                     </div>
                     <p class="justify-paragraph"> <span class="bold-and-orange">Right games</span> at the <span
                                   class="bold-and-orange">right place</span> for the <span
                                   class="bold-and-orange">right community.</span><br />
                            Don't know the game? Describe it in a <span class="bold-and-orange">prompt</span>.<br />
                            Gamer Registration = optional. Download normally like a guest.<br />
                            Have an idea? Make it public and become a stakeholder.

                     </p>
                     <div id="our-mission-title">
                            <h2 onclick="toggleOurMission()">Why <span class="bold-and-orange">Inthee</span>?</h2>
                     </div>
                     <p>"Because games today deserve to be the classics of tomorrow."</p>
                     <p class="cursive-paragraph">Urban</p>
                     <hr />
                     <p class="cursive-paragraph little-under-cursive">The founder of <span
                                   class="bold-and-orange">Inthee</span></p>



                     <!-- TODO: Input platform screenshots-->
              </div>
              <div id="so-far" class="slide-div">
                     <div class="filter-div">
                            <h1>Join the waiting list</h1>
                            <div class="options-div">
                                   <button id="join-as-dev" class="stand-out-button"
                                          onclick="navigateToPath('/landing/form/dev');">
                                          <div id="dev-button-text">For game developers </div>
                                          <div id="dev-icon">
                                                 <img src="./assets/keyboard-svgrepo-com.svg" width="30" height="30" />
                                          </div>
                                   </button>
                                   <button id="join-as-gamer" class="stand-out-button"
                                          onclick="navigateToPath('/landing/form/gamer');">
                                          <div id="gamer-button-text" class="button-text">For gamers </div>
                                          <div id="gamer-icon">
                                                 <img src="./assets/game-controller-joystick-svgrepo-com.svg" width="30"
                                                        height="30" />
                                          </div>
                                   </button>
                            </div>
                     </div>

              </div>
       </div>


       <script src="index.js"></script>

</body>

</html>