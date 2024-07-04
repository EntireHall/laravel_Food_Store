@extends('layout.web')
@section('title','Reservation')
@section('content')
<x-banner title="Reservation" />
<div class="lgx-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="lgx-reservation-area lgx-reservation-area-another">
                    @if(Session::has('success'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        <hr>
                    @endif
                    <form id="reservationbooking" method="POST" action="{{ route('reservation') }}">
                        @csrf
                        <div class="form-group  lgx-form-left">
                            <input class="form-control" name="name"  placeholder="Enter Your Name" aria-required="true" type="text">
                        </div>
                        <div class="form-group lgx-form-right">
                            <input class="form-control" name="email" placeholder="Email Address" aria-required="true" type="email">
                        </div>
                        <div class="form-group lgx-form-left">
                            <input class="form-control" name="phone"  placeholder="Telephone Number" type="text">
                        </div>
                        <div class="form-group lgx-form-right">
                            <select class="form-control" name="persons"  aria-required="true">
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
                        <div class="form-group lgx-form-full lgx-form-left">
                            <div class="input-group date" id="datetimepicker">
                                <input name="date_on" id="reservationbooking_date" class="form-control" placeholder="Date format ( mm-dd-yyyy )." aria-required="true" type="text">
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group lgx-form-right">
                            <select class="form-control" name="time_on" id="foodiebooking_time" aria-required="true">
                                <option value="">Choose Time</option>
                                <option value="1">Breakfast</option>
                                <option value="2">Lunch</option>
                                <option value="3">Dinner</option>
                            </select>
                        </div>
                        <div class="lgx-form-group">
                            <input class="lgx-btn lgx-submit" value="Booking Submit" type="submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
