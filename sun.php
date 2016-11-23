<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sagan Planet Walk: Sun</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><!--Font Awesome-->
        <link href='https://fonts.googleapis.com/css?family=Oswald|Cinzel|Raleway' rel='stylesheet' type='text/css'><!--Google Fonts-->
        <link rel="stylesheet" type="text/css" href="js/slider/jquery.bxslider.css"/><!--slider CSS-->
        <link href="css/styles.css" rel="stylesheet"><!-- Custom CSS -->

        
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
                      <li><a class=" active category" href="sun.php">The Sun</a></li>
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
                <h1>The Sun</h1>
            </div>
        </div>

        <!--Planet Content-->
        <div id="content" >
            <div class="container2">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 pics"><!--basic links and pictures-->
                        <div class="img-group">
                            <div class='imgCont1' >
                                <img id="img1" src="images/sun1.jpg">
                                <div class="buttons">
                                    <button><a href="http://www.sciencenter.org/sagan-walk.html"><b>Visit Sciencenter</b></a></button>
                                    <button><a href="images/walkmap.pdf"><b>Planet Walk Map</b></a></button>
                                </div>
                            </div>
                            <div class='imgCont2'>
                                <img id="img2" src="images/sunstop.png">
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
                                <li class='blah'><b>Age:</b> 4.6 Billion Years</li>
                                <li class='blah'><b>Type:</b> Yellow Dwarf (G2V)</li>
                                <li class='blah'><b>Diameter:</b> 1,392,684 km</li>
                                <li class='blah'><b>Circumference at Equator:</b> 4,370,005.6 km</li>
                                <li class='blah'><b>Mass:</b> 1.9891 x 10^21 billion kg (333,060 x Earth)</li>
                                <li class='blah'><b>Surface Temperature:</b> 9,941 °F</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="col-sm-12 need2know"><!-- need-to-know facts-->
                            <h2 class="headers" style="font-size: 1.4em;">10 Need-to-Know Facts about the Sun</h2>
                            <ol class="rounded-list">
                                <li><a >The Sun is actually a star.</a></li>
                                <li><a >The Sun makes up 99.8% of the mass of the entire solar system.</a></li>
                                <li><a >Since the Sun is not a solid body, different parts of the Sun rotate at different rates. At the equator, the Sun spins once about every 25 Earth days, but at its poles the Sun rotates once every 36 days.</a></li>
                                <li><a >The solar atmosphere is where features like sunspots or solar flares are seen.</a></li>
                                <li><a >The Sun is orbited by eight planets, at least five dwarf planets, tens of thousands of asteroids, and as many as three trillion comets and icy bodies.</a></li>
                                <li><a >Without the Sun's intense energy there would be no life on Earth.</a></li>
                                <li><a >The temperature at the Sun's core is about 27 million degrees Fahrenheit.</a></li>
                                <li><a >Light from the Sun reaches Earth in around 8 minutes due to the speed of light.</a></li>
                                <li><a >The Sun itself is travelling about 220 kilometers per second around the center of the Milky Way.</a></li>
                                <li><a >Approximately every 11 years, the Sun reverses its overall magnetic polarity: its north magnetic pole becomes a south pole, and vice versa.</a></li>
                            </ol>
                        </div>
                        <div class="col-sm-12 more">
                            <h2 class="headers" style="font-size: 1.4em;">More Information</h2>
                            <div id="moreInner">
                            <p>Because of its <b>location</b> at the the center of our solar system, the Sun controls the weather and climate on all of the planets. The <b>distance  </b>between the Sun and the planets determines how much light and heat each planet will recieve. Therefore, planets closer to the Sun will have a higher temperature than planets that are farther away. </p>
                            <table>
                                <tr>
                                    <th>Planet</th>
                                    <th>Distance from Sun</th>
                                    <th>Average Surface Temperature</th>
                                </tr>
                                <tr>
                                    <td>Mercury</td>
                                    <td>58 million km</td>
                                    <td>350 ºC</td>
                                </tr>
                                <tr>
                                    <td>Venus</td>
                                    <td>108 million km</td>
                                    <td>460 ºC</td>
                                </tr>
                                <tr>
                                    <td>Earth</td>
                                    <td>150 million km</td>
                                    <td>20 ºC</td>
                                </tr>
                                <tr>
                                    <td>Mars</td>
                                    <td>228 million km</td>
                                    <td>-23 ºC</td>
                                </tr>
                                <tr>
                                    <td>Jupiter</td>
                                    <td>778 million km</td>
                                    <td>-120 ºC</td>
                                </tr>
                                <tr>
                                    <td>Saturn</td>
                                    <td>1,429 million km</td>
                                    <td>-180 ºC</td>
                                </tr>
                                <tr>
                                    <td>Uranus</td>
                                    <td>2, 871 million km</td>
                                    <td>-210 ºC</td>
                                </tr>
                                <tr>
                                    <td>Neptune</td>
                                    <td>4,504 million km</td>
                                    <td>-220 ºC</td>
                                </tr>
                                <tr>
                                    <td>Pluto</td>
                                    <td>5,913 million km</td>
                                    <td>-230 ºC</td>
                                </tr>
                            </table>
                            <br/>
                            <p>Venus is the only planet that does not follow the pattern of distance and surface temperature. This is due to the fact that Venus has an atmosphere and a <a href="http://www.nasa.gov/centers/ames/news/releases/2002/02_60AR.html"><b>run-away greenhouse effect.</b></a></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- missions-->
                    <div class="col-md-4 col-sm-12">
                        <div class="col-sm-12 mission">
                            <h2 class="headers" style="font-size: 1.8em;" id='missions-header'>Missions</h2>
                            
                            <div class="slider8" id="missions">
                                <div class="slide">
                                    <div>
                                      <a href="http://science.nasa.gov/missions/solar-probe/" target="_blank"><b>Solar Probe Plus (2015)</b></a>
                                      <br>
                                      <p>Mission to explore the Sun’s atmosphere</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                      <a href="https://www.nasa.gov/mission_pages/sdo/main/index.html" target="_blank"><b>Solar Dynamics Observatory (2010)</b></a>
                                      <br>
                                      <p> Mission to study the influence of the Sun on Earth and the inner solar system</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                      <a href="http://science.nasa.gov/missions/ibex/" target="_blank"><b>IBEX (2008)</b></a>
                                      <br>
                                      <p>Mission to detect the edge of the solar system</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.nasa.gov/mission_pages/hinode/index.html" target="_blank"><b>Hinode (2006)</b></a>
                                      <br>
                                      <p>Mission to study the relationship of magnetic energy from the photosphere to the corona</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.nasa.gov/mission_pages/stereo/main/index.html" target="_blank"><b>Stereo (2006)</b></a>
                                      <br>
                                      <p>Mission to study structure and evolution of solar storms</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://science.nasa.gov/missions/rhessi/" target="_blank"><b>RHESSI (2002)</b></a>
                                      <br>
                                      <p>Explores particle acceleration and energy release in solar flare</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://science.nasa.gov/missions/genesis/" target="_blank"><b>Genesis (2001)</b></a>
                                      <br>
                                      <p>Collected solar wind for two years</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://science.nasa.gov/missions/trace/" target="_blank"><b>TRACE (1998)</b></a>
                                      <br>
                                      <p> Mission to study three-dimensional magnetic structures emerging through the Sun’s photospere</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://science.nasa.gov/missions/ace/" target="_blank"><b>ACE (1997)</b></a>
                                      <br>
                                      <p> Designed to study spaceborne energetic particles and provide space weather data</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                    <a href="http://www.nasa.gov/mission_pages/soho/index.html" target="_blank"><b>SOHO (1995)</b></a>
                                      <br>
                                      <p>Solar and Heliospheric Observatory keeping watch on the Sun</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://science.nasa.gov/missions/wind/" target="_blank"><b>Wind (1994)</b></a>
                                      <br>
                                      <p>Mission to measure interplanetary conditions arising from solar wind</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://solarscience.msfc.nasa.gov/Yohkoh.shtml" target="_blank"><b>Yohkoh (1991)</b></a>
                                      <br>
                                      <p>Japanese solar mission with US and UK</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                    <a href="http://science.nasa.gov/missions/ulysses/" target="_blank"><b>Ulysses (1990)</b></a>
                                      <br>
                                      <p>Mission to investigate sun in three dimensions</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?MCode=Helios_02" target="_blank"><b>Helios 2 (1976)</b></a>
                                      <br>
                                      <p>Mission to investigate solar processes</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="https://solarsystem.nasa.gov/missions/profile.cfm?MCode=Helios_01" target="_blank"><b>Helios 1 (1974)</b></a>
                                      <br>
                                      <p>Mission to study solar processes and solar-terrestrial relationships </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                    <a href="https://solarsystem.nasa.gov/missions/profile.cfm?MCode=Pioneer_09" target="_blank"><b>Pioneer 9 (1968)</b></a>
                                      <br>
                                      <p>Sent to study space from heliocentric orbit</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.nasa.gov/centers/ames/missions/archive/pioneer.html" target="_blank"><b>Pioneer 8 (1967)</b></a>
                                      <br>
                                      <p>Sent to study interplanetary space</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.nasa.gov/centers/ames/missions/archive/pioneer.html" target="_blank"><b>Pioneer (1966)</b></a>
                                      <br>
                                      <p>Identical to Pioneer 6 and put into orbit to study the solar magnetic field</p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div>
                                     <a href="http://www.nasa.gov/centers/ames/missions/archive/pioneer.html" target="_blank"><b>Pioneer 6 (1965)</b></a>
                                      <br>
                                      <p>First in a series of solar orbiters</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>

                <!--research/exp-->
                <div class='row hist'>
                    <h2 class="headers" style="font-size: 1.4em;">Observation and History</h2>
                    <!--history-->
                    <div class="col-md-12 histInner">
                        <div class="col-sm-7 blah">
                            <p>Between 1962 and 1971, NASA launched a series of eight orbiting observatories known as the <b>Orbiting Solar Obervatory</b>. Seven of them were successful. They succeeded in analyzing the Sun and photographing the super-hot <b>corona</b> (outer atmosphere of the Sun), among other acheivements. In addition, NASA and the European Space Agency launced the <b>Ulysses</b> probe in 1990. It made the first observations of the Sun's <b>polar regions.</b> In 2004, NASA's Genesis spaceraft was able to return to Earth samples of the <a href="http://solarscience.msfc.nasa.gov/SolarWind.shtml"><b>solar wind.</b></a></p>
                        </div>
                        <div class="col-sm-5 img-holder" id="sunHist" align='center'>
                            <img class="img-fluid" src="images/sun4.jpg">
                        </div>
                    </div>
                </div>
                <hr>

                <!--news-->
                <div class="row">
                    <h2 class="headers" style="font-size: 1.7em;">Latest News about the Sun</h2>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/sun5.png">
                            <div class="caption blah">
                                <h4>NASA Captures Massive Eruption on the Sun</h4>
                                <h5>June 30, 2015</h5>
                                <p>An arching eruption which ultimately grew into a substantial coronal mass ejection, was recorded by NASA's Solar Dynamics Observatory</p>
                                <a href="http://www.usatoday.com/videos/news/have-you-seen/2015/06/30/29535615/" class="btn btn-primary" role="button">Read More</a> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/sun6.png">
                            <div class="caption blah">
                                <h4>Strong Sun Flare Could Trigger Earthly Storm</h4>
                                <h5>June 25, 2015</h5>
                                <p>On June 25th, a A M7.9-class flare produced a coronal mass ejection which could bathe the Earth in geomagnetic storms.</p>
                                <a href="http://www.space.com/29763-strong-sun-flare-could-trigger-earthly-storm-video.html" class="btn btn-primary" role="button">Read More</a>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img class="img-fluid" src="images/sun6.png">
                            <div class="caption blah">
                                <h4>Strong Sun Flare Could Trigger Earthly Storm</h4>
                                <h5>June 25, 2015</h5>
                                <p>On June 25th, a A M7.9-class flare produced a coronal mass ejection which could bathe the Earth in geomagnetic storms.</p>
                                <a href="http://www.space.com/29763-strong-sun-flare-could-trigger-earthly-storm-video.html" class="btn btn-primary" role="button">Read More</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php include("footer.html"); ?>
    </body> 
</html>
