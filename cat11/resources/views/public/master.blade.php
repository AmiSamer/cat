<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Cat Life web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('/public/public')}}/css/bootstrap.css" type="text/css" media="all">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('/public/public')}}/css/font-awesome.css" type="text/css" media="all">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="{{asset('/public/public')}}/css/owl.carousel.css" type="text/css" media="all" />
    <!-- Owl-Carousel-CSS -->
    <link rel="stylesheet" href="{{asset('/public/public')}}/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- //css files -->
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Molle:400i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
          rel="stylesheet">
    <!-- //web fonts -->
</head>

<body>
<div class="w3l-main" id="home">
    <div class="container">
        <!-- header -->
@include('public.includes.header')
        <!-- //header -->
    </div>
    <!-- Slider -->
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>
                    <div class="slider-img-w3layouts one">
                        <div class="w3l-overlay">
                            <div class="container">
                                <div class="banner-text-info">
                                    <h3>we provide
                                        <span>care</span> that your
                                        <span>pet</span> deserves!</h3>
                                    <p>A comprehensive guide to cat care to make your pet feel your love</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img-w3layouts two">
                        <div class="w3l-overlay">
                            <div class="container">
                                <div class="banner-text-info">
                                    <h3>you can show your
                                        <span>love</span> to your
                                        <span>pet</span>!</h3>
                                    <p>A comprehensive guide to cat care to make your pet feel your love</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img-w3layouts three">
                        <div class="w3l-overlay">
                            <div class="container">
                                <div class="banner-text-info">
                                    <h3>we provide
                                        <span>care</span> that your
                                        <span>pet</span> deserves!</h3>
                                    <p>A comprehensive guide to cat care to make your pet feel your love</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img-w3layouts four">
                        <div class="w3l-overlay">
                            <div class="container">
                                <div class="banner-text-info">
                                    <h3>you can show your
                                        <span>love</span> to your
                                        <span>pet</span>!</h3>
                                    <p>A comprehensive guide to cat care to make your pet feel your love</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--//Slider-->
</div>
<!--//banner-->

<!-- sticky navigation -->
@include('public.includes.menubar')
<!-- //sticky navigation -->

<!-- welcome -->
<div class="about" id="about">
    <div class="container">
        <h3 class="agile-title">Welcome</h3>
        <div class="about-top w3ls-agile">
            <div class="col-md-6 red">
                <img class="img-responsive" src="{{asset('/public/public')}}/images/ab.jpg" alt="">
            </div>
            <div class="col-md-6 come">
                <div class="about-wel">
                    <h5>A Few Words About Our
                        <span>Cat Life</span>
                    </h5>
                    <p>Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure
                        reprehend.Unicmquam eius, Basmodi temurer sehsMunim.</p>
                    <ul>
                        <li>
                            <i class="glyphicon glyphicon-ok"></i>Cat health and Care</li>
                        <li>
                            <i class="glyphicon glyphicon-ok"></i>Cat grooming</li>
                        <li>
                            <i class="glyphicon glyphicon-ok"></i>Food for cats</li>
                        <li>
                            <i class="glyphicon glyphicon-ok"></i>Cat behavior</li>
                    </ul>
                </div>
                <div class="button-styles">
                    <a href="#contact" class="button2-w3l scroll">Contact Us</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //welcome -->
@yield('body')
<!-- map -->
@include('public.includes.map')
<!-- //map -->
<!-- //contact -->

<!-- footer -->
@include('public.includes.footer')
<!-- //footer -->


<!-- js -->
<script src="{{asset('/public/public')}}/js/jquery-2.2.3.min.js"></script>
<script src="{{asset('/public/public')}}/js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<!-- Banner Slider -->
<script src="{{asset('/public/public')}}/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //Banner Slider -->

<!-- Sticky Navigation Script -->
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 795) {
            $('nav').addClass('fixed-header');
        } else {
            $('nav').removeClass('fixed-header');
        }
    });

    /* scrollTop() >= 795
       Should be equal the the height of the header
     */
</script>
<!-- //Sticky Navigation Script -->

<!-- simple-lightbox -->
<script src="{{asset('/public/public')}}/js/simple-lightbox.min.js"></script>
<script>
    $(function () {
        var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
            navText: ['&lsaquo;', '&rsaquo;']
        });
    });
</script>
<link href='{{asset('/public/public')}}/css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<!-- Light-box css -->
<!-- //simple-lightbox -->

<!-- smoothscroll -->
<script src="{{asset('/public/public')}}/js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{asset('/public/public')}}/js/move-top.js"></script>
<script src="{{asset('/public/public')}}/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- Owl-Carousel-JavaScript -->
<script src="{{asset('/public/public')}}/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 3,
            lazyLoad: true,
            autoPlay: true,
            pagination: true,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->

</body>

</html>

