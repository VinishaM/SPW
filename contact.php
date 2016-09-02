<?php
	if (isset($_POST["submit1"]) || isset($_POST["submit2"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Sagan Walk Contact Form'; 
		$to = 'vm297@cornell.edu'; 
		$subject = 'Message from Sagan Planet Walk';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
        
        $result1 = "";
        $result2 = "";
        
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
            if (mail($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! We will get in touch with you shortly. </div>';
            } else {
                $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later</div>';
            }
        } else {
            $result='<div class="alert alert-danger">Please include a name, email and message to send an email!</div>';
        }
            
        if (isset($_POST["submit1"]) == true) {
                $result1 = $result;
        } else {
                $result2 = $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sagan Planet Walk: Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Oswald|Cinzel|Raleway' rel='stylesheet' type='text/css'>
    
    <!--slider CSS-->
    <link rel="stylesheet" type="text/css" href="js/slider/jquery.bxslider.css"/>
    
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    
</head>

<body id="pages">
    <div class='head'>
       <!-- <img id='title' src='images/SPIFBannerMini.png'>-->
    </div>
    
    <!-- Jumbotron Header -->
    <div id="box">
        <!-- Navigation from Bootstrap -->
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
                  <li><a class="category" href="index.html">Home</a></li>
                  <li><a class="category" href="sun.html">The Sun</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rocky Planets<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="mercury.html">Mercury</a></li>
                          <li><a href="venus.html">Venus</a></li>
                          <li><a href="earth.html">Earth</a></li>
                          <li><a href="mars.html">Mars</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giant Planets<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="jupiter.html">Jupiter</a></li>
                          <li><a href="saturn.html">Saturn</a></li>
                          <li><a href="uranus.html">Uranus</a></li>
                          <li><a href="neptune.html">Neptune</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Bodies<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="pluto.html">Pluto</a></li>
                          <li><a href="kepler.html">Kepler-37d</a></li>
                          <li><a href="alphaCentauri.html">Alpha Centauri</a></li>
                      </ul>
                  </li>
                  <li><a class=" active category" href="contact.php">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="header2">
            <h1>Contact Us!</h1>
        </div>
    </div>
    
    <div id="content" >
        
    <!--Planet Content-->
        <div class="container2">
        
            <!--planet info-->
            <div class="row">
                <!--basic links and pictures-->
                <div class='col-md-6'>
                    <div class="col-sm-12 prof">
                        <h2 class="headers" style="font-size: 1.4em;">Contact Sciencenter</h2>
                        <form class="form-horizontal" role="form" method="post" action="contact.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit1" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div cslass="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result1;?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-12 prof">
                        <h2 class="headers" style="font-size: 1.4em;">Contact SPIF</h2>
                        <form class="form-horizontal" role="form" method="post" action="contact.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit2" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div cslass="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result2;?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        <div class="row fRow">
            <div class="col-sm-6 foot">
                <div class = "row">
                    <h2>Sciencenter</h2>
                    <div class="col-lg-8">
                        <div class="map">
                            <div id="googleMap1" class= "map-holder"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 info">
                        <p>410 Thurston Ave,<br> Cornell University,<br> Ithaca, NY 14850</p>
                        <p><span class='glyphicon glyphicon-earphone'></span>(607) 272-0600</p>
                        <p><span class='glyphicon glyphicon-envelope'></span>info@sciencenter.org</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 foot">
                <div class = "row">
                    <h2>SPIF</h2>
                    <div class="col-lg-8">
                        <div class="map">
                            <div id="googleMap2" class= "map-holder" ></div>
                        </div>
                    </div>
                    <div class= "col-lg-4 info">
                        <p>317 Space Sciences,<br>Cornell University,<br> Ithaca, NY 14850</p>
                        <p><span class='glyphicon glyphicon-earphone'></span>(607)255-3833</p>
                        <p><span class='glyphicon glyphicon-print'></span>(607) 255-9002</p>
                        <p><span class='glyphicon glyphicon-envelope'></span>saganplanetwalk@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsI03Q0s4hteWFhxg1KhrxbR0pFM0TPA0"></script>
    
    <!--slider-->
    <script src="js/slider/jquery.bxslider.js"></script>
    
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
            
            getImgSize($('#img1').attr('src'), $('#img2').attr('src'));
           
            
        });
        
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
