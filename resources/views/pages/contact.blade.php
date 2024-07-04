@extends('layout.web')
@section('title','Contact Us')
@section('content')
<x-banner title="Contact Us" />
<div class="lgx-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h3 class="title">Leave us a Message</h3>
                @if(Session::has('success'))
                <div class="alert alert-warning" role="alert">
                    {{ Session::get('success') }}
                </div>
                <hr>
                @endif
                <form method="POST" action="{{ route('contact') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control lgxname" id="lgxname" placeholder="Enter Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control lgxemail" id="lgxemail" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" class="form-control lgxsubject" id="lgxsubject" placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control lgxmessage" name="message" id="lgxmessage" rows="5" placeholder="We expect drop some line from you..." required></textarea>
                    </div>

                    <button type="submit" name="submit" value="contact-form" class="lgx-btn lgx-btn-big hvr-glow hvr-radial-out lgxsend lgx-send"><span>Send Massage</span></button>
                </form>

                <!-- MODAL SECTION -->
                <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content lgx-modal-content">
                            <div class="modal-header lgx-modal-header">
                                <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-power-off"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="alert lgx-form-msg" role="alert"></div>
                            </div>
                            <!--//MODAL BODY-->

                        </div>
                    </div>
                </div> <!-- //MODAL -->

            </div>
            <!--//.COL-->
            <div class="col-sm-12 col-md-6">
                <div class="contact-info">
                    <div class="lgx-box">
                        <div class="address">
                            <h3 class="title">Location</h3>
                            <p>Designatde Address</p>
                        </div>
                    </div>
                    <div class="lgx-box">
                        <div class="address">
                            <h3 class="title">Contact Info</h3>
                            <p>PHONE: +41 021 611 6908</p>
                            <p>MOBILE: +41 7658 20023</p>
                        </div>
                    </div>
                    <div class="lgx-box">
                        <!--<span class="lgx-icon"><i class="fa fa-envelope"></i></span>-->
                        <div class="address">
                            <h3 class="title">Mail Info.</h3>
                            <p>Email:<div>info@store-name.ch</div>
                            </p>
                            <p>
                                <div>your emial.com</div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <hr>
                <div class="innerpage-section">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2745.248681454522!2d6.628643776332312!3d46.52298067111112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c2e31e6134f7d%3A0xac127c0f6705e963!2sRue%20Chaucrau%2014%2C%201003%20Lausanne%2C%20Switzerland!5e0!3m2!1sen!2sin!4v1719217842829!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!--//.ROW-->


    </div>
</div>
@endsection
