@extends('public.master')

@section('title')
Cat Life || Home
@endsection

@section('body')


    <!-- middle slider -->
    <div class="w3agile-spldishes">
        <div class="container">
            <div class="spldishes-grids">
                <!-- Owl-Carousel -->
                <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                    <a class="item g1">
                        <img class="lazyOwl" src="{{asset('/public/public')}}/images/m1.jpg" title="Cat Life" alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{asset('/public/public')}}/images/m2.jpg" title="Cat Life" alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{asset('/public/public')}}/images/m3.jpg" title="Cat Life" alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{asset('/public/public')}}/images/m4.jpg" title="Cat Life" alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{asset('/public/public')}}/images/m5.jpg" title="Cat Life" alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{asset('/public/public')}}/images/m6.jpg" title="Cat Life" alt="" />
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //middle slider -->

    <!-- middle section -->
    <div class="middle-w3l">
        <div class="container">
            <h2>Get to know everything about your cat!</h2>
            <div class="button-styles">
                <a href="#contact" class="button3-w3l scroll">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- //middle section -->

    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <h3 class="agile-title">Services Overview</h3>
            <div class="w3_agile_services_grids">
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{asset('/public/public')}}/images/c1.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Service 1</legend>
                        consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{asset('/public/public')}}/images/c2.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Service 2</legend>
                        consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{asset('/public/public')}}/images/c3.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Service 3</legend>
                        consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
                    </fieldset>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3_agile_services_grids">
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{asset('/public/public')}}/images/c4.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Service 4</legend>
                        consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{asset('/public/public')}}/images/c5.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Service 5</legend>
                        consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{asset('/public/public')}}/images/c6.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Service 6</legend>
                        consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
                    </fieldset>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3l-img-side">
            <img src="{{asset('/public/public')}}/images/cat11.png" alt="" />
        </div>
        <div class="w3l-img-side w3l-img-side2">
            <img src="{{asset('/public/public')}}/images/cat1.png" alt="" />
        </div>
    </div>
    <!-- //services -->



    <!-- Gallery -->
    <div id="gallery" class="gallery">
        <div class="container">
            <h3 class="agile-title">Gallery</h3>
        </div>
        <div class="agileinfo-gallery-row">
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/m1.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/m1.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/g2.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/g2.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/g3.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/g3.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/m4.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/m4.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/m5.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/m5.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/m6.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/m6.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/m3.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/m3.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{asset('/public/public')}}/images/m2.jpg" class="imghvr-hinge-right figure">
                    <img src="{{asset('/public/public')}}/images/m2.jpg" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Gallery -->

    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h3 class="agile-title">Contact Us</h3>
            <div class="col-md-9 col-sm-9 contact-right">
                <form action="{{route('contact')}}" method="post">
                    @csrf
                    <input type="text" name="first_name" placeholder="Your first name" required="">
                    <input type="text" name="last_name" placeholder="Your last name" required="">
                    <input type="email" name="email" placeholder="Your email" required="">
                    <input type="text" name="phone_no" placeholder="Phone number" required="">
                    <input type="text" name="subject" placeholder="Your subject" required="">
                    <textarea name="msg" placeholder="Your message" required=""></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="col-md-3 col-sm-3 contact-left">
                <div class="address">
                    <h4>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
                    <p>345 Setwant natrer,</p>
                    <p>Metropolitan, Italy.</p>
                </div>
                <div class="phone">
                    <h4>
                        <i class="fa fa-phone" aria-hidden="true"></i>PHONE</h4>
                    <p>+1(401) 1234 567.</p>
                    <p>+1(804) 4261 150.</p>
                </div>
                <div class="email">
                    <h4>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>E-MAIL</h4>
                    <p>
                        <a href="mailto:info@example.com">catLife@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
