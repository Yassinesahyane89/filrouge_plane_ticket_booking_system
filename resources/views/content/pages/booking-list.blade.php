@extends('content.pages.layouts.footer')
@extends('content.pages.layouts.header')
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
                                        <a class="flight-price" href="{{ route('availabel-flight.coordinates',['flight'=>$flight->id,'class_id'=>  request()->class , 'numberPassenger' => request()->numberPassenger]) }}">
                                            <span class="title">{{ $flight->flightFares()->where('cabin_id', request()->class)->first()->fare }}$</span>
                                            <span class="btn" type="submit">Select <i class="flaticon-flight-1"></i></span>
                                        </a>
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
