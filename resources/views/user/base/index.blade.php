<!doctype html>
<html lang="en">
    <head>

        <!-- meta data & title -->
        <meta charset="utf-8">
        <title>سپاه</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">

        <!-- CSS -->
        <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        {{--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">--}}
        {{--<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>--}}
        {{--<link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">--}}
        
    </head>
  <body>

    <!-- Header -->
        
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            {{--<div class="navbar-header navbar-right">--}}
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<a class="navbar-brand wow fadeInDownBig" href="index.blade.php"><img class="office-logo" src="{{ asset('assets/img/slider/Office.png') }}" alt="Office"></a>--}}
            {{--</div>--}}
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-left">
                    <li class="active">
                        <a href="index.blade.php">خانه</a>
                    </li>
                    <li>
                        <a href="../about.blade.php">درباره ما</a>
                    </li>
                    <li>
                        <a href="../blog.blade.php">بلاگ</a>
                    </li>
                    <li>
                        <a href="../team.blade.php">همکاران</a>
                    </li>
                    <li>
                        <a href="../contact.blade.php"><span>تماس با ما</span></a>
                    </li>
                </ul>         
            </div>
        </div>
    </nav>

    <!-- End Header -->


    <!-- Begin #carousel-section -->
    {{--<section id="carousel-section" class="section-global-wrapper">--}}
        {{--<div class="container-fluid-kamn">--}}
            {{--<div class="row">--}}
                {{--<div id="carousel-1" class="carousel slide" data-ride="carousel">--}}

                    {{--<!-- Indicators -->--}}
                    {{--<ol class="carousel-indicators visible-lg">--}}
                        {{--<li data-target="#carousel-1" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#carousel-1" data-slide-to="1"></li>--}}
                        {{--<li data-target="#carousel-1" data-slide-to="2"></li>--}}
                    {{--</ol>--}}

                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner" role="listbox">--}}
                        {{--<!-- Begin Slide 1 -->--}}
                        {{--<div class="item active">--}}
                            {{--<img src="{{ asset('assets/img/slider/slide2.jpg') }}" height="400" alt="Image of first carousel">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--<h3 class="carousel-title hidden-xs">Office BOOTSTRAP TEMPLATE</h3>--}}
                                {{--<p class="carousel-body">RESPONSIVE \ MULTI PAGE</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End Slide 1 -->--}}

                        {{--<!-- Begin Slide 2 -->--}}
                        {{--<div class="item">--}}
                            {{--<img src="{{ asset('assets/img/slider/slide4.jpg') }}" height="400" alt="Image of second carousel">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--<h3 class="carousel-title hidden-xs">EASY TO CUSTOMIZE</h3>--}}
                                {{--<p class="carousel-body">BEAUTIFUL \ CLEAN \ MINIMAL</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End Slide 2 -->--}}

                        {{--<!-- Begin Slide 3 -->--}}
                        {{--<div class="item">--}}
                            {{--<img src="{{ asset('assets/img/slider/slide2.jpg') }}" height="400" alt="Image of third carousel">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--<h3 class="carousel-title hidden-xs">MULTI-PURPOSE TEMPLATE</h3>--}}
                                {{--<p class="carousel-body">PORTFOLIO \ CORPORATE \ CREATIVE</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End Slide 3 -->--}}
                    {{--</div>--}}

                    {{--<!-- Controls -->--}}
                    {{--<a class="left carousel-control" href="#carousel-1" data-slide="prev">--}}
                        {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                    {{--</a>--}}
                    {{--<a class="right carousel-control" href="#carousel-1" data-slide="next">--}}
                        {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End #carousel-section -->

    <div class="row container-kamn">
        <img src="assets/img/slider/heaser.jpg" class="blog-post" alt="Feature-img" align="right" width="100%">
    </div>

    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">هدف ما</h3>
                    <p class="services-header-body"><em> خدماتی که ما ارائه می دهیم </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"><span class="fa fa-android fa-5x"></span></p>
                        <h4 class="services-title">عرصه فرهنگی</h4>
                        <p class="services-body">یکی از مهم ترین عرصه های فعالیت گروه های جهادی، عرصه فرهنگی است.</p>
                        <p class="services-more"><a href="#">بیشتر</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-apple fa-5x"></i></p>
                        <h4 class="services-title">Apple</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-thumbs-o-up fa-5x"></i></p>
                        <h4 class="services-title">EASY TO USE</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>        
                </div>
            </div>
            <!-- End Serivces Row 1 -->
      
            <!-- Begin Services Row 2 -->
            <div class="row services-row services-row-tail services-row-2">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"><span class="fa fa-windows fa-5x"></span></p>
                        <h4 class="services-title">Windows</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-eye fa-5x"></i></p>
                        <h4 class="services-title">RETINA READY</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-cube fa-5x"></i></p>
                        <h4 class="services-title">Cubic</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
            </div>
            <!-- End Serivces Row 2 -->
    
        </div>      
    </section>
    <!-- End #services-section -->


    <!-- Footer -->
    <footer> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i>اطلاعات تماس</h3>
                    <p class="footer-contact">
                        مشهد، طلاب8میدان عسکریه علامه طاباطابایی 16 پلاک 256<br>
                        تلفن: 1.800.245.356 فکس: 1.800.245.357<br>
                        پست الکترونیکی: hello@gmail.com<br>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-external-link"></i> لینک ها</h3>
                    <p> <a href="#"> درباره ما</a></p>
                    <p> <a href="#"> خدمات</a></p>
                    <p> <a href="#"> تماس با ما</a></p>
                </div>
              <div class="col-md-4">
                <h3><i class="fa fa-heart"></i> شبکه های اجتماعی</h3>
                <div id="social-icons">
                    <a href="#" class="btn-group google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                      <a href="#" class="btn-group linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                      <a href="#" class="btn-group twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                      <a href="#" class="btn-group facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
              </div>    
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <p>&copy; Copyright 2014, <a href="#">وب سایت ما</a>. طراحی شده توسط <a href="#" target="_blank">رایان آیریک</a></p>
    </div>

    
    <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
