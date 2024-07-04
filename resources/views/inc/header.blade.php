<header>
    <div id="lgx-header" class="lgx-header">
        <div class="header-top">
            <div class="header-top-inner">
                <div class="lgx-container"> <!--lgx-container-fluid-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact">
                                <ul class="list-inline">
                                    <li><span class="question-text">Order Now?</span> <i class="fa fa-phone" aria-hidden="true"></i>+41 7658 20023</li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">info@store-name.ch</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="google-header-design">
                           <div style="width: fit-content !important">
                            <div id="google_translate_element"></div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: "fr,en", layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                }
                                </script>
                           </div>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--//.header-top-->
        <div class="lgx-header-position "> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container"> <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo"> <!--lgx-logo-default lgx-logo-fixed lgx-logo-white lgx-logo-black-->
                            <a href="{{ route('home') }}" class="lgx-scroll">
                                {{-- <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo"/> --}}
                                LOG
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse lgx-collapse">
                        <ul class="nav navbar-nav lgx-nav">
                            <li><a class="lgx-scroll active" href="{{ route('home') }}">Home</a></li>
                            <li><a class="lgx-scroll" href="{{ route('about') }}">About Us</a></li>
                            <li><a class="lgx-scroll" href="{{ route('menu') }}">Menu</a></li>
                            <li><a class="lgx-scroll" href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a class="lgx-scroll" href="{{ route('contact')}} ">Contact Us</a></li>
                            <li><a class="lgx-scroll btn lgx-btn" href="{{ route('reservation') }}"><span>RÉSERVATION</span></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
    </header>
