@extends('layouts.template')

@section('content')

<!-- Slider -->
<div class="flat-sliders-container">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="images/tllax-rooms-suites-wisteria-bedroom1-1680-945.jpg" alt="slider-image" />
                    <div class="tp-caption sfl title-slide style6" data-x="140" data-y="320" data-speed="1500" data-start="1500" data-easing="Sine.easeInOut"> Sayomi</div>
                    <div class="tp-caption sfr description-slider style1" data-x="140" data-y="450" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Hotel
                    </div>
                    <div class="tp-caption sft desc-slide blue-color center  style3" data-x="40" data-y="250" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        <span>Wellcome to</span>
                        <br />
                        Sayomi is an real American hotel, spa,
                        <br /> pool and bar located on a
                        <br /> busy corner site in Cleveland, Ohio,
                        <br /> The United States Of America.
                    </div>
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="images/tllax-rooms-suites-wisteria-living-1680-945.jpg" alt="slider-image" />

                    <div class="tp-caption sfl title-slide style6" data-x="140" data-y="320" data-speed="1500" data-start="1500" data-easing="Sine.easeInOut"> Sayomi</div>

                    <div class="tp-caption sfr description-slider style1" data-x="140" data-y="450" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Spa & Pool

                    </div>

                    <div class="tp-caption sft desc-slide blue-color center  style3" data-x="40" data-y="250" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        <span>Wellcome to</span>
                        <br />

                        Sayomi is an real American hotel, spa,
                        <br /> pool and barlocated on a
                        <br /> busy corner site in Cleveland, Ohio,
                        <br /> The United States Of America
                    </div>
                </li>
                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="images/tllax-rooms-suites-ford-bedroom2-1680-945.jpg" alt="slider-image" />

                    <div class="tp-caption sfl title-slide style6" data-x="140" data-y="320" data-speed="1500" data-start="1500" data-easing="Sine.easeInOut"> Sayomi</div>

                    <div class="tp-caption sfr description-slider style1" data-x="140" data-y="450" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Thinking Bold

                    </div>

                    <div class="tp-caption sft desc-slide blue-color center  style3" data-x="40" data-y="250" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        <span>Wellcome to</span>
                        <br />

                        Sayomi is an real American hotel, spa,
                        <br /> pool and barlocated on a
                        <br /> busy corner site in Cleveland, Ohio,
                        <br /> The United States Of America
                    </div>
                </li>
            </ul>
        </div>

        <div id="slider-counter">
            <a href="#" data-id="0">
                <span>01</span>
            </a>
            <a href="#" data-id="1">
                <span>02</span>
            </a>
            <a href="#" data-id="2">
                <span>03</span>
            </a>
        </div>
    </div>
    <div class="flat-vertical social-links">
        <a href="https://instagram.com/iamanas22">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="https://facebook.com/iamanas22">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://twitter.com/iamanas20">
            <i class="fa fa-twitter"></i>
        </a>
        <span>FOLLOW US</span>
    </div>
    <div class="flat-vertical reservation">
        <a href="/rooms">RESERVE A ROOM</a>
    </div>
</div>

<section class="flat-row flat-our">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/US-Hotel.jpg" alt="images" />
            </div><!--col-md-6-->

            <div class="col-md-6">
                <div class="flat-divider d96px"></div>
                <div class="wrap-content-story">
                    <div class="title-section style2 ">
                        <h1 class="title">Our Story</h1>
                    </div>
                    <p class="content-story">Sayomi is a real American Hotel, stated in the city of Cleveland, Ohio, opened on 1923, with the vision of sustaining the bold american style and enjoying the sightings of the great area surrounding Clevelend and the great state of Ohio, think bold again.</p>
                    <ul class="iconlist">
                        <li>
                            <i class="fa fa-circle-o"></i> Sayomi is a Hotel, Spa & Pool
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i> Sayomi believes in American Values
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i> Sayomi gets the endorsement of VIP guests
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i> Sayomi makes you discover the American values.
                        </li>
                    </ul>
                </div>
            </div><!--/.col-md-6-->
        </div><!--/.row-->
    </div><!--/.container -->
