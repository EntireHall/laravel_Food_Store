@extends('layout.web')
@section('title','Home')
@section('content')
<!--BANNER-->
<section class="section-gap">
    <div class="lgx-banner">
        <div class="lgx-banner-style">
            <div class="lgx-inner lgx-inner-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-banner-info" style="margin-top: -50px">
                                <!--lgx-banner-info-center lgx-banner-info-black lgx-banner-info-big lgx-banner-info-bg-->
                                <h3 class="subtitle"></h3>
                                <h3 class="subtitle"><span id="lgx-typed-string">Delicious Foods</span></h3>
                                <h2 class="title">Experience the Richness of<br>Tradition in Every Bite</h2>
                                <div class="btn-area">
                                    <a class="lgx-scroll btn lgx-btn"
                                        href="#lgx-reservation"><span>Reservation</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </div>
</section>
<!--BANNER END-->

<!--ABOUT-->
<section class="section-gap">
    <div id="lgx-about" class="lgx-about">
        <!--lgx-about-bottom-->
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <div class="lgx-about-area">
                            <div class="lgx-heading">
                                <h2 class="heading-title">About Us</h2>
                            </div>
                            <div class="lgx-about-content">
                                <blockquote class="about">
                                    Welcome to Restaurant store-name – the heart of authentic Indian and Halal cuisine in the beautiful city of Lausanne. Our restaurant is named after store-name, a city known for its rich cultural heritage and culinary traditions.
                                </blockquote>
                                <p class="text">
                                    At Restaurant store-name, we pride ourselves on offering an extensive menu that showcases the best of Indian and Halal cuisine. Our chefs, hailing from different regions of India, bring their unique expertise and authentic recipes to the table. From the fiery spices of the north to the delicate flavors of the south, our dishes are crafted using traditional cooking methods and the freshest ingredients.
                                </p>
                                <a class="btn lgx-btn lgx-btn-simple" href="{{ route('about') }}"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--ABOUT END-->

<!--ABOUT TOP-->
<section>
    <div id="lgx-about-top" class="lgx-about-top">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="about-top-single">
                            <a href="#"><img src="{{ asset('assets/img/dine-in.png')}}" alt="about-icon"></a>
                            <h3 class="title"><a href="#">Fine Dining</a></h3>
                            <p>Experience authentic Indian and Halal cuisine with our premier dine-in services, offering a rich variety of flavorful dishes in a warm and welcoming atmosphere.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about-top-single">
                            <a href="#"><img src="{{ asset('assets/img/food-delivery_6425633.png') }}" alt="about-icon"></a>
                            <h3 class="title"><a href="#">Takeaway</a></h3>
                            <p>Enjoy authentic Indian and Halal cuisine delivered to your door with our convenient takeaway service.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about-top-single">
                            <a href="#"><img src="{{ asset('assets/img/buffet-23.png')}}" alt="about-icon"></a>
                            <h3 class="title"><a href="#">Buffet</a></h3>
                            <p>Experience a diverse and delectable buffet featuring authentic Indian and Halal cuisine, catering to all your culinary desires</p>
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--ABOUT TOP END-->

<!--MENU ITEMS-->
<section>
    <div id="lgx-menu" class="lgx-menu">
        <!--lgx-menu-white-->
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading lgx-heading-white">
                            <h2 class="heading-title">Our Menu</h2>
                        </div>
                </div>
                </div>
                <!--//.ROW-->
            </div>
            <div class="container-fluids section-gap">
                <div class="text-center">
                    <a class="btn lgx-btn" href="{{ route('menu') }}"><span>View Menu</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MENU ITEMS END-->

<!--RESERVATION-->
<section>
    <div id="lgx-reservation" class="lgx-reservation">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Book A Table</h2>
                            <h4 class="heading-subtitle">Some Trendy And Popular Courses Offerd</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        <div class="lgx-reservation-area">
                            @if(Session::has('success'))
                                <div class="alert alert-warning" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                                <hr>
                            @endif
                            <form id="reservationbooking" method="POST" action="{{ route('reservation') }}">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" name="name" id="foodiebooking_name"
                                        placeholder="Enter Your Name" aria-required="true" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" id="foodiebooking_email"
                                        placeholder="Email Address" aria-required="true" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="phone" id="foodiebooking_phone"
                                        placeholder="Telephone Number" type="text">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="persons" id="foodiebooking_person"
                                        aria-required="true">
                                        <option value="">Number of Guests</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="8">9</option>
                                        <option value="10">10</option>
                                        <option value="more">More than 10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker">
                                        <input name="date_on" id="reservationbooking_date" class="form-control"
                                            placeholder="Date format ( mm-dd-yyyy )." aria-required="true" type="text">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="time_on" id="foodiebooking_time"
                                        aria-required="true">
                                        <option value="">Time</option>
                                        <option value="1">Breakfast</option>
                                        <option value="2">Lunch</option>
                                        <option value="3">Dinner</option>
                                    </select>
                                </div>
                                <div class="lgx-form-group">
                                    <input  class="lgx-btn lgx-submit" value="Booking Submit" type="submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--RESERVATION END-->

<!--VIDEO-->
<section>
    <div id="lgx-video" class="lgx-video">
        <div class="lgx-inner">
            <div class="container" style="height: 80px !important;">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="lgx-video-title">
                            <span>Explore the Spices of India</span>
                            Dine In or Take Out!</h2>
                        <div class="lgx-video-area text-center">
                            <a class="btn lgx-btn" href="{{ route('reservation') }}"><span>Reserve Table</span></a>
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--//.VIDEO END-->
@endsection
