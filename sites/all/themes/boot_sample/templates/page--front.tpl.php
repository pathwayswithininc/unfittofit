<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="sites/all/themes/boot_sample/css/bootstrap.min.css" rel="stylesheet">
    <link href="sites/all/themes/boot_sample/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="sites/all/themes/boot_sample/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="sites/all/themes/boot_sample/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
     <link href="sites/all/themes/boot_sample/css/carousel.css" rel="stylesheet">
        <link href="sites/all/themes/boot_sample/css/style.css" rel="stylesheet">

  </head>
  <script>
  document.write('<script src="http://' + (location.host || 'localhost/unfittofit').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar  navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php if ($site_name || $site_slogan): ?>
                        <!-- #name-and-slogan -->
                        <div id="name-and-slogan">
						<?php if ($site_name):?>
                        <div id="site-name">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                        </div>
                        <?php endif; ?>

                        <?php if ($site_slogan):?>
                        <div id="site-slogan">
                        <i class="fa fa-fighter-jet" aria-hidden="true"></i>
                        <?php print $site_slogan; ?>
                        </div>
                        <?php endif; ?>
                        </div>
                        <!-- EOF:#name-and-slogan -->
                    <?php endif; ?>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="http://127.0.0.1/unfittofit/node/4">Good Reads</a></li>
                <li class="active"><a href="http://127.0.0.1/unfittofit/node/10">Quality Herb Resources</a></li>
                <li class= "dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Herb Information <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Individual Herbs</a></li>
                    <li><a href="#">Reciepe</a></li>
                    <li><a href="#">Remedies</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li class="active"><a href="http://127.0.0.1/unfittofit/node/10">Other Health Tidbits</a></li>
                <li class="active"><a href="http://127.0.0.1/unfittofit/node/5">Web Resources</a></li>
                <li class="active"><a href="http://127.0.0.1/unfittofit/node/11">Spritual Life</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact Us</a></li>

              </ul>
            </div>
            <ul class="nav  navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
											 </div>
				</li>
			</ul>
        </li>
      </ul>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="sites/all/themes/boot_sample/images/slides/slide_2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Good Reads</h1>
              <p>Unique Resource for Women</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="sites/all/themes/boot_sample/images/slides/slide_1.jpeg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Herb Resources</h1>
              <p>Quality Sources of Natural Health Supplies </p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="sites/all/themes/boot_sample/images/slides/slide_3.jpeg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Best Health TidBits</h1>
              <p>Articles on Hollistic Health and Wellbeing </p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>

      <div class="item">
          <img class="fourth-slide" src="sites/all/themes/boot_sample/images/slides/slide_4.jpeg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Spiritual Life</h1>
              <p>Life is Eternal</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="sites/all/themes/boot_sample/images/Image_circle/circle_1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Invest In Your Health</h2>
          <p>Investing in your health is one of the best things anyone can do for themselves. Our bodies are amazing organisms that need to be taken care of. Our bodies need clean water, whole clean foods, proper rest and right amount of exercise to function at its maximum potential.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="sites/all/themes/boot_sample/images/Image_circle/circle_2.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Individual Herbs</h2>
          <p>Information on the health benefits, uses and side effects of medicinal herbs</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="sites/all/themes/boot_sample/images/Image_circle/circle_3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Donate for Cause</h2>
          <p>You can help support our website in a number of ways. - If you purchase any item through this link at amazon.com or you can make a monetary gift.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Resources <span class="text-muted"></span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="sites/all/themes/boot_sample/images/square_images/square_1.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Remedies<span class="text-muted"></span></h2>
          <p class="lead">Beat illness faster with these tips and natural remedies including herbs, supplements and nutrition for avoiding and recovering from illness.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src =" sites/all/themes/boot_sample/images/square_images/square_3.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Our Spiritual Life <span class="text-muted"></span></h2>
          <p class="lead">I have a Spirit.. I am a Soul.. I Live in a Body.. Here we are all seekers, seekers of the infinite Light and the eternal Truth. What does this mean? Travel with us to find out who you are</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="sites/all/themes/boot_sample/images/square_images/square_2.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      <div id = "amazon-ad" class= "container">
   <script type="text/javascript">
        amzn_assoc_placement = "adunit0";
        amzn_assoc_tracking_id = "patwitinc-20";
        amzn_assoc_ad_mode = "manual";
        amzn_assoc_ad_type = "smart";
        amzn_assoc_marketplace = "amazon";
        amzn_assoc_region = "US";
        amzn_assoc_title = "Books from Amazon";
        amzn_assoc_linkid = "8e54e9e70bc9727747658a0bacf5769f";
        amzn_assoc_search_bar = "false";
        amzn_assoc_asins = "0756628679,B0002NKDRU,0738213594,B00KEUBDFW";
</script>
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
   </div>


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; UnfitToFit &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="sites/all/themes/boot_sample/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="sites/all/themes/boot_sample/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="sites/all/themes/boot_sample/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="sites/all/themes/boot_sample/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