</section>

<section class="flat-row flat-imagebox index-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style2 ">
                    <div class="top-section">
                        <p>Discover</p>
                    </div>
                    <h1 class="title">Rooms At A Glance</h1>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->
        <div class="row">
            <div class="flat-divider d10px"></div>
            <?php $i = 0; ?>
            @foreach ($result as $res)
        @if($i < 4)
                <?php $i++; ?>
        @if($res->locked == 0)
            <div class="item">
                <div class="imagebox effect1">
                    <div class="box-wrap">
                        <div class="box-image">
                            <a href="/room/{{$res->roomID}}">
                                <img width="100%" src="{{'images/' . $res->url}}" alt="images" />
                            </a>
                        </div>
                        <div class="box-content">
                            <h5>
                                {{$res->description}}
                            </h5>
                            <p>{{$res->category}}</p>
                            <ul>
                                <li>
                                    ${{$res->pricePerNight}}
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
            @endforeach


        </div><!--row-->
    </div><!--container -->
</section>

<!-- Flat Tab-->
<section class="flat-row flat-tab-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section">
                    <div class="top-section">Find About</div>
                    <h1 class="title">Our Suites</h1>
                </div>
            </div><!--/.col-md-12-->
        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="flat-tabs">
                    <div id="suitesDiv" class="content-tab">
                        <div class="content-inner">
                            <div class="col-md-6">
                                <ul class="menu-fd">
                                    @foreach($resultSuites as $resSuite)
                                    @if($resSuite->id < 4)
                                    <li>
                                        <div class="media-wrap flat-hover-moveright">
                                            <a href="#" class="pull-left">
                                                <img width="100%" style="max-width: 150px;" src="<?php echo 'images/' . $resSuite->url ?>" alt="client" class="img-responsive" />
                                            </a>
                                            <div class="media-body">
                                                <h6>
                                                    <a href="/suite/{{$resSuite->suiteID}}">
                                                        {{$resSuite->description}}
                                                    </a>
                                                </h6>
                                                <div class="dotted-bg"></div>
                                                <span>
                                                    ${{$resSuite->pricePerNight}}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div><!-- /.col-md-6" -->


                            <div class="col-md-6">
                                <ul class="menu-fd">
                                    @foreach($resultSuites as $resSuite)
                                    @if($resSuite->id > 4)
                                    @if($resSuite->locked == 0)
                                    <li>
                                        <div class="media-wrap flat-hover-moveright">
                                            <a href="#" class="pull-left">
                                                <img width="100%" style="max-width: 150px;" src="<?php echo 'images/' . $resSuite->url ?>" alt="client" class="img-responsive" />
                                            </a>
                                            <div class="media-body">
                                                <h6>
                                                    <a href="/suite/{{$resSuite->suiteID}}">
                                                        {{$resSuite->description}}
                                                    </a>
                                                </h6>
                                                <div class="dotted-bg"></div>
                                                <span>
                                                    ${{$resSuite->pricePerNight}}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                    @endif
                                    @endforeach
                                </ul>
                            </div><!-- /.col-md-6" -->
                        </div><!-- /.content-inner -->
                    </div><!-- /.content-tab -->
                </div><!--flat-tabs-->
            </div><!--/.col-md-12-->
        </div><!--/.row-->
    </div><!--/.container -->
</section>

