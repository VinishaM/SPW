<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sagan Planet Walk: Home</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><!--Font Awesome-->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'><!--Google Fonts-->
        <link rel="stylesheet" type="text/css" href="js/slider/jquery.bxslider.css"/><!--slider CSS-->
        <link href="css/styles.css" rel="stylesheet"><!-- Custom CSS -->
        <link href='3DSolarSys/styles.css' rel='stylesheet'>
        <script src="js/jquery.js"></script><!-- jQuery -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsI03Q0s4hteWFhxg1KhrxbR0pFM0TPA0"></script><!--Google Maps-->
        <script src="js/slider/jquery.bxslider.js"></script><!--slider-->
        <script>
            $(".category").on("click", function() {
                if ($(".active")[0]) {
                    $(".active").removeClass("active");
                }
                $(this).addClass("active");
            });
            
            $(document).ready(function() {
                //create sciencenter map
                var map = new google.maps.Map(document.getElementById('googleMap1'), {
                    center: {lat: 42.4503514, lng: -76.5041515},
                    zoom: 13
                });
                var marker = new google.maps.Marker( {
                    position: {lat: 42.4503514, lng: -76.5041515},
                    map: map,
                });
                //create SPIF map
                var map = new google.maps.Map(document.getElementById('googleMap2'), {
                    center: {lat: 42.4539689, lng: -76.4864427},
                    zoom: 13
                });
                var marker = new google.maps.Marker( {
                    position: {lat: 42.4539689, lng: -76.4864427},
                    map: map,
                });
                
                //set side by size images to the same height
                function getImgSize(imgSrc1, imgSrc2) {
                    var newImg1 = new Image();
                    var newImg2 = new Image();

                    newImg1.onload = function() {
                      var height = newImg1.height;
                      var width = newImg1.width;
                        var height2 = newImg2.height;
                      var width2 = newImg2.width;
                        
                        var aspect1 = width/height;
                        var aspect2 = width2/height2;
                        
                        $('.imgCont1').css('flex-grow', parseFloat(aspect1));
                        $('.imgCont1').css('flex-shrink', 1.0);
                        $('.imgCont1').css('flex-basis', '0%');
                        $('.imgCont2').css('flex-grow', parseFloat(aspect2));
                        $('.imgCont2').css('flex-shrink', 1.0);
                        $('.imgCont2').css('flex-basis', '0%');

                    }

                    newImg1.src = imgSrc1; // this must be done AFTER setting onload
                    newImg2.src = imgSrc2;
                }
                
                getImgSize($('#img3').attr('src'), $('#img4').attr('src'));

            });
            
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script src="3DSolarSys/prefixfree.min.js"></script>
        <script src="3DSolarSys/index.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>

    <body id="pages">
        <div class='head'>
           <!-- <img id='title' src='images/SPIFBannerMini.png'>-->
        </div>
        
        <!--code for 3d animated solar system, made by Julian Garnier, from https://codepen.io/anon/pen/EyzXxO -->
        <div id='holder' class="opening hide-UI view-2D zoom-large data-close controls-close">
            
            <!--removed controls-->
            <div id="universe" class="scale-stretched">
              <div id="galaxy">
                <div id="solar-system" class="earth">
                  <div id="mercury" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <dl class="infos">
                          <dt>Mercury</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="venus" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <dl class="infos">
                          <dt>Venus</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="earth" class="orbit">
                    <div class="pos">
                      <div class="orbit">
                        <div class="pos">
                          <div class="moon"></div>
                        </div>
                      </div>
                      <div class="planet">
                        <!--<dl class="infos">
                          <dt>Earth</dt>
                          <dd><span></span></dd>
                        </dl>-->
                      </div>
                    </div>
                  </div>
                  <div id="mars" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <dl class="infos">
                          <dt>Mars</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="jupiter" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <dl class="infos">
                          <dt>Jupiter</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="saturn" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <div class="ring"></div>
                        <dl class="infos">
                          <dt>Saturn</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="uranus" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <dl class="infos">
                          <dt>Uranus</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="neptune" class="orbit">
                    <div class="pos">
                      <div class="planet">
                        <dl class="infos">
                          <dt>Neptune</dt>
                          <dd><span></span></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div id="sun">
                    <dl class="infos">
                      <dt>Sun</dt>
                      <dd><span></span></dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            
            <div id='navHolder'>
                <div id="navbar2">
                    <h3>3D Solar System by <a href="https://twitter.com/JulianGarnier" target="_blank">@JulianGarnier</a></h3>
                </div>
                <nav class="navbar-sm navbar-custom shadow">
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
                          <li><a class="active category" href="index.php">Home</a></li>
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
                              <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Bodies<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="pluto.php">Pluto</a></li>
                                  <li><a href="kepler.php">Kepler-37d</a></li>
                                  <li><a href="alphaCentauri.php">Alpha Centauri</a></li>
                              </ul>
                          </li>
                          <li><a class="category" href="contact.php">Contact</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div  class='container2'>
            <div class='row intro'>
                <div class="col-sm-6 col-xs-12">
                    <div class='desc'>
                        <h2 class="headers">Take a Stroll Through the Solar System</h2>
                        <div class='block'>
                            <p>Take an out-of-this-world trek along the Sagan Planet Walk, the Sciencenter’s 1,200-meter-long (3/4-mile), 1:5 billion, <b>scale model of the Solar System</b>. This site, created in partnership with Cornell University’s Spacecraft Planetary Imaging Facility (SPIF),  is a supplementary guide to the Sagan Planet Walk.</p>

                            <p>The pages within this site will provide additional, in-depth information about each planet, star, and other body featured on the walking tour. While on your tour of the Sagan Planet Walk, scan the <b>QR codes</b> found in the bottom right corner of the informational plaque at each planet station to learn about <b>recent discoveries</b>, <b>current research</b> in space exploration, and <b>fun facts</b> about our Solar System.</p>
                        </div>
                    </div>
                    <div class="img-group">
                        <div class='imgCont1'>
                            <img id="img1" src="images/people2.jpg">
                        </div>
                    </div>
                    <div class="img-group">
                        <div class='imgCont1'>
                            <img id="img3" src="images/people3.jpg">
                        </div>
                        <div class='imgCont2'>
                           <img id="img4" src="images/people5.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 paddingTop">
                    <div class="img-group">
                        <div class='imgCont1'>
                            <img id="img1" src="images/people.jpg">
                            <div class="buttons">
                                <button><a href="http://www.sciencenter.org/sagan-walk.html" target='_blank'><b>Visit Sciencenter</b></a></button>
                                <button><a href="http://spif.astro.cornell.edu"><b>Visit SPIF</b></a></button>                            
                            </div>
                        </div>
                    </div> 
                    <div class='desc'>
                        <h2 class="headers">Planetary Passport</h2>
                        <div class='block'>
                            <p>You can purchase a <b>Passport to the Solar System</b> for $4 to use as you embark on your 1,200-meter walk. The passport provides interesting <b>facts</b> about each stop while posing <b>questions</b> to encourage discussion. Using this1 as a guide, you are invited to stop at each planet station to read the information provided in the passport and to have your passport stamped as proof of your “visit” to each planet. Each stamp is a Greek symbol that corresponds to the Sun or planet. Take your fully stamped, purchased passport to the Sciencenter for <b>one free admission!</b></p>
                            <p>Passports are sold at:</p>
                            <ul>
                                <li><b>Sciencenter</b>, 601 1st Street</li>
                                <li><b>15 Steps Gallery</b>, 171 The Commons</li>
                                <li><b>Cat’s Pajamas</b>, in the DeWitt Mall</li>
                                <li><b>Ticket Center Ithaca</b>, 171 The Commons</li>
                                <li><b>Ithaca/Tompkins County Convention and Visitors Bureau</b>, 904 East Shore Drive</li>
                            </ul>
                        </div>
                    </div>
                    <div class='desc'>
                        <h2 class="headers">Free Passport</h2>
                        <div class='block'>
                            <p>Alternatively, you can download the Passport to the Solar System for <b>free</b> below. <em><b>Please note that the downloadable passports do not qualify for free admission to the Sciencenter.</b></em></p>
                            <div class="buttons">
                                <button><a class='passport' href="images/passport.pdf">Passport Download</a></button>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class='row intro'>
                <div class="col-sm-12">
                    <div class='desc'>
                        <h2 class="headers">Carl Sagan</h2>

                        <div class='block'>
                            <div class='row noSideMargin'>
                              <div class="col-md-4 noSidePadding" align="center">
                                  <div id='sagan'>
                                      <img id="img3" src="images/Carl_Sagan.jpg">
                                  </div>
                              </div>
                              <div class="col-md-8 noSidePadding">
                                  <p>Carl Sagan was Professor of Astronomy and Space Sciences and Director of the Laboratory for Planetary Studies at Cornell University. He was heavily involved in the American space program, from briefing Apollo astronauts before their Moon flights, to leading experiments on the Mariner, Viking, Voyager, and Galileo expeditions, and investigating mysteries like Titan's red haze.</p>

                                  <p>He was a strong advocate of the sciences and a great supporter of the Sciencenter, as well as prominent memeber of the Ithaca community for more than 30 years. We name the planet walk in Carl Sagan's honor in the hopes of continuing his mission to excite future generations about the romance of the scientic enterprise and to convey something of the preciousness and fragility of our tiny world in the context of the vastness of the Cosmos.</p>
                                </div>
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
