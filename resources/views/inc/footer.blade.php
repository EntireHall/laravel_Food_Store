<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer">
        <!--lgx-footer-white-->
        <div class="lgx-inner">
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <a class="logo" href="{{ route('home') }}">
                            <img src="{{ secure_asset('assets/img/logo.jpg') }}" alt="Logo">
                        </a>
                        <address>
                            <i class="fa fa-map-marker"></i>
                          Designated Address
                        </address>
                        <ul class="list-unstyled lgx-address-info">
                            <li><i class="fa fa-phone"></i>+41 7658 20023</li>
                            <li><i class="fa fa-envelope"></i><a href="#">info@store-name.ch</a></li>
                        </ul>
                    </div>
                    <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h2 class="title">Opening Time</h2>
                        <div class="opening-time-single">
                            Saterday- Sunday
                            <span><i>10:00</i> Am - <i>11:00</i> PM</span>
                        </div>
                        <div class="opening-time-single">
                            Saterday- Sunday
                            <span><i>10:00</i> Am - <i>11:00</i> PM</span>
                        </div>
                        <div class="opening-time-single">
                            Saterday- Sunday
                            <span><i>10:00</i> Am - <i>11:00</i> PM</span>
                        </div>
                    </div>
                    <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h2 class="title">Pages</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('menu') }}">Our Menu</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('reservation') }}">Reservation</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h2 class="title">Newsletter</h2>
                        <div class="lgx-subscriber-area">
                            <p class="text">Don't miss any updates all the astonishing offers we bring for you.</p>
                            <div class="lgx-subscriber">
                                <form class="subscribe-form lgx-subscribe-form">
                                    <div class="form-group">
                                        <input type="email" id="subscribe" placeholder="your email"
                                            class="form-control lgx-input-form form-control" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="lgx-submit" id="lgx-submit"
                                            class="btn lgx-btn lgx-submit the-submit-btn"><span>Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                            <!--//.SUBSCRIBE-->
                        </div>
                    </div>
                    <!--//footer-area-->
                </div>
                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p>© {{ date('Y') }} Restaurant store-name.</p>
                    </div>
                    <div class="lgx-social-footer">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->
