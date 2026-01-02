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
                                   <h1 class="bold-and-orange" style="font-size: 150px;">INThee</h1>
                                   <h1 class="big-text">A store for independent games</h1>
                            </div>
                            <div class="options-div">
                                   <button id="join-as-dev" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/dev');">
                                          <div id="dev-button-text">Join as a game developer </div>
                                          <div id="dev-icon">
                                                 <img src="./assets/keyboard-svgrepo-com.svg" width="30" height="30" />
                                          </div>
                                   </button>
                                   <button id="join-as-gamer" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/gamer');">
                                          <div id="gamer-button-text" class="button-text">Join as a gamer </div>
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
                            <h1>Our goal</h1>
                            <p>We are creating a <span class="bold-and-orange">game store</span> focusing on a
                                   <span class="bold-and-orange">classic game niche</span>. <br /> Whether it's
                                   <span class="bold-and-orange">2d</span> style or a <span class="bold-and-orange">psx,
                                          low spec</span> graphics style, it can
                                   find its
                                   place here.
                            </p>
                     </div>

              </div>
       </div>
       <div class="slide-div">
              <div class="list-with-title-div expand-transition-duration">
                     <div id="our-mission-title">
                            <h2 onclick="toggleOurMission()">Our missions <img src="./assets/arrow-down-svgrepo-com.svg" width="30" height="30"></img></h2>
                     </div>
                     <ul id="our-mission" style="list-style-type: disc; text-align: left; margin: 25px;">
                            <li>
                                   <h3>Give <span class="bold-and-orange">independent game developers</span>
                                          a platform where they can stand out and thrive</h3>
                            </li>
                            <li>
                                   <h3>Make videogames visible using <span class="bold-and-orange">description</span>
                                          and <span class="bold-and-orange">not only title</span>.</h3>
                            </li>
                            <li>
                                   <h3>Implement unique ways of game discovery.</h3>
                            </li>

                     </ul>
              </div>
              <div class="list-with-title-div expand-transition-duration">
                     <div id="how-we-do-title">
                            <h2 onclick="toggleHowWeDo()">How we do it <img src="./assets/arrow-down-svgrepo-com.svg" width="30" height="30"></img></h2>
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
                     <h1>So far we have:</h1>
                     <div class="options-div">
                            <div class="stats-div"><span id="dev-stat" class="bold-and-orange"></span> Developers</div>
                            <div class="stats-div"><span id="comm-stat" class="bold-and-orange"></span> Gamers</div>
                     </div>
                     <div class="top-separator">
                             <div class="options-div">
                                   <button id="join-as-dev" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/dev');">
                                          <div id="dev-button-text">Join as a game developer </div>
                                          <div id="dev-icon">
                                                 <img src="./assets/keyboard-svgrepo-com.svg" width="30" height="30" />
                                          </div>
                                   </button>
                                   <button id="join-as-gamer" class="stand-out-button" onclick="navigateToPath('/IntheeLandingPage/form/gamer');">
                                          <div id="gamer-button-text" class="button-text">Join as a gamer </div>
                                          <div id="gamer-icon">
                                                 <img src="./assets/game-controller-joystick-svgrepo-com.svg" width="30"
                                                        height="30" />
                                          </div>
                                   </button>
                            </div>
                     </div>

              </div>

       </div>
       </div>

       <script src="./index.js"></script>

</body>

</html>