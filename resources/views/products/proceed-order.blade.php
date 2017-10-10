<html>
<head>
    <title> Order page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <style>
        button.accordion {
            background-color: #FFF;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            border-radius: 5px;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        button.accordion.active, button.accordion:hover {
            background-color: #00B22D;
        }

        div.panel {
            padding: 0 18px;
            display: none;
            background-color: white;
        }
        /* ------ page ------ */
        .page{
            background-color:#fff;
            padding:20px 15px;
            margin-bottom:20px;
        }
        .page h3{
            font-size:22px;
            margin-bottom:12px;
        }
        .page p{
            font-size:17px;
            font-weight:500;
        }
        .page .details ul{
            list-style: none;
            padding-left: 0px;
            margin-bottom:18px;
        }
        .page .details ul li{
            float:left;
            padding-right:15px;
            font-size: 13px;
            font-weight: 600;
        }
        .page .details ul li:last-child {
            float: inherit;
        }
        .page h4{
            font-size:13px;
            font-weight:600;
        }
        /*slideshow style*/
        .carousel-indicators .active {
            background-color: #2980b9;
        }

        .carousel-inner img {
            width: 100%;
            max-height: 460px
        }

        .carousel-control {
            width: 0;
        }

        .carousel-control.left,
        .carousel-control.right {
            opacity: 1;
            filter: alpha(opacity=100);
            background-image: none;
            background-repeat: no-repeat;
            text-shadow: none;
        }

        .carousel-control.left span {
            padding: 15px;
        }

        .carousel-control.right span {
            padding: 15px;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            position: absolute;
            top: 45%;
            z-index: 5;
            display: inline-block;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            left: 0;
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            right: 0;
        }

        .carousel-control.left span,
        .carousel-control.right span {
            background-color: #000;
        }

        .carousel-control.left span:hover,
        .carousel-control.right span:hover {
            opacity: .7;
            filter: alpha(opacity=70);
        }

        /*C Header Styles */
        .header-text {
            position: absolute;
            top: 20%;
            left: 1.8%;
            right: auto;
            width: 96.66666666666666%;
            color: #fff;
        }

        .header-text h2 {
            font-size: 40px;
        }

        .header-text h2 span {
            background-color: #2980b9;
            padding: 10px;
        }

        .header-text h3 span {
            background-color: #000;
            padding: 15px;
        }

        .btn-min-block {
            min-width: 170px;
            line-height: 26px;
        }

        .btn-theme {
            color: #fff;
            background-color: transparent;
            border: 2px solid #fff;
            margin-right: 15px;
        }

        .btn-theme:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }
        /*slideshow*/
        .carousel-indicators .active {
            background-color: #2980b9;
        }

        .carousel-inner img {
            width: 750px;
            max-height: 410px
        }

        .carousel-control {
            width: 0;
        }

        .carousel-control.left,
        .carousel-control.right {
            opacity: 1;
            filter: alpha(opacity=100);
            background-image: none;
            background-repeat: no-repeat;
            text-shadow: none;
        }

        .carousel-control.left span {
            padding: 15px;
        }

        .carousel-control.right span {
            padding: 15px;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            position: absolute;
            top: 45%;
            z-index: 5;
            display: inline-block;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            left: 10;
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            right: 40;
        }

        .carousel-control.left span,
        .carousel-control.right span {
            background-color: #000;
        }

        .carousel-control.left span:hover,
        .carousel-control.right span:hover {
            opacity: .7;
            filter: alpha(opacity=70);
        }

        /* Carousel Header Styles */

        .btn-min-block {
            min-width: 170px;
            line-height: 26px;
        }

        .btn-theme {
            color: #fff;
            background-color: transparent;
            border: 2px solid #fff;
            margin-right: 15px;
        }

        .btn-theme:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }
        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 48%;
            z-index: 15;
            width: 60%;
            margin-left: -30%;
            padding-left: 0;
            list-style: none;
            text-align: center;
        }
        /*end slideshow*/

    </style>
</head>
<body>
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">

                <li class="upper-links">
                    <a class="links" href="#">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a>
                </li>
                <li class="upper-links dropdown"><a class="links" href="#">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h1 style="margin:0px;"><span class="largenav">OnAds</span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cart largenav col-sm-2">
                <a class="cart-button">
                    <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                        <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                    </svg> Link
                    <span class="item-number ">0</span>
                </a>
            </div>
        </div>
    </div>
</div>
@section('sidebar')
    <div id="mySidenav" class="sidenav">
        <div class="container" style="background-color: #2874f0; padding-top: 10px;">
            <span class="sidenav-heading">Home</span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        </div>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
    </div>
@show<!--header html-->
<div class="container">
<nav class="nav nav-tabs" id="myTab" role="tablist">
  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Home</a>
  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Profile</a>
  <div class="dropdown">
    <a class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" id="nav-dropdown1-tab" href="#nav-dropdown1" role="tab" data-toggle="tab" aria-controls="nav-dropdown1">@fat</a>
      <a class="dropdown-item" id="nav-dropdown2-tab" href="#nav-dropdown2" role="tab" data-toggle="tab" aria-controls="nav-dropdown2">@mdo</a>
    </div>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-dropdown1" role="tabpanel" aria-labelledby="nav-dropdown1-tab">...</div>
  <div class="tab-pane fade" id="nav-dropdown2" role="tabpanel" aria-labelledby="nav-dropdown2-tab">...</div>
</div>
</div><!--end container-->
<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="page">
                <h3><b>I will manually create 60 pr10 social bookmarks backlinks</b></h3>
                <div class="details">
                    <ul>
                        <li>Admin</li>
                        <li>April 18, 2017</li>
                        <li>Webdesign</li>
                    </ul>
                </div>
                <div class="content">
                    <p>It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout. The point
                        of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                </div>
                <h4><a href="read-more">Read More</a></h4>
            </div><!--header-content page-->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
                <div>
                    <!-- Carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="First slide">
                            </div>
                            <div class="item">
                                <img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Third slide">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div><!-- /carousel -->
                </div>
            <div style="height:15px;"></div>
            <header>
                <table border="1">
                    <tr class="form-group">
                        <th></th>
                        <th colspan="2">Compare Packages</th>
                        <th></th>
                    </tr>
                    <tr class="form-group">
                        <td class="col-md-4">fgf</td>
                        <td class="col-md-4">fgfg</td>
                        <td class="col-md-4">fgf</td>
                    </tr>
                    <tr class="form-group">
                        <td class="col-md-4">fgf</td>
                        <td class="col-md-4">fgfg</td>
                        <td class="col-md-4">fgf</td>
                    </tr>
                    <tr class="form-group">
                        <td class="col-md-4">fgf</td>
                        <td class="col-md-4">fgfg</td>
                        <td class="col-md-4">fgf</td>
                    </tr>
                    <tr class="form-group">
                        <td class="col-md-4">fgfg</td>
                        <td class="col-md-4">fgfg</td>
                        <td class="col-md-4">fgf</td>
                    </tr>
                    <tr class="form-group">
                        <td><button class="col-md-12 btn-success btn"><span class=""></span>Proceed to Payment</button></td>
                        <td><button class="col-md-12 btn-success btn"><span class=""></span>Proceed to Payment</button></td>
                        <td><button class="col-md-12 btn-success btn"><span class=""></span>Proceed to Payment</button></td>
                    </tr>
                </table>
            </header>

        </div><!--col-md-8-->
        <div class="col-md-4">
            <button class="accordion">Basic</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Standard</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Premium</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].onclick = function(){
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    }
                }
            </script>

        </div><!--col-md-4-->

    </div>
</div>
</body>
</html>