<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>onAds.com</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
	<link href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/prettyPhoto.css')}}" rel="stylesheet">      
	<link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">
    <!-- =======================================================
        Theme Name: Gp
        Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><img class="img-responsive" src="{{ URL::asset('/images/logo.png')}}"></a>
                </div>

                <input type="text" name="search" placeholder="find service">
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li> 
                        <li><a href="">Start Selling</a></li>
                        <li><a href="">Messages</a></li>
                        <li><a href="">About Us</a></li>
                                             
                    </ul>
                </div>
            </div><!--/.container-->
        <div class = "container">
            <ul class="portfolio-filter text-center">
                
                <li><a class="btn btn-default active" href="#" >Home</a></li>
                <li><a class="btn btn-default" href="#">Graphic and Design</a></li>
                <li><a class="btn btn-default" href="#">Writing and Translate</a></li>
                <li><a class="btn btn-default" href="#">Video and Animation</a></li>
                <li><a class="btn btn-default" href="#">Music and Audio</a></li>
                <li><a class="btn btn-default" href="#">IT and Programming</a></li>              
            </ul><!--/#portfolio-filter-->
        </div><!--/.container-->
           
    </nav><!--/nav-->
		
    </header><!--/header-->
	

	    <div class="slider">
        <div class="container">
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ URL::asset('/images/slider/slider1.jpg')}}" class="img-responsive" alt=""> 
                       </div>
                       <div class="item">
                            <img src="{{ URL::asset('/images/slider/slider2.png')}}" class="img-responsive" alt=""> 
                       </div> 
                       <div class="item">
                            <img src="{{ URL::asset('/images/slider/slider3.jpg')}}" class="img-responsive" alt=""> 
                       </div> 
                    </div>
                    
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->
        </div>
        </div>
    <section id="portfolio">
    <div class="container">
            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/Logo Design.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Design Logo</a></h3>                                    
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/Logo Design.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/banner.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Banner Ads</a></h3>                                    
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/banner.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/name card.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Name card design</a></h3>
                                    <a class="preview" href="{{ ('/images/portfolio/full/name card.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/photoshop.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Photoshop edition</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/photoshop.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/book cover.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Book Cover</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/book cover.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/t-shirt.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">T-Shirt design</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/t-shirt.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                   <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/cv.jpg"')}}' alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">CV and Cover letter writting</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/cv.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/translate.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Translation</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/translate.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/spot video.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Video Spot</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/spot video.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/pre-wedding.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Pre-wedding video edition</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/pre-wedding.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/video edition.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Video edition</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/video edition.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/3d.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">3D Animation</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/3d.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/voice record.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Voice recording</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/voice record.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/song writing.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Original song writting</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/song writing.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/sound effect.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Sound effect</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/sound effect.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/guitar teaching.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Guitar teaching</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/guitar teaching.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                   <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/web design.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Web design</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/web design.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/web app.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Web application</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/web app.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/mobile.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Mobile Application</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/mobile.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/window app.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Desktop Application</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/window app.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/data analysis.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Data analysis and report</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/data analysis.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                   <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/database.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Database design</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/database.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/it.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">IT Support</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/it.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{ URL::asset('/images/portfolio/recent/convert.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Convert</a></h3>
                                    <a class="preview" href="{{ URL::asset('/images/portfolio/full/convert.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
	
		
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Gp Theme. All Rights Reserved.
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Gp
                        -->
                        <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Start Selling</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>