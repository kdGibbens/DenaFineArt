<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Dena Thomas-Aouassou, Sculpture, Fine art, art, New Mexico, Illinois, Kansas, Morocco, Master Fine Arts, University Illinois Carbondale, Cast Iron, Wood Working, Mixed Media">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dena Thomas-Aouassou | Fine Art &amp; Sculpture</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css"
>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrap">
   
  	<nav class="navbar navbar-inverse ">
        <div class="container">
          <!--Hamburger Menu in mobile-->
          <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                       
            </button>

            <!--Dena LOGO-->
            <a class="navbar-brand" href="index.html"><p>Dena Thomas-Aouassou Sculpture &amp; Fine Art</p></a>
          </div>

          <!--Full Navbar-->
          <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="../index.html">Home</a></li>
              <li><a href="ambLand.html">Ambigious Landscapes</a></li>
              <li><a href="transform.html">Transformation</a></li>
              <li><a href="mixedBag.html">Mixed Bag</a></li>
              <li><a href="contact.php">Contact Me</a></li>
            </ul>

          </div>
        </div>
      </nav>
      <!--Header End-->

      <!--Form begins-->


            <?php

              $name = "";
              $email = "";
              $message = "";
              $human = "";

              if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $human = $_POST['human'];
              }

              if (isset($_POST['subject'])) {
                $subject = $_POST['subject'];
              }
              else {
                $subject = "Not provided";
              }

              $to = 'gibbenskd@gmail.com';
              $headers = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset: utf8' . "\r\n";
              $headers .= 'From: Email from Dena Thomas-Aouassoua Fine Art <' . $email . ">"  . "\r\n";
              $body = '<p>From: ' . $name . '<br />Email: ' . $email . '<p>' . $message . '</p>';
                  
              if (isset($_POST['submit']) && $human == '42') {        
                if (mail($to, $subject, $body, $headers)) { 
                  echo '<p class="alert alert-success">Thank you! Your message has been sent.</p>';
                } 
                else { 
                  echo '<p class="message-error">Oops, something went wrong, please try again.</p>'; 
                } 
              } 
              else if (isset($_POST['submit']) && $human != '42') {
                echo '<p class="message-error">Incorrect answer, please try again.</p>';
              }
           ?> 

        <div class="container">
          <!--Aside begins-->
      <div class="jumbotron jumbtron-page col-md-5 resume">
        <p>Thank you for visiting my site. I am a visual artist who works mostly in sculpture and found object art. Originally from Hays, Kansas I served in the U.S. Peace Corps in Morocco. I recived my M.F.A from the University of Illinois Carbondale in 2014 and I currently reside in New Mexico. If you are interested in contacting me about shows or the art work I would love to hear from you.
         Special thanks to Erin Taylor for the photographs and Kelly Gibbens for helping build this website.</p>
        <a href="#">
          <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
          Download my resume.
        </a>
      </div>
       <!--Aside ends-->
          <div class="jumbotron jumbtron-page col-md-6 col-md-offset-1">
          <form id="contact-form" action="" method="post" role="form" >
            <fieldset>
              <legend>CONTACT ME</legend>
              <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" placeholder="Joe Smith" tabindex="9" class="input-group form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" placeholder="example@email.com" tabindex="10" class="input-group form-control" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject: </label>
                <input type="text" id="subject" name="subject" placeholder="Art Show" tabindex="11" class="input-group form-control" >
              </div>
              <div class="form-group">
                <label for="message">Message: </label>
                <textarea id="message" name="message" placeholder="What's on your mind?" tabindex="12" class="input-group form-control" required></textarea>
            </div>
            </fieldset>
            <fieldset>
              <div class="form-group">
                <label for="human">Human? </label>
                <div class="catpcha">
                <p>Captcha: What is 41+ 1?<p/>
                <input type="text" id="human" name="human" placeholder="Your final answer." tabindex="13" class="input-group form-control" required>
              </div>
            </div>
            </fieldset>
            <div class="box-contact-btns push-right">
              <button type="submit" name="submit" tabindex="14" class="btn btn-info">Send</button>
              <button type="reset" tabindex="15" class="btn btn-info">Clear</button>
            </div>
          </form> 
        </div>
        </div>

      <!--Form Ends-->

    </div>

      <!--Footer Begins-->
      <div id="footer">
        <div class="container">
            <a href="../index.html">Dena Thomas-Aoussoa Fine Art &copy; 2015</a>
          
            <div class="socialMedia">

            </div>
        </div>
      </div>
      <!--Footer End-->

    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../js/bootstrap.min.js"></script>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59708360-2', 'auto');
        ga('send', 'pageview');
     </script>

  </body>
</html>