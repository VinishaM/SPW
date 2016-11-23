<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sagan Planet Walk: Neptune</title>
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
                          <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rocky Planets<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="mercury.php">Mercury</a></li>
                              <li><a href="venus.php">Venus</a></li>
                              <li><a href="earth.php">Earth</a></li>
                              <li><a href="mars.php">Mars</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="active dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giant Planets<span class="caret"></span></a>
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
                <h1>Neptune</h1>
            </div>
        </div>
        
        <!--Planet Content-->
        <div id="content" >
            <div class="container2">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 pics"><!--basic links and pictures-->
                        <div class="img-group">
                            <div class='imgCont1' >
                                <img id="img1" src="images/nep1.jpg">
                                <div class="buttons">
                                    <button><a href="http://www.sciencenter.org/sagan-walk.html"><b>Visit Sciencenter</b></a></button>
                                    <button><a href="images/walkmap.pdf"><b>Planet Walk Map</b></a></button>
                                </div>
                            </div>
                            <div class='imgCont2'>
                                <img id="img2" src="images/neptunestop.png">
                                <div class="buttons" id="pushDown">
                                    <button><a href="http://spif.astro.cornell.edu/"><b>Visit SPIF</b></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="prof">
                            <h2 class="headers" style="font-size: 1.4em;">Profile</h2>
                            <ul>
                                <li class='blah'><b>Mass:</b> 1.0241 x 10^17 billion kg (17.15 x Earth)</li>
                                <li class='blah'><b>Equatorial Diameter:</b> 49,528 km</li>
                                <li class='blah'><b>Polar Diameter:</b> 48,682 km</li>
                                <li class='blah'><b>Equatorial Circumference:</b> 155,600 km</li>
                                <li class='blah'><b>Known Moons:</b> 14</li>
                                <li class='blah'><b>Notable Moons:</b> Triton</li>
                                <li class='blah'><b>Known Rings:</b> 5</li>
                                <li class='blah'><b>Orbit Distance:</b> 4,498,396,441 km (30.10 x Earth's Distance to the Sun)</li>
                                <li class='blah'><b>Orbit Period:</b> 60,190.03 Earth days (164.79 Earth years)</li>
                                <li class='blah'><b>Surface Temperature:</b> -201 °C</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8"><!--basic info-->
                        <div class='col-sm-12 more noSideMargin'>
                            <h2 class="headers" style="font-size: 1.4em;" >Basic Information</h2>
                            <div class='col-sm-12 blah inner2'>
                                <p>Dark, cold and whipped by supersonic winds, Neptune is the last of the hydrogen and helium gas giants in our solar system. More than 30 times as far from the sun as Earth, the planet takes almost 165 Earth years to orbit our sun. In 2011 Neptune completed its first orbit since its discovery in 1846.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12"><!-- missions-->
                        <div class="col-sm-12 mission">
                            <h2 class="headers" style="font-size: 1.75em;" id='missions-header'>Missions</h2>
                            
                            <div class="slider8" id="missions">
                                <div class="slide">
                                    <div>
                                      <a href="http://voyager.jpl.nasa.gov/" target="_blank"><b>Voyager 2 (1997)</b></a>
                                      <br>
                                      <p>NASA Mission to Jupiter, Saturn, Uranus, Neptune, and beyond</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                
                <!-- need-to-know facts-->
                <div class="row">
                    <div class='col-sm-12'>
                        <div class="col-sm-12 need2know">
                            <h2 class="headers" style="font-size: 1.4em;">10 Need-to-Know Facts about Neptune</h2>
                            <div class='col-sm-12'>
                                <ol class="rounded-list">
                                    <li><a >If the sun were as tall as a typical front door, Neptune would be about as big as a baseball.</a></li>
                                    <li><a > Neptune is the eighth planet from the sun at a distance of about 4.5 billion km (2.8 billion miles) or 30.07 AU.</a></li>
                                    <li><a >One day on Neptune takes about 16 hours, and one year on Neptune lasts about 165 Earth years (60,190 Earth days).</a></li>
                                    <li><a >Neptune is a sister ice giant to Uranus. Neptune is mostly made of a very thick, very hot combination of water (H2O), ammonia (NH3), and methane (CH4) over a possible heavier, approximately Earth-sized, solid core.</a></li>
                                    <li><a >Neptune's atmosphere is made up mostly of hydrogen (H2), helium (He) and methane (CH4).</a></li>
                                    <li><a >Neptune has 13 confirmed moons (and 1 more awaiting official confirmation of discovery). Neptune's moons are named after various sea gods and nymphs in Greek mythology.</a></li>
                                    <li><a>Neptune has six rings.</a></li>
                                    <li><a >Voyager 2 is the only spacecraft to have visited Neptune.</a></li>
                                    <li><a >Neptune cannot support life as we know it.</a></li>
                                    <li><a >At times during the course of Neptune's orbit, dwarf planet Pluto is actually closer to the sun, and us, than Neptune. This is due to the unusual elliptical (egg) shape of Pluto's orbit.</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="col-sm-12 more">
                            <h2 class="headers" style="font-size: 1.4em;">Physical Characteristics</h2>
                            <div class='col-md-4'>
                                <div class='img-holder imgSquare'>
                                    <img src='images/nep3.jpg'>
                                </div>
                            </div>
                            <div class='col-md-8 blah inner2'>
                                <p>Neptune's cloud cover has an especially vivid blue tint that is partly due to an as-yet-unidentified compound and the result of the absorption of red light by methane in the planets mostly hydrogen-helium atmosphere. Photos of Neptune reveal a blue planet, and it is often dubbed an ice giant, since it possesses a thick, slushy fluid mix of water, ammonia and methane ices under its atmosphere and is roughly 17 times Earth's mass and nearly 58 times its volume.</p>
                                <p>Neptune's magnetic poles are tipped over by roughly 47 degrees compared with the poles along which it spins. As such, the planet's magnetic field, which is about 27 times more powerful than Earth's, undergoes wild swings during each rotation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--research/exp-->
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="col-sm-12 more">
                            <h2 class="headers" style="font-size: 1.4em;">Research and Exploration</h2>
                            <div class='col-md-12 blah inner2'>
                                <p>NASA's Voyager 2 satellite was the first and as yet only spacecraft to visit Neptune on Aug. 25, 1989. The satellite discovered Neptune's rings and six of the planet's moons — Despina, Galatea, Larissa, Naiad, Proteus and Thalassa. An international team of astronomers relying on ground telescopes announced the discovery of five new moons orbiting Neptune in 2003.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--moons-->
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="col-sm-12 more">
                            <h2 class="headers" style="font-size: 1.4em;">Neptune's Moons</h2>
                            <div class='col-md-12'>
                                <div class='img-holder imgSquare' id='imgTop'>
                                    <img src='images/nepMoon.jpg'>
                                </div>
                            </div>
                            <div class='col-md-12 blah inner2'>
                                <p>Neptune, the farthest planet from the sun, has 14 known moons. Almost half of the discoveries took place decades after NASA's Voyager 2 spacecraft swung by the planet and its system, demonstrating just how far telescope technology has progressed. Moons of this planet are named for Greek or Roman mythological characters with links to Neptune, Poseidon, or the ocean, according toInternational Astronomical Union guidelines. The irregular satellites are named after the daughters of Nereus and Doris, who were attendants of Neptune.</p>
                                
                                <p>To learn more about Neptune's moons, click the button below!</p>
                                <br>
                                <div class='text-center'><button><a href="neptunemoons.php"><b>Neptune's Moons</b></a></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!--news-->
                <div class="row">
                    <h2 class="headers" style="font-size: 1.7em;">Latest News about Neptune</h2>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/urNews1.jpg">
                            <div class="caption blah">
                                <h4>Neptune-sized planet with comet-like tail found with Hubble Telescope</h4>
                                <h5>June 26, 2015</h5>
                                <p>Scientists have spied a new, possible “game-changer” of a planet in the depths of space.</p>
                                <a href="http://www.washingtonpost.com/news/morning-mix/wp/2015/06/26/neptune-sized-planet-with-comet-like-tail-found-with-hubble-telescope/"  class="btn btn-primary" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/urNews1.jpg">
                            <div class="caption blah">
                                <h4>Neptune-sized planet with comet-like tail found with Hubble Telescope</h4>
                                <h5>June 26, 2015</h5>
                                <p>Scientists have spied a new, possible “game-changer” of a planet in the depths of space.</p>
                                <a href="http://www.washingtonpost.com/news/morning-mix/wp/2015/06/26/neptune-sized-planet-with-comet-like-tail-found-with-hubble-telescope/"  class="btn btn-primary" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/urNews2.jpg">
                            <div class="caption blah">
                                <h4>Is salt the key to unlocking the interiors of Neptune and Uranus?</h4>
                                <h5>June 22, 2015</h5>
                                <p>The interiors of several of our Solar System's planets and moons are icy, but the ice found inside these objects must exist under extreme pressures and high-temperatures, and potentially contains salty impurities, too.</p>
                                <a href="http://phys.org/news/2015-06-salt-key-interiors-neptune-uranus.html"  class="btn btn-primary" role="button">Read More</a>
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
                $min = 1;
                $max = 2;
                
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
        <script src="js/bootstrap.min.js"></script><!-- Bootstrap Core JavaScript -->
    </body>
</html>
