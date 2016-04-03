<?php require './conf/db.php';?>
<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE 8]><html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->
<html>
<head>
	<meta charset="utf-8">
  <title>Charm</title>
  <meta name="description" content="Responsive Restaurant HTML Template" />
	<meta name="keywords" content="responsive html template, restaurant, cafe, bootstrap 3.0, css, jquery" />
	<meta name="author" content="8Guild" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href="assets/css/jquery.flex-images.css" rel="stylesheet" type="text/css">
  <link href="assets/css/animate-custom.css" rel="stylesheet" type="text/css">
	<link href="assets/css/lightbox.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css">

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<script src="assets/js/libs/modernizr.custom.js"></script>
  <!--Adding Media Queries Support for IE8-->
  <!--[if lt IE 9]>
    <script src="assets/js/plugins/respond.min.js"></script>
  <![endif]-->
</head>

  <!--Body-->
  <body>
  	<!-- Preloader -->
    <div id="preloader">
      <div id="status">
        <img class="svg" src="assets/img/charm-big.png" width="133" height="120" alt="Eattie"/>
        <img class="png" src="assets/img/charm-big.png" width="133" height="120" alt="Eattie"/>
        <div id="fountainG">
          <div id="fountainG_1" class="fountainG"></div>
          <div id="fountainG_2" class="fountainG"></div>
          <div id="fountainG_3" class="fountainG"></div>
          <div id="fountainG_4" class="fountainG"></div>
          <div id="fountainG_5" class="fountainG"></div>
          <div id="fountainG_6" class="fountainG"></div>
          <div id="fountainG_7" class="fountainG"></div>
          <div id="fountainG_8" class="fountainG"></div>
        </div>
      </div>
    </div>
    <!--Intro Fullscreen Slideshow-->
  	<section class="intro-slideshow">
    	<ul>
      	<li style="background-image: url(assets/img/intro/1.jpg)"></li>
      	<li style="background-image: url(assets/img/intro/2.jpg)"></li>
      	<li style="background-image: url(assets/img/intro/3.jpg)"></li>
      </ul>
    </section>

    <!--Intro Title-->
    <!-- <section class="intro-title animated" id="home">
    	<h1>Charm Thai Kitchen and Sushi Bar</h1>
      <div class="social-bar">
      	<a href="#" class="fa fa-instagram tooltipped" title="Instagram"></a>
      	<a href="#" class="fa fa-facebook-square tooltipped" title="Facebook"></a>
      	<a href="#" class="fa fa-pinterest-square tooltipped" title="Pinterest"></a>
      	<a href="#" class="fa fa-google-plus-square tooltipped" title="Google+"></a>
      	<a href="#" class="fa fa-linkedin-square tooltipped" title="LinkedIn"></a>
      </div>
    </section> -->

    <!--Wrapper-->
    <div id="wrapper">
      <!--Header-->
      <header class="stiky"><!--By adding "stiky" class to header we enable stiky functionality, header will be pinned to the top, when it meets the top of the window-->
        <div class="container">
        	<a class="logo scroll-up" href="#home"></a>

          <!--Navigation-->
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navi-collapse">
              <ul class="nav navbar-nav nav-left">
                <li class="tricky"><a></a></li>
                <li class="tricky"><a></a></li>
                <li class="tricky"><a></a></li>
                <li class="tricky"><a></a></li>
                <li class="tricky"><a></a></li>
                <li class="active"><a class="scroll" href="#about">about</a></li>
                <li><a class="scroll" href="#menu">Menu</a></li>

              </ul>
              <ul class="nav navbar-nav nav-right">
                <li class="tricky"><a></a></li>
                <li ><a class="scroll" href="#gallery">Gallery</a></li>
                <li class="last"><a class="scroll" href="#contacts">contacts</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!--Close Navigation -->
        </div>
      </header>
      <!--About-->
      <section class="block about" id="about">
        <div class="heading"><h2>About our restaurant</h2><span class="triangle"></span></div>
        <div class="about-slider">
        	<div class="info-bg"></div>
        	<div class="info animation" data-animation="fadeInLeft">
          	<div class="pager"></div>
            <div class="info-slider">
            	<div>
                <img class="svg" src="assets/img/about/icon1.svg" width="101" height="101" alt="Established"/>
                <img class="png" src="assets/img/about/icon1.png" width="101" height="101" alt="Established"/>
                <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
              </div>
            	<div>
                <img class="svg" src="assets/img/about/icon3.svg" width="101" height="101" alt="Cooking Traditions"/>
                <img class="png" src="assets/img/about/icon3.png" width="101" height="101" alt="Cooking Traditions"/>
                <h3>Cooking Traditions</h3>
                <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>
        	<div class="about-slider-inner">
            <div><img src="assets/img/about/2.jpg" width="1920" height="570" alt="Slide2"/></div>
            <div><img src="assets/img/about/3.jpg" width="1920" height="570" alt="Slide3"/></div>
          </div>
        </div>
      </section>

      <!--menu1-->
    <!--Menu (1 column layout Accordion)-->
    <section class="block menu1" id="menu">
      <div class="heading"><h2>Menu</h2><span class="triangle"></span></div>
      <div class="panel-group" id="accordion">

        <!--Breakfast-->
        <div class="panel">
          <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_1" href="#menu1">
            <div class="bg"></div>
            <div class="container">
              <h3>Starters</h3>
              <span class="arrowDown"></span>
            </div>
          </a>
          <div id="menu1" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
            <div class="panel-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu-block">
                      <div class="item">
                        <h4>Soft-Boiled Organic Egg</h4>
                        <p>with "soldiers"</p>
                        <span class="price">5 .00</span>
                      </div>
                      <div class="item">
                        <h4>Omelette</h4>
                        <p>plain or additional toppings</p>
                        <span class="price">8 .00</span>
                      </div>
                      <div class="item">
                        <h4>Breakfast Plate</h4>
                        <p>Two eggs, sausage or bacon, grits</p>
                        <span class="price">20 .00</span>
                      </div>
                      <div class="item">
                        <h4>Sour Cream Hazelnut Waffles</h4>
                        <p>with warm berries</p>
                        <span class="price">13 .00</span>
                      </div>
                      <div class="item">
                        <h4>Scratch Biscuits</h4>
                        <p>plain or with sausage</p>
                        <span class="price">10 .00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Lunch-->
        <div class="panel">
          <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_2" href="#menu2">
            <div class="bg"></div>
            <div class="container">
              <h3>Salad</h3>
              <span class="arrowDown"></span>
            </div>
          </a>
          <div id="menu2" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
            <div class="panel-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu-block">
                      <div class="item">
                        <h4>Menu Item #1</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #2</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">12 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #3</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">18 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #4</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #5</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">15 .00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Dinner-->
        <div class="panel">
          <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_3" href="#menu3">
            <div class="bg"></div>
            <div class="container">
              <h3>Soup Bowl</h3>
              <span class="arrowDown"></span>
            </div>
          </a>
          <div id="menu3" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
            <div class="panel-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu-block">
                      <div class="item">
                        <h4>Menu Item #1</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #2</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">12 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #3</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">18 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #4</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #5</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">15 .00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Salads-->
        <div class="panel">
          <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_4" href="#menu5">
            <div class="bg"></div>
            <div class="container">
              <h3>Fried rice</h3>
              <span class="arrowDown"></span>
            </div>
          </a>
          <div id="menu5" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
            <div class="panel-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu-block">
                      <div class="item">
                        <h4>Menu Item #1</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #2</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">12 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #3</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">18 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #4</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #5</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">15 .00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Desserts-->
        <div class="panel">
          <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_5" href="#menu4">
            <div class="bg"></div>
            <div class="container">
              <h3>Noodle</h3>
              <span class="arrowDown"></span>
            </div>
          </a>
          <div id="menu4" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
            <div class="panel-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu-block">
                      <div class="item">
                        <h4>Menu Item #1</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #2</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">12 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #3</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">18 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #4</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #5</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">15 .00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Wines-->
        <div class="panel">
          <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_6" href="#menu6">
            <div class="bg"></div>
            <div class="container">
              <h3>Beverages</h3>
              <span class="arrowDown"></span>
            </div>
          </a>
          <div id="menu6" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
            <div class="panel-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu-block">
                      <div class="item">
                        <h4>Menu Item #1</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #2</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">12 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #3</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">18 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #4</h4>
                        <p>Lorem ipsum</p>
                        <span class="price">10 .00</span>
                      </div>
                      <div class="item">
                        <h4>Menu Item #5</h4>
                        <p>Sed ut perspiciatis unde omnis</p>
                        <span class="price">15 .00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<!--Gallery-->
		<section class="block about" id="gallery">
			<div class="heading"><h2>Gallery</h2><span class="triangle"></span></div>
			<div class="container">
				<div class="row" id="wrapper-thumbnail">

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="assets/images/IMG_5547.JPG" data-lightbox="gallery">
								<img src="assets/images/IMG_5547.JPG" />
							</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="assets/images/IMG_5548.JPG" data-lightbox="gallery">
								<img src="assets/images/IMG_5548.JPG" />
							</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="assets/images/IMG_5557.JPG" data-lightbox="gallery">
								<img src="assets/images/IMG_5557.JPG" />
							</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="assets/images/IMG_5558.JPG" data-lightbox="gallery">
								<img src="assets/images/IMG_5558.JPG" />
							</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="assets/images/IMG_5559.JPG" data-lightbox="gallery">
								<img src="assets/images/IMG_5559.JPG" />
							</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="assets/images/IMG_5547.JPG" data-lightbox="gallery">
								<img src="assets/images/IMG_5547.JPG" />
							</a>
					</div>

				</div>
			</div>
		</section>
      <!--Contacts-->
      <section class="block contacts" id="contacts">
        <div class="heading"><h2>Contacts</h2><span class="triangle"></span></div>
        <div id="map_canvas"></div>
      </section>

      <!--Footer-->
      <footer>
      	<div class="container">
        <div class="row">
        	<div class="col-lg-2 col-md-2">
          	<div class="footer-logo"></div>
          </div>
          <div class="col-lg-5 col-md-5">
          	<div class="footer-contacts">
            	<h3>contacts</h3>
              <div class="group">
                <i class="fa fa-map-marker"></i>
                <p>960 Schilling Rd., Ste K Mobile, AL<br/>36695</p>
              </div>
              <div class="group">
                <i class="fa fa-mobile"></i>
                <p>660-4470</p>
              </div>
              <div class="group">
                <i class="fa fa-envelope"></i>
                <p>charm@charmthaimobile.com</p>
              </div>
              <div class="group last">
                <i class="fa fa-clock-o"></i>
                <p>Open 11am-11pm Mon-Sun
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5">
          	<h3>find us on social networks</h3>
            <div class="social-bar">
              <a href="#" class="fa fa-instagram tooltipped" title="Instagram"></a>
              <a href="#" class="fa fa-vimeo-square tooltipped" title="Vimeo"></a>
              <a href="#" class="fa fa-youtube-square tooltipped" title="Youtube"></a>
              <a href="#" class="fa fa-tumblr-square tooltipped" title="Tumblr"></a>
              <a href="#" class="fa fa-facebook-square tooltipped" title="Facebook"></a>
              <a href="#" class="fa fa-linkedin-square tooltipped" title="LinkedIn"></a>
              <a href="#" class="fa fa-pinterest-square tooltipped" title="Pinterest"></a>
              <a href="#" class="fa fa-google-plus-square tooltipped" title="Google+"></a>
            </div>
          </div>
        </div>
        </div>
      </footer>

    </div><!--Close Wrapper-->

    <!--Javascript (jQuery)-->
		<script src="assets/js/libs/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery.easing.1.3.js"></script>
		<script src="assets/js/plugins/bootstrap.min.js"></script>
		<script src="assets/js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="assets/js/plugins/jquery.cycle.min.js"></script>
		<script src="assets/js/plugins/waypoints.min.js"></script>
		<script src="assets/js/plugins/waypoints-sticky.min.js"></script>
		<script src="assets/js/plugins/datepicker.min.js"></script>
		<script src="assets/js/plugins/timepicker.min.js"></script>
		<script src="assets/js/plugins/jquery.validate.min.js"></script>
		<script src="assets/js/libs/lightbox.js"></script>
		<script src="assets/js/scripts-main.js"></script>
		<script src="assets/js/custom-script.js"></script>

  </body><!--Close Body-->
</html>
