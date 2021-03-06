<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sagan Planet Walk: Mars</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'><!--Google Fonts-->
        <link rel="stylesheet" type="text/css" href="js/slider/jquery.bxslider.css"/><!--slider CSS-->
        <link href="css/styles.css" rel="stylesheet"><!-- Custom CSS -->
    </head>
    <body id="pages">
        <!--logo holder-->
        <div id="banner">
        </div>
        <!--nav and header-->
        <div id="box">
            <nav class="navbar-sm navbar-custom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                </div>     
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li><a class="category" href="index.php">Home</a></li>
                      <li><a class="category" href="sun.php">The Sun</a></li>
                      <li class="dropdown">
                          <a href="#" class="active dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rocky Planets<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="mercury.php">Mercury</a></li>
                              <li><a href="venus.php">Venus</a></li>
                              <li><a href="earth.php">Earth</a></li>
                              <li><a href="mars.php">Mars</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giant Planets<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="jupiter.php">Jupiter</a></li>
                              <li><a href="saturn.php">Saturn</a></li>
                              <li><a href="uranus.php">Uranus</a></li>
                              <li><a href="neptune.php">Neptune</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Bodies<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="pluto.php">Pluto</a></li>
                              <li><a href="kepler.php">Kepler-37d</a></li>
                              <li><a href="alphaCentauri.php">Alpha Centauri</a></li>
                          </ul>
                      </li>
                      <li><a class="category" href="contact.php">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="header2"><!--header image for planet-->
                <h1>Mars</h1>
            </div>
        </div>
        
        <!--Planet Content-->
        <div id="content" >
            <div class="container2">
                <div class="row">
                    <!--links and pictures-->
                    <div class="col-sm-6 col-xs-12 pics">
                        <div class="img-group">
                            <div class='imgCont1' >
                                <img id="img1" src="images/mars1.png">
                                <div class="buttons">
                                    <button><a href="http://www.sciencenter.org/sagan-walk.html"><b>Visit Sciencenter</b></a></button>
                                    <button><a href="images/walkmap.pdf"><b>Planet Walk Map</b></a></button>
                                </div>
                            </div>
                            <div class='imgCont2'>
                                <img id="img2" src="images/marsstop.png">
                                <div class="buttons" id="pushDown">
                                    <button><a href="http://spif.astro.cornell.edu/"><b>Visit SPIF</b></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--quick facts-->
                    <div class="col-sm-6 col-xs-12">
                        <div class="prof">
                            <h2 class="headers" style="font-size: 1.4em;">Profile</h2>
                            <ul>
                                <li class='blah'><b>Mass:</b> 6.41693000000000 x 10^14 billion kg (0.107 x Earth)</li>
                                <li class='blah'><b>Equatorial Diameter:</b>  6,805 km</li>
                                <li class='blah'><b>Polar Diameter:</b> 6,755 km</li>
                                <li class='blah'><b>Equatorial Circumference:</b> 21,297 km</li>
                                <li class='blah'><b>Known Moons:</b> 2</li>
                                <li class='blah'><b>Notable Moons:</b> Phobos & Deimos</li>
                                <li class='blah'><b>Orbit Distance:</b> 227,943,824 km (1.38 x Earth's Distance to the Sun)</li>
                                <li class='blah'><b>Orbit Period:</b> 686.98 Earth days</li>
                                <li class='blah'><b>Surface Temperature:</b>-87 to -5 °C</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8"><!--basic info-->
                        <div class="col-sm-12 more noSideMargin">
                            <h2 class="headers" style="font-size: 1.4em;" >Basic Information</h2>
                            <div class='col-sm-12 blah inner2' style="margin-bottom: .2em;">
                                <p>Mars is a cold desert world. It is half the diameter of Earth and has the same amount of dry land. Like Earth, Mars has seasons, polar ice caps, volcanoes, canyons and weather, but its atmosphere is too thin for liquid water to exist for long on the surface. There are signs of ancient floods on Mars, but evidence for water now exists mainly in icy soil and thin clouds.</p>
                            </div>
                             <div class='col-sm-12'>
                                <div class='img-holder imgSquare' style="margin-bottom: 1em; padding-bottom: 1em;">
                                    <img src='images/mars2.jpg'>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 need2know"><!--need-to-know facts-->
                            <h2 class="headers" style="font-size: 1.4em;">10 Need-to-Know Facts about Mars</h2>
                            <div class='col-sm-12' style="padding-bottom: 1em;">
                                <ol class="rounded-list">
                                    <li><a >If the sun were as tall as a typical front door, Earth would be the size of a nickel, and Mars would be about as big as an aspirin tablet.</a></li>
                                    <li><a >Mars orbits our sun, a star. Mars is the fourth planet from the sun at a distance of about 228 million km (142 million miles) or 1.52 AU.</a></li>
                                    <li><a >One day on Mars takes a little over 24 hours (the time it takes for Mars to rotate once). Mars makes a complete orbit around the sun in 687 Earth days.</a></li>
                                    <li><a >Mars is a rocky planet, also known as a terrestrial planet. Mars' solid surface has been altered by volcanoes, impacts, crustal movement, and atmospheric effects such as dust storms.</a></li>
                                    <li><a >Mars has a thin atmosphere made up mostly of carbon dioxide (CO2), nitrogen (N2) and argon (Ar).</a></li>
                                    <li><a >Mars has two moons named Phobos and Deimos.</a></li>
                                    <li><a >There are no rings around Mars.</a></li>
                                    <li><a >More than 40 spacecraft have been launched for Mars. The first true Mars mission success was Mariner 4 in 1965.</a></li>
                                    <li><a >At this time in the planet's history, Mars' surface cannot support life as we know it. A key science goal is determining Mars' past and future potential for life.</a></li>
                                    <li><a >Mars is known as the Red Planet because iron minerals in the Martian soil oxidize, or rust, causing the soil -- and the dusty atmosphere -- to look red.</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- missions-->
                    <div class="col-md-4 col-sm-12">
                        <div class="col-sm-12 mission">
                            <h2 class="headers" style="font-size: 1.75em;" id='missions-header'>Missions</h2>
                            <div class="slider8" id="missions">
                                <div class="slide">
                                    <div>
                                      <a href="http://www.nasa.gov/mission_pages/maven/main/index.html" target="_blank"><b>MAVEN (2013)</b></a>
                                      <br>
                                      <p>NASA Mars Orbiter</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                    <a href="http://www.mangalyaan.com/" target="_blank"><b>Mangalyaan (2013)</b></a>
                                      <br>
                                      <p>ISRO (India) Mars Orbiter</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://mars.nasa.gov/msl/mission/" target="_blank"><b>NASA Mars Science Laboratory (2011)</b></a>
                                      <br>
                                      <p>NASA Mars Rover</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                      <a href="http://www.russianspaceweb.com/phobos_grunt.html" target="_blank"><b>Phobos-Grunt (2011)</b></a>
                                      <br>
                                      <p>Attempted Russian Phobos Sample Return</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                    <a href="https://solarsystem.nasa.gov/missions/profile.cfm?MCode=Yinghuo-1" target="_blank"><b>Yinghuo-1 (2011)</b></a>
                                      <br>
                                      <p>Attempted Chinese Mars Orbiter</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://phoenix.lpl.arizona.edu/" target="_blank"><b>Phoenix (2007)</b></a>
                                      <br>
                                      <p>NASA Mars Scout Lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                      <a href="http://mars.nasa.gov/mro/" target="_blank"><b>Mars Reconnaissance Orbiter (2005)</b></a>
                                      <br>
                                      <p>NASA Orbiter</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                      <a href="http://mars.nasa.gov/mer/home/" target="_blank"><b>Mars Exploration Rovers (2003)</b></a>
                                      <br>
                                      <p>Spirit and Opportunity, NASA Rovers to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                    <a href="http://sci.esa.int/mars-express/" target="_blank"><b>Mars Express (2003)</b></a>
                                      <br>
                                      <p>ESA Mars Orbiter and Lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://mars.nasa.gov/odyssey/" target="_blank"><b>Mars Odyssey (2001)</b></a>
                                      <br>
                                      <p>NASA Orbiter Mission to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://mars.jpl.nasa.gov/msp98/" target="_blank"><b>Mars Polar Lander (1999)</b></a>
                                      <br>
                                      <p>NASA attempted lander to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.jpl.nasa.gov/missions/mars-polar-lander-deep-space-2/" target="_blank"><b>Deep Space 2 (1999)</b></a>
                                      <br>
                                      <p>NASA attempted penetrator mission to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://mars.jpl.nasa.gov/msp98/orbiter/" target="_blank"><b>Mars Climate Orbiter (1998)</b></a>
                                      <br>
                                      <p>NASA attempted orbiter to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://solarsystem.nasa.gov/missions/profile.cfm?MCode=Nozomi" target="_blank"><b>Nozomi (Planet-B) (1998)</b></a>
                                      <br>
                                      <p>ISAS (Japan) orbiter to Mars </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://mars.nasa.gov/mgs/" target="_blank"><b>Mars Global Surveyor (1996)</b></a>
                                      <br>
                                      <p>NASA Mars orbiter</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.nasa.gov/mission_pages/mars-pathfinder/" target="_blank"><b>Mars Pathfinder (1996)</b></a>
                                      <br>
                                      <p>NASA lander and rover to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://nssdc.gsfc.nasa.gov/nmc/spacecraftDisplay.do?id=1996-064A" target="_blank"><b>Mars 96 (1996)</b></a>
                                      <br>
                                      <p>Russian attempted mission to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://science.nasa.gov/missions/mars-observer/" target="_blank"><b>Mars Observer (1992)</b></a>
                                      <br>
                                      <p>NASA attempted mission to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.russianspaceweb.com/phobos.html" target="_blank"><b>Phobos (1988)</b></a>
                                      <br>
                                      <p>Soviet missions to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://mars.nasa.gov/programmissions/missions/past/viking/" target="_blank"><b>Viking (1975) </b></a>
                                      <br>
                                      <p>NASA orbiters/landers to Mars</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%207" target="_blank"><b>Mars 7  (1973)</b></a>
                                      <br>
                                      <p>Soviet attempted Mars lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%206" target="_blank"><b>Mars 6 (1973) </b></a>
                                      <br>
                                      <p>Soviet Mars lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%205" target="_blank"><b>Mars 5 (1973)</b></a>
                                      <br>
                                      <p>Soviet Mars lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%204" target="_blank"><b>Mars 4 (1973)</b></a>
                                      <br>
                                      <p>Soviet attempted Mars orbiter </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mariner%2009" target="_blank"><b>Mariner 9 (1971)</b></a>
                                      <br>
                                      <p>NASA Mars orbiter </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%2002" target="_blank"><b>Mars 3 (1971)</b></a>
                                      <br>
                                      <p>Soviet Mars orbiter and lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%2002" target="_blank"><b>Mars 2 (1971)</b></a>
                                      <br>
                                      <p>Soviet Mars orbiter and lander</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mariner%2007" target="_blank"><b>Mariner 7 (1969)</b></a>
                                      <br>
                                      <p>NASA Mars flyby</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mariner%2006" target="_blank"><b>Mariner 6 (1969)</b></a>
                                      <br>
                                      <p>NASA Mars flyby</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mariner%2004" target="_blank"><b>Mariner 4 (1964)</b></a>
                                      <br>
                                      <p>NASA Mars flyby </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?Sort=Alpha&Letter=M&Alias=Mars%2001" target="_blank"><b>Mars 1 (1962)</b></a>
                                      <br>
                                      <p>Soviet Mars flyby </p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
              
              <!-- physical characteristics-->
              <div class='row'>
                <div class='col-sm-12'>
                  <div class="col-sm-12 more">
                      <h2 class="headers" style="font-size: 1.4em;">Physical Characteristics</h2>
                      <div class='col-md-4'>
                          <div class='img-holder imgSquare'>
                              <img src='images/mars3.jpg'>
                          </div>
                      </div>
                      <div class='col-md-8 blah inner2'>
                          <p>The bright rust color Mars is known for is due to iron-rich minerals in its regolith — the loose dust and rock covering its surface. The soil of Earth is a kind of regolith, albeit one loaded with organic content. According to NASA, the iron minerals oxidize, or rust, causing the soil to look red.</p>
                          <p>The cold, thin atmosphere means liquid water currently cannot exist on the Martian surface for any length of time. This means that although this desert planet is just half the diameter of Earth, it has the same amount of dry land.</p>
                      </div>
                  </div>
                </div>
              </div>
              
              <!--research/exp-->
              <div class='row '>
                <div class='col-sm-12'>
                  <div class="col-sm-12 more">
                      <h2 class="headers" style="font-size: 1.4em;">Research and Exploration</h2>
                      <div class='col-md-12 blah inner2'>
                          <p>Two orbiters — NASA's Mars Reconnaissance Orbiter and ESA's Mars Express — are keeping Mars Odyssey company over the planet. In 2011, NASA's Mars Science Laboratory mission, with its rover named Mars Curiosity, began to investigate Martian rocks to determine the geologic processes that created them and find out more about the present and past habitability of Mars. Among its findings is the first meteorite on the surface of the red planet. </p>
                          
                          <p>In September 2014, India’s Mars Orbiter Mission reached the red planet, making it the fourth nation to successfully enter orbit around Mars.
                          Robots aren’t the only ones looking to buy a ticket to Mars. A workshop group of government, academic, and industry scientists have found that a NASA-led manned mission to Mars should be possible by the 2030s.</p>
                      </div>
                  </div>
                </div>
              </div>
              
              <!--moons-->
              <div class='row '>
                 <div class='col-sm-12'>
                  <div class="col-sm-12 more">
                      <h2 class="headers" style="font-size: 1.4em;">Mars's Moons</h2>
                      <div class='col-md-12'>
                          <div class='img-group imgInList' id='imgTop'>
                              <img src='images/mars4.jpg'>
                          </div>
                      </div>
                      <div class='col-md-12 blah inner2'>
                          <p>Mars has two small moons: Phobos and Deimos. Phobos (fear) and Deimos (panic) were named for the mythological sons of Ares, the Greek counterpart of the Roman god, Mars. Both Phobos and Deimos were discovered in 1877 by American astronomer Asaph Hall. The moons appear to have surface materials similar to many asteroids in the outer asteroid belt, which leads most scientists to believe that Phobos and Deimos are captured asteroids.</p>
                          
                          <p>To learn more about these moons, click on the button below!</p>
                          <br>
                          <div class='text-center'><button><a href="marsmoons.php"><b>Mars's Moons</b></a></button></div>
                      </div>
                  </div>
                </div>
              </div>
              <hr>

              <!--news-->
              <div class="row">
                  <h2 class="headers" style="font-size: 1.7em;">Latest News about Mars</h2>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="thumbnail">
                          <img class="img-fluid" src="images/marsNews1.png">
                          <div class="caption blah">
                              <h4>NASA unveils first plane to fly on Mars</h4>
                              <h5>July 2, 2015</h5>
                              <p>NASA has unveiled a boomerang-shaped aircraft that could be the first to take flight on Mars to look for potential landing sites for future manned mission to the red planet.</p>
                              <a href="http://economictimes.indiatimes.com/news/science/nasa-unveils-first-plane-to-fly-on-mars/articleshow/47910430.cms"  class="btn btn-primary" role="button">Read More</a> 
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="thumbnail">
                          <img class="img-fluid" src="images/marsNews2.jpg">
                          <div class="caption blah">
                              <h4>Blue Auroras on Red Planet?</h4>
                              <h5>June 25, 2015</h5>
                              <p>While previous research had confirmed the presence of beautiful "southern lights" on Mars, the new study predicts for the first time that the auroras of the Red Planet may be visible to the human eye.</p>
                              <a href="http://www.nbcnews.com/science/space/blue-auroras-red-planet-mars-astronauts-may-be-able-see-n381906"  class="btn btn-primary" role="button">Read More</a>
                        </div>
                      </div>
                    </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="thumbnail">
                          <img class="img-fluid" src="images/marsNews3.jpg">
                          <div class="caption blah">
                              <h4>Glass Detected on Mars Could Hold Evidence of Life</h4>
                              <h5>June 8, 2015</h5>
                              <p>NASA announced on Monday that scientists had detected glass deposits on Mars from data collected by the Mars Reconnaissance Orbiter. Impact glass is created in the intense heat generated by a meteorite crashing into a planet's surface.</p>
                              <a href="http://www.nbcnews.com/science/space/mars-orbiter-detects-glass-planets-surface-n371811"  class="btn btn-primary" role="button">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Footer -->
      <?php include("footer.html"); ?>
      
      <script src="js/jquery.js"></script><!-- jQuery -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsI03Q0s4hteWFhxg1KhrxbR0pFM0TPA0"></script><!--Google Maps-->
      <script src="js/slider/jquery.bxslider.js"></script><!--slider-->
      <script src="js/basic.js"></script><!-- Custom JS-->
      <script>
        $(window).on('load', function() {
            $width = window.innerWidth;
            $min = 0;
            $max = 0;
            if ($width < 767) {
                $min=6;
                $max=9;
            } else {
                $min=15;
                $max=19;    
            }
            
            $('.slider8').bxSlider({
                mode: 'vertical',
                minSlides: $min,
                maxSlides: $max,
                slideMargin: 20,
                responsive: true,
                touchEnabled: true
              });
          });
      </script>
      <script src="js/bootstrap.min.js"></script> <!-- Bootstrap Core JavaScript -->
    </body>
</html>
