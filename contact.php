<?php
	if (isset($_POST["submit1"]) || isset($_POST["submit2"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Sagan Walk Contact Form'; 
		$subject = 'Message from Sagan Planet Walk';
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if (isset($_POST["submit1"])) {
            $to = 'vm297@cornell.edu'; 
        } else {
            $to = 'vm297@cornell.edu'; 
        }

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
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'><!--Google Fonts-->
        <link rel="stylesheet" type="text/css" href="js/slider/jquery.bxslider.css"/><!--slider CSS-->
        <link href="css/styles.css" rel="stylesheet"><!-- Custom CSS -->
        
    </head>

    <body id="pages">
        <div class='head'>
           <!-- <img id='title' src='images/SPIFBannerMini.png'>-->
        </div>

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
                          <a href="#" class="dropdown-toggle category" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Bodies<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="pluto.php">Pluto</a></li>
                              <li><a href="kepler.php">Kepler-37d</a></li>
                              <li><a href="alphaCentauri.php">Alpha Centauri</a></li>
                          </ul>
                      </li>
                      <li><a class=" active category" href="contact.php">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="header2">
                <h1>Contact Us!</h1>
            </div>
        </div>
    
        <!--Planet Content-->
        <div id="content" >
            <div class="container2">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 pics"><!--Sciencenter blurb-->
                        <h1>Ithaca Sciencenter</h1>
                        <div class='col-sm-12 blah' style="font-size: 1.2em;">
                            <p>The Sciencenter inspires excitement for science through interactive exhibits and programs that engage, educate and empower. Our non-profit, hands-on museum offers guests of all ages more than 250 exhibits, educational programs, a gift shop, and seasonal outdoor science playground and mini-golf course. Look, touch, listen & discover at the Sciencenter.</p>
                        </div>
                        <div class='col-sm-12'>
                            <input id="Sciencenter" name="submit1" type="submit" value="Contact Sciencenter" class="btn btn-primary">        
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12" >
                        <img src='images/sciencenter.jpg'>
                    </div>
                </div>

                <div class='row'>
                    <div id="spifImg" class="col-sm-6 col-xs-12">
                        <img src='images/spif.jpg'>
                    </div>
                    <div id="spifContent" class="col-sm-6 col-xs-12 pics"><!--SPIF-->
                        <h1>SPIF</h1>
                        <div class='col-sm-12 blah' style="font-size: 1.2em;">
                            <p>Sponsored jointly by NASA's Planetary Geology and Geophysics Program and Cornell University, SPIF is one member of the international system of Regional Planetary Image Facilities (RPIFs) which function as libraries for planetary image data and maintain ancillary and associated information about the data, including geologic maps and mission documentation.</p>
                        </div>
                        <div class='col-sm-12'>
                            <input id="SPIF" name="submit2" type="submit" value="Contact SPIF" class="btn btn-primary">        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class='container'>
                    <div id='formHolder' class="col-sm-12 prof">
                        <h2 id='contactHeader' class="headers" style="font-size: 1.4em;">Contact Sciencenter</h2>
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
                                    <?php echo $result;?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <!-- Footer -->
        <?php include("footer.html"); ?>
        
        <script src="js/jquery.js"></script><!-- jQuery -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsI03Q0s4hteWFhxg1KhrxbR0pFM0TPA0"></script><!--Google Maps-->
        <script src="js/basic.js"></script><!-- Custom JS-->
        <script src="js/bootstrap.min.js"></script><!-- Bootstrap Core JavaScript -->
        <script>
            $(document).ready(function(){
                $('#formHolder').hide();
            });

            $('#Sciencenter').click(function(){
                var name = this.id;
                if (!$('#formHolder').is(":visible")) {
                    $('#formHolder').slideToggle();
                    $('#contactHeader').html("Contact " + name);
                } else{
                    $('#formHolder').delay(10).slideUp(function(){
                        $('#contactHeader').html("Contact " + name);
                    });
                    $('#formHolder').slideDown();
                } 
            });

            $('#SPIF').click(function(){
                var name = this.id;
                if (!$('#formHolder').is(":visible")) {
                    $('#formHolder').slideToggle();
                    $('#contactHeader').html("Contact " + name);
                } else {
                    $('#formHolder').delay(10).slideUp(function(){
                        $('#contactHeader').html("Contact " + name);
                    });
                    $('#formHolder').slideDown();
                }
            });

        </script>
    </body>
</html>
