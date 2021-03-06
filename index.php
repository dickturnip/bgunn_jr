<?php
      /*$email;
      $captcha;

      if(isset($_POST['email'])){
        $email=$_POST['email'];
      }if(isset($_POST['comment'])){
        $email=$_POST['comment'];
      }if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
      }
      if(!$captcha){
        $message = '<h2>Please check the the captcha form.</h2>';
        exit;
      }
      $secretKey = "Put your secret key here";
      $ip = $_SERVER['REMOTE_ADDR'];
      $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
      $responseKeys = json_decode($response,true);
      if(intval($responseKeys["success"]) !== 1) {
        echo '<h2>You are spammer ! Get the @$%K out</h2>';
      } else {
        echo '<h2>Thanks for posting comment.</h2>';
      }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bobby Gunn Jr</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#top">Bobby Gunn Jr</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#record">Record</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1 class="lead">Bobby Gunn Jr</h1>
                <h2>Rising Super-Middleweight Prospect</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="section-1" id="about">
        <div class="container">
            <!-- First Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-right slide-left" src="https://dickturnip.github.io/bgunn_jr/media/images/IMG_1798.png">
                <h2 class="featurette-heading">Bobby Gunn Jr
                <span class="text-muted">Rising Middleweight Prospect</span>
            </h2>
                <p class="lead">Bobby Gunn Jr is a talented and explosive middleweight prospect from Hackensack, New Jersey</p>
            </div>
        </div>
    </div>
    <div class="section-2" id="record">
        <div class="container">
            <!-- Second Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-left slide-right" src="https://dickturnip.github.io/bgunn_jr/media/images/header.png">
                <h2 class="featurette-heading">Professional Record
                <span class="text-muted">8 - 0 - 0</span>
            </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
        </div>
    </div>
    <div class="section-3" id="contact" class="particle">
        <div class="container">
          <h2 class="featurette-heading">Contact Bobby Gunn Jr</h2>
          <br /><br />
            <!-- Contact form-->
            <form class="form-horizontal" role="form" method="post" action="index.php">
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
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-2">
                      <div class="g-recaptcha" data-sitekey="6LfeVgoUAAAAAOtA0s6VgU8-GZi47EZqLHvOd5FO"></div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <!-- Will be used to display an alert to the user-->
                    </div>
                </div>
            </form>
        </div>
  </div>
    <div class="section-4">
        <div class="container">
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; www.bobbygunnjr.com <?php echo Date('Y') ?> - Design by Drew Watson</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://dickturnip.github.io/bgunn_jr/bower_components/jquery-fadethis/dist/jquery.fadethis.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type='text/javascript' src='https://dickturnip.github.io/bgunn_jr/jquery.particleground.min.js'></script>
    <script>
    // Smooth scrolling
    $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
    });
    </script>
    <script>
    $(document).ready(function() {
      $('#contact').particleground({
      dotColor: '#5cbdaa',
      lineColor: '#5cbdaa'
        });
    })
    </script>
    <script>
        //var isMobile = window.matchMedia("only screen and (max-width: 768px)");
        //if (!isMobile.matches) {
        $(window).fadeThis();
        //}
    </script>
</body>

</html>
