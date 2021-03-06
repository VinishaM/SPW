<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sagan Planet Walk: Uranus</title>
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
                <h1>Uranus</h1>
            </div>
        </div>
        
        <!--Planet Content-->
        <div id="content" >
            <div class="container2">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 pics"><!--basic links and pictures-->
                        <div class="img-group">
                            <div class='imgCont1' >
                                <img id="img1" src="images/uranus1.jpg">
                                <div class="buttons">
                                    <button><a href="http://www.sciencenter.org/sagan-walk.html"><b>Visit Sciencenter</b></a></button>
                                    <button><a href="images/walkmap.pdf"><b>Planet Walk Map</b></a></button>
                                </div>
                            </div>
                            <div class='imgCont2'>
                                <img id="img2" src="images/uranusstop.png">
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
                                <li class='blah'><b>Mass:</b> 8.68103 x 10^16 billion kg (14.536 x Earth)</li>
                                <li class='blah'><b>Equatorial Diameter:</b> 51,118 km</li>
                                <li class='blah'><b>Polar Diameter:</b> 49,946 km</li>
                                <li class='blah'><b>Equatorial Circumference:</b> 159,354 km</li>
                                <li class='blah'><b>Known Moons:</b> 27</li>
                                <li class='blah'><b>Notable Moons:</b> Oberon, Titania, Miranda, Ariel & Umbriel</li>
                                <li class='blah'><b>Known Rings:</b> 13</li>
                                <li class='blah'><b>Orbit Distance:</b> 2,870,658,186 km (19.22 x Earth's Distance to the Sun)</li>
                                <li class='blah'><b>Orbit Period:</b> 30,687.15 Earth days (84.02 Earth years)</li>
                                <li class='blah'><b>Surface Temperature:</b> -197°C</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8"><!--basic info-->
                        <div class='col-sm-12 more noSideMargin'>
                            <h2 class="headers" style="font-size: 1.4em;" >Basic Information</h2>
                            <div class='col-sm-12 blah inner2'>
                                <p>Uranus is the only giant planet whose equator is nearly at right angles to its orbit. A collision with an Earth-sized object may explain the unique tilt. Nearly a twin in size to Neptune, Uranus has more methane in its mainly hydrogen and helium atmosphere than Jupiter or Saturn. Methane gives Uranus its blue tint.</p>
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
                            <h2 class="headers" style="font-size: 1.4em;">10 Need-to-Know Facts about Uranus</h2>
                            <div class='col-md-7'>
                                <ol class="rounded-list">
                                    <li><a >If the sun were as tall as a typical front door, Uranus would be about as big as a baseball.</a></li>
                                    <li><a >Uranus is the seventh planet from the sun at a distance of about 2.9 billion km (1.8 billion miles).</a></li>
                                    <li><a >One day on Uranus takes about 17 hours, and one year on Uranus lasts about 84 Earth years.</a></li>
                                    <li><a >Uranus is an ice giant. Most (80 percent or more) of the planet's mass is made up of a hot dense fluid of "icy" materials – water (H2O), methane (CH4). and ammonia (NH3) – above a small rocky core.</a></li>
                                    <li><a >Uranus has an atmosphere which is mostly made up of hydrogen (H2) and helium (He), with a small amount of methane (CH4).</a></li>
                                    <li><a >Uranus has 27 moons. Uranus' moons are named after characters from the works of William Shakespeare and Alexander Pope.</a></li>
                                    <li><a>Uranus has faint rings. The inner rings are narrow and dark and the outer rings are brightly colored.</a></li>
                                    <li><a >Voyager 2 is the only spacecraft to have visited Uranus.</a></li>
                                    <li><a >Uranus cannot support life as we know it.</a></li>
                                    <li><a >Like Venus, Uranus has a retrograde rotation (east to west). Unlike any of the other planets, Uranus rotates on its side, which means it spins horizontally.</a></li>
                                </ol>
                            </div>
                            <div class='col-md-5'>
                                <div class='img-holder imgSquare'>
                                    <img src='images/uranus2.jpg'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--moons-->
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="col-sm-12 more">
                            <h2 class="headers" style="font-size: 1.4em;">Uranus's Moons</h2>
                            <div class='col-md-12'>
                                <div class='img-holder imgSquare' id='imgTop'>
                                    <img src='images/uranusMoon.jpg'>
                                </div>
                            </div>
                            <div class='col-md-12 blah inner2'>
                                <p>Titania and Oberon are Uranus' largest moons. Like all of Uranus' large moons, Oberon is composed of roughly half ice and half rock. Oberon has at least one large mountain that rises about 6 km off the surface. Titania has prominent system of fault valleys, some nearly 1,000 miles long. There is indication of some tectonic extension of Titania's crust, and deposits of highly reflective material, which may represent frost, can be seen along the sun-facing valley walls.</p>
                                
                                <p>To learn more about Uranus' moons, click the button below!</p>
                                <br>
                                <div class='text-center'><button><a href="uranusmoons.php"><b>Uranus's Moons</b></a></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!--news-->
                <div class="row">
                    <h2 class="headers" style="font-size: 1.7em;">Latest News about Uranus</h2>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/urNews1.jpg">
                            <div class="caption blah">
                                <h4>Strange mega storms sweep Uranus</h4>
                                <h5>September 5, 2012</h5>
                                <p>Ever since its equinox in 2007, when the Sun shined directly on its equator, the seventh planet has been becoming more active. Last year it hit a new peak.</p>
                                <a href="http://www.bbc.com/earth/story/20150121-mega-storms-sweep-uranus"  class="btn btn-primary" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/urNews1.jpg">
                            <div class="caption blah">
                                <h4>Strange mega storms sweep Uranus</h4>
                                <h5>September 5, 2012</h5>
                                <p>Ever since its equinox in 2007, when the Sun shined directly on its equator, the seventh planet has been becoming more active. Last year it hit a new peak.</p>
                                <a href="http://www.bbc.com/earth/story/20150121-mega-storms-sweep-uranus"  class="btn btn-primary" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/urNews2.jpg">
                            <div class="caption blah">
                                <h4>Watch the Moon Photobomb Uranus</h4>
                                <h5>June 11, 2015</h5>
                                <p>Scientists are calling it "Uranus, interrupted." For a moment on Thursday, Uranus will disappear from the sky, eclipsed briefly by the moon.</p>
                                <a href="http://www.bbc.com/earth/story/20150121-mega-storms-sweep-uranus"  class="btn btn-primary" role="button">Read More</a>
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
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap Core JavaScript -->
    </body>
</html>
