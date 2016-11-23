<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sagan Planet Walk: Pluto</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><!--Font Awesome-->
        <link href='https://fonts.googleapis.com/css?family=Oswald|Cinzel|Raleway' rel='stylesheet' type='text/css'><!--Google Fonts-->
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
                          <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giant Planets<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="jupiter.php">Jupiter</a></li>
                              <li><a href="saturn.php">Saturn</a></li>
                              <li><a href="uranus.php">Uranus</a></li>
                              <li><a href="neptune.php">Neptune</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="active dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Bodies<span class="caret"></span></a>
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
                <h1>Pluto</h1>
            </div>
        </div>
        
        <!--Planet Content-->
        <div id="content" >
            <div class="container2">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 pics"><!--basic links and pictures-->
                        <div class="img-group">
                            <div class='imgCont1' >
                                <img id="img1" src="images/pluto1.jpg">
                                <div class="buttons">
                                    <button><a href="http://www.sciencenter.org/sagan-walk.html"><b>Visit Sciencenter</b></a></button>
                                    <button><a href="images/walkmap.pdf"><b>Planet Walk Map</b></a></button>
                                </div>
                            </div>
                            <div class='imgCont2'>
                                <img id="img2" src="images/plutoStop.jpg">
                                <div class="buttons" id="pushDown">
                                    <button><a href="http://spif.astro.cornell.edu/"><b>Visit SPIF</b></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12"><!--quick facts-->
                        <div class="prof">
                            <h2 class="headers" style="font-size: 1.4em;">Profile</h2>
                            <ul>
                                <li class='blah'><b>Mass:</b> 13.05 x 10^13 billion kg (.00218 x Earth)</li>
                                <li class='blah'><b>Equatorial Diameter:</b> 2,368 km (+- 20km)</li>
                                <li class='blah'><b>Known Moons:</b> 5</li>
                                <li class='blah'><b>Notable Moons:</b> Charon, Nix, Hydra, Kerberos and Styx</li>
                                <li class='blah'><b>Orbit Distance:</b>  5,874,000,000 km (39.26 x Earth's Distance to the Sun)</li>
                                <li class='blah'><b>Orbit Period:</b> 246.04 Earth years</li>
                                <li class='blah'><b>Surface Temperature:</b> -229°C</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8">
                        <div class='col-sm-12 more noSideMargin'>
                            <h2 class="headers" style="font-size: 1.4em;" >Basic Information</h2>
                            <div class='col-sm-12 blah inner2'>
                                <p>Pluto was once considered to be the ninth and most distant planet from the sun. However, it is now no longer known to be a planet, but instead a dwarf planet. It is the largest known dward planet in the solar system and also one of the largest known members of the Kuiper Belt - a zone beyond the orbit of Neptune thought to be populated by hundreds of thousands of rocky and icy bodies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12"><!-- missions-->
                        <div class="col-sm-12 mission">
                            <h2 class="headers" style="font-size: 1.75em;" id='missions-header'>Missions</h2>
                            
                            <div class="slider8" id="missions">
                                <div class="slide">
                                    <div>
                                        <a href="http://pluto.jhuapl.edu/index.php" target="_blank"><b>New Horizons (2006)</b></a>
                                      <br>
                                      <p>Pluto Flyby, Kuiper Belt mission</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                
                <!--need-to-know facts-->
                <div class="row">
                    <div class='col-sm-12'>
                        <div class="col-sm-12 need2know">
                            <h2 class="headers" style="font-size: 1.4em;">10 Need-to-Know Facts about Pluto</h2>
                            <div class='col-sm-12'>
                                <ol class="rounded-list">
                                    <li><a >If the sun were as tall as a typical front door, dwarf planet Pluto would be about the size of the head of a pin.</a></li>
                                    <li><a >Pluto orbits our sun at an average distance of 3.7 billion miles (5.9 billion kilometers) or 39.5 AU.</a></li>
                                    <li><a >One day on Pluto takes about 153 hours, and one year on Pluto lasts about 248 Earth years.</a></li>
                                    <li><a >It is thought that Pluto has a rocky core surrounded by a mantle of water ice with other ices coating its surface.</a></li>
                                    <li><a >Pluto has five known moons. Pluto is sometimes called a double-planet system due to the fact that its moon Charon is quite large and orbits close to its parent planet.</a></li>
                                    <li><a >There are no known rings around Pluto.</a></li>
                                    <li><a>Pluto has a thin, tenuous atmosphere that expands when it comes closer to the sun and collapses as it moves farther away -- similar to a comet.</a></li>
                                    <li><a >NASA's New Horizons spacecraft is the first mission sent to encounter the Pluto-system and other members of the Kuiper Belt.</a></li>
                                    <li><a >Scientists do not think Pluto can support life as we know it, though some believe it is possible Pluto could possess a hidden ocean under its surface.</a></li>
                                    <li><a >Pluto was considered a planet from 1930, when it was first discovered, until 2006. The discovery of similar-sized worlds deeper in the distant Kuiper Belt sparked a debate which resulted in a new official definition of a planet. The new definition did not include Pluto.</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--moons-->
                <div class='row '>
                    <div class='col-sm-12'>
                        <div class="col-sm-12 more">
                            <h2 class="headers" style="font-size: 1.4em;">Pluto's Moons</h2>
                            <div class='col-md-12'>
                                <div class='img-holder imgSquare' id='imgTop'>
                                    <img src='images/plutoMoon.jpg'>
                                </div>
                            </div>
                            <div class='col-md-12 blah inner2'>
                                <p> </p>
                                
                                <p>To learn more about Pluto's moons, click the button below!</p>
                                <br>
                                <div class='text-center'><button><a href="plutomoons.php"><b>Pluto's Moons</b></a></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!--news-->
                <div class="row">
                    <h2 class="headers" style="font-size: 1.7em;">Latest News about Pluto</h2>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/plutoNews1.jpg">
                            <div class="caption blah">
                                <h4>New Horizons: Release of Pluto images next step after probe's historic flyby</h4>
                                <h5>July 15, 2015</h5>
                                <p>The Pluto mission completes the reconnaissance of the classical solar system, and it makes the United States the first nation to send a space probe to every planet from Mercury to Pluto.</p>
                                <a href="http://www.cnn.com/2015/07/15/us/nasa-new-horizons-pluto-flyby/" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/plutoNews2.png">
                            <div class="caption blah">
                                <h4>Pluto Mission: NASA’s New Horizons ‘Phones Home’ After Blackout</h4>
                                <h5>July 14, 2015</h5>
                                <p>NASA has re-established contact with its New Horizons spacecraft after a planned communications blackout as the probe completes humankind’s first flyby of Pluto.</p>
                                <a href="http://ktla.com/2015/07/14/unmanned-spacecraft-completes-historic-flyby-of-pluto/"  class="btn btn-primary" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/plutoNews3.jpg">
                            <div class="caption blah">
                                <h4>How Big Is Pluto? New Horizons Settles Decades-Long Debate</h4>
                                <h5>July 13, 2015</h5>
                                <p>NASA’s New Horizons mission has answered one of the most basic questions about Pluto—its size.</p>
                                <a href="https://www.nasa.gov/feature/how-big-is-pluto-new-horizons-settles-decades-long-debate"  class="btn btn-primary" role="button">Read More</a>
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
              if ($width < 768) {
                  $min=6;
                  $max=9;
              } else {
                  $min=12;
                  $max=15;    
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
        <script src="js/bootstrap.min.js"></script><!-- Bootstrap Core JavaScript -->
    </body>
</html>
