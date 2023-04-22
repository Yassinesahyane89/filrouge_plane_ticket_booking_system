@extends('content.mywebsite.layouts.footer')
@extends('content.mywebsite.layouts.header')
@section('content')
    <!-- booking-list-area -->
            <div class="booking-list-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-73">
                          @foreach ($flights as $flight)
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="container d-flex align-items-center justify-content: space-between">
                                            <div class="flight-info">
                                                <p>départ</p>
                                                <h4>{{ date('H:i', strtotime($flight->departure_date)) }}</h4>
                                                <p>{{ $flight->fromAirport->name }}</p>
                                            </div>
                                            <div class="customer-progress-wrap">
                                                <div class="progress"></div>
                                                <div class="customer-progress-step">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="flight-info">
                                                <p>arrival</p>
                                                <h4>{{ date('H:i', strtotime($flight->arrival_date)) }}</h4>
                                                <p>{{ $flight->toAirport->name }}</p>
                                            </div>
                                        </div>
                                        <form class="flight-price" action="{{ route('bookingdetail.index') }}"  method="POST">
                                          @csrf
                                            <input type="hidden" name="flight_id" value="{{ $flight->id }}">
                                            <input type="hidden" name="numberOfPassengers" value="{{ $numberOfPassengers }}">
                                            <input type="hidden" name="classId" value="{{ $classId }}">
                                            <h4 class="title">US$ {{ $flight->flightFares()->where('cabin_id', $classId)->first()->fare }}</h4>
                                            <button class="btn">Select <i class="flaticon-flight-1"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- booking-list-area-end -->
@endsection
