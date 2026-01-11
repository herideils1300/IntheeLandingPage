<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="./index.css">
       <title>Inthee: Independant game store</title>
</head>

<body>
       <div id="nav-bar">
              <div id="logo"><img src="./assets/Game Shack.png" alt="Inthee logo" width="100" height="30" /></div>
              <div class="spacer-div"></div>
              <!-- TODO: Add a hamburger meni (or a login icon) when the app is launched -->
       </div>
       <div id="main">
              <div id="title" class="slide-div">
                     <div class="gradient-filter-div">
                            <div id="title-logo">
                                   <h1 class="bold-and-orange" style="font-size: 150px;">INThee gamestore</h1>
                                   <h1 class="big-text">For amazing classic games</h1>
                            </div>
                            <div class="options-div">
                                   <button id="join-as-dev" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/dev');">
                                          <div id="dev-button-text">For game developers </div>
                                          <div id="dev-icon">
                                                 <img src="./assets/keyboard-svgrepo-com.svg" width="30" height="30" />
                                          </div>
                                   </button>
                                   <button id="join-as-gamer" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/gamer');">
                                          <div id="gamer-button-text" class="button-text">For gamers</div>
                                          <div id="gamer-icon">
                                                 <img src="./assets/game-controller-joystick-svgrepo-com.svg" width="30"
                                                        height="30" />
                                          </div>
                                   </button>
                            </div>
                     </div>
              </div>
       </div>
       <div class="slide-div">
              <div id="explanation">
                     <div class="filter-div">
                            <h1>What is <span class="bold-and-orange">Inthee</span>?</h1>
                            <p><span class="bold-and-orange">Inthee</span> is a <span class="bold-and-orange">game store</span> with amazing classic games. <br />
                            Here you can find 2d, psx, low-spec classic games.
                                   
                            </p>
                     </div>

              </div>
       </div>
       <div class="slide-div">
              <div class="list-with-title-div expand-transition-duration">
                     <div id="our-mission-title">
                            <h2 onclick="toggleOurMission()">Why Inthee <img src="./assets/arrow-down-svgrepo-com.svg" width="30" height="30"></img></h2>
                     </div>
                     <p>I want to give independant game developers a platform to thrive.</p>
                     
              </div>
              <div class="list-with-title-div expand-transition-duration">
                     <div id="how-we-do-title">
                            <h2 onclick="toggleHowWeDo()">How Inthee works <img src="./assets/arrow-down-svgrepo-com.svg" width="30" height="30"></img></h2>
                     </div>
                     <ul id="how-we-do" style="list-style-type: disc; text-align: left; margin: 25px;">
                            <li>
                                   <h3>We publish only games from <span class="bold-and-orange">independent
                                                 studios</span> and
                                          <span class="bold-and-orange">solo game devs</span>.
                                   </h3>
                            </li>
                            <li>
                                   <h3>We use prompting for game description. Describe your game and we will give you
                                          the
                                          thing you are looking for.</h3>
                            </li>
                            <li>
                                   <h3>We implement random selection and recommendation as an option.</h3>
                            </li>

                     </ul>
              </div>



              <!-- TODO: Input platform screenshots-->
       </div>
       <div id="so-far" class="slide-div">
              <div class="filter-div">
                     <h1>Join the waiting list</h1>
                             <div class="options-div">
                                   <button id="join-as-dev" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/dev');">
                                          <div id="dev-button-text">For game developers </div>
                                          <div id="dev-icon">
                                                 <img src="./assets/keyboard-svgrepo-com.svg" width="30" height="30" />
                                          </div>
                                   </button>
                                   <button id="join-as-gamer" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/gamer');">
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

       <script src="./index.js"></script>

</body>

</html>