<!-- Flat projects portfolio -->
<section class="flat-row flat-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style1 ">
                    <div class="top-section">
                        <p>Discover</p>
                    </div>
                    <h1 class="title">Photos Gallery</h1>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row">
            <div class="flat-projects-portfolio ">
                <div class="projects-portfolio clearfix">
                    <div class="projects-portfolio-wrap houses">
                        <div class="item">
                            <div class="portfolio-img flat-hover-images">
                                <a href="gallery-list.html">
                                    <img src="images/portfolio/tllax-dining-the-royce-dining-room-1680-945.jpg" alt="image" />
                                </a>
                            </div>
                        </div><!-- /.item -->
                    </div><!-- /.projects-portfolio-wrap -->

                    <div class="projects-portfolio-wrap find houses">
                        <div class="item">
                            <div class="portfolio-img flat-hover-images">
                                <a href="gallery-list.html">
                                    <img src="images/portfolio/tllax-rooms-classic-king-room-2014-1680-945.jpg" alt="image" />
                                </a>

                            </div>
                        </div>
                    </div><!-- /.projects-portfolio-wrap -->

                    <div class="projects-portfolio-wrap find houses">
                        <div class="item">
                            <div class="portfolio-img flat-hover-images">
                                <a href="gallery-list.html">
                                    <img src="images/portfolio/tllax-rooms-lanai-king-2014-1680-945.jpg" alt="image" />
                                </a>

                            </div>
                        </div>
                    </div><!-- /.projects-portfolio-wrap -->

                    <div class="projects-portfolio-wrap coffe">
                        <div class="item">
                            <div class="portfolio-img flat-hover-images">
                                <a href="gallery-list.html">
                                    <img src="images/tllax-rooms-cottage-grand-king-also-california-suite-and-royce-manor-2014-1680-945.jpg" alt="image" />
                                </a>

                            </div>
                        </div>
                    </div><!-- /.projects-portfolio-wrap -->

                    <div class="projects-portfolio-wrap coffe drink">
                        <div class="item">
                            <div class="portfolio-img flat-hover-images">
                                <a href="gallery-list.html">
                                    <img src="images/portfolio/tllax-rooms-exec-club-king (1).jpg" alt="image" />
                                </a>

                            </div>
                        </div>
                    </div><!-- /.projects-portfolio-wrap -->

                    <div class="projects-portfolio-wrap drink catering">
                        <div class="item">
                            <div class="portfolio-img flat-hover-images">
                                <a href="gallery-list.html">
                                    <img src="images/portfolio/tllax-rooms-suites-ford-bedroom2-1680-945.jpg" alt="image" />
                                </a>

                            </div>
                        </div>
                    </div><!-- /.projects-portfolio-wrap -->


                </div><!-- /.projects-portfolio -->
            </div>

            <div class="read-more view-all">
                <a>Gotta Like It</a>
            </div>
        </div><!--/.row-->
    </div><!--/.container -->
</section>

<!-- Flat testimonial -->
<section style="margin: 120px;" class="flat-row flat-testimonial index-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section margb-27px">
                    <h1 class="title">Our Customers Say</h1>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row">
            <div class="col-md-12">

                <div class="flat-carousel">
                    <div class="owl-carousel-services">
                        <div class="item-owl">
                            <div class="blockquote-testimo">
                                <p>
                                    "Highly recommend Sayomi Hotel, to anyone who loves the real American values, the comfort is top of the line, the service is top tier, the tech included right there, Oh man, top of the line,
                                    <br /> give me a break if you don't book at Sayomi if coming to the US, pretty great stuff right there!"
                                </p>
                            </div>

                            <div class="title-testimonial">
                                <h6 class="title">
                                    <a href="#">Anas Latique</a>
                                </h6>
                                <p>Developer</p>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="blockquote-testimo">
                                <p>
                                    "Dude, this Hotel is the real deal right there, very conservative, supports the second amendment, supports republican niches, and makes you discover the real American values, got very powerful and beautiful walls, to stop illegal immigrants and losers!
                                    <br /> pretty good stuff right there! Make it great again!"
                                </p>
                            </div>

                            <div class="title-testimonial">
                                <h6 class="title-post">
                                    <a href="#">Anas Soubai</a>
                                </h6>
                                <p>Designer</p>
                            </div>
                        </div>



                    </div><!--/.owl-carousel-services-v2-->
                </div><!--/.flat-carousel-v2-->
            </div><!--/.col-md-12-->
        </div><!--/.row-->
    </div><!--/.container -->
</section>
@endsection