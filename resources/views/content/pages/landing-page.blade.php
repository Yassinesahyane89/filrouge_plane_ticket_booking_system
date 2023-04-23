
@extends('content.pages.layouts.footer')
@extends('content.pages.layouts.header')
@section('content')
            <!-- booking-area -->
            <div class="booking-area position-relative">
                <div class="container">
                    <div class="bg-white p-4 rounded-3">
                        <form  action="{{ route('booking.searchFlight') }}" method="POST">
                            @csrf
                            <div class="booking-details-wrap d-flex flex-wrap p-1">
                                <div class="col-md-4 d-flex flex-column p-1">
                                    <div class="">
                                        <div class="form-grp">
                                            <div class="form">
                                                <label for="departureAirport">Airport departur</label>
                                                <select name="departureAirport" id="departureAirport">
                                                    <option value="">Please select</option>
                                                    @foreach ($airports as $airport)
                                                      <option value="{{$airport->id}}">{{ $airport->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-grp">
                                            <div class="form">
                                                <label for="arrivalAirport">Airport Arrival</label>
                                                <select name="arrivalAirport" id="arrivalAirport">
                                                    <option value="">Please select</option>
                                                    @foreach ($airports as $airport)
                                                      <option value="{{$airport->id}}">{{ $airport->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex flex-column p-1">
                                    <div class="">
                                        <div class="form-grp">
                                            <div class="form">
                                                <label for="departureDate">Date departeur</label>
                                                <input type="date" id="departureDate" name="departureDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-grp">
                                            <div class="form">
                                                <label for="arrivalDate">Date Arrival</label>
                                                <input type="date" id="arrivalDate" name="arrivalDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-4 d-flex flex-column p-1">
                                    <div class="">
                                        <div class="form-grp">
                                            <div class="form">
                                                <label for="numberPassenger">Number passenger</label>
                                                <input type="number" id="numberPassenger" name="numberPassenger">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-grp">
                                            <div class="form">
                                                <label for="class">class</label>
                                                <select name="class" id="class">
                                                    <option value="">Please select</option>
                                                    @foreach ($classes as $class)
                                                      <option value="{{$class->id}}">{{ $class->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-wrap">
                                <button href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- booking-area-end -->
            <!-- features-area -->
            <section class="features-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-sm-10">
                            <div class="features-item">
                                <div class="features-icon">
                                    <i class="flaticon-help"></i>
                                </div>
                                <div class="features-content">
                                    <h6 class="title">We are now available</h6>
                                    <p>Call +1 555 666 888 for contuct with us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-10">
                            <div class="features-item">
                                <div class="features-icon">
                                    <i class="flaticon-plane"></i>
                                </div>
                                <div class="features-content">
                                    <h6 class="title">International Flight</h6>
                                    <p>Call +1 555 666 888 for booking assistance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-10">
                            <div class="features-item">
                                <div class="features-icon">
                                    <i class="flaticon-money-back-guarantee"></i>
                                </div>
                                <div class="features-content">
                                    <h6 class="title">Check Refund</h6>
                                    <p>Call +1 555 666 888 for check refund status</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->
            <!-- destination-area -->
            <section class="destination-area destination-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title">
                                <span class="btn btn-warning px-3 py-2 rounded-pill text-white">Offer Deals</span>
                                <h2 class="text-white mb-4">Your Great Destination</h2>
                            </div>
                            <div class="destination-content">
                                <p class="text-white">Get rewarded for your travels – unlock instant savings of 10% or more with a free <span>royalairsahayne.com</span> account</p>
                                <ul class="d-flex align-items-center flex-wrap mb-4">
                                    <li>
                                        <div class="bg-white rounded-4 d-flex align-items-center justify-content-between px-4 py-3">
                                            <div class="counter-content">
                                                <h2 class="mb-0 lh-1 text-dark"><span>5830</span>+</h2>
                                                <p>Happy Customers</p>
                                            </div>
                                            <div class="counter-icon">
                                                <i class="flaticon-group"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-white rounded-4 d-flex align-items-center justify-content-between px-4 py-3">
                                            <div class="counter-content">
                                                <h2 class="mb-0 lh-1 text-dark"><span>100</span>%</h2>
                                                <p>Client Setisfied</p>
                                            </div>
                                            <div class="counter-icon">
                                                <i class="flaticon-globe"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex align-items-center flex-wrap">
                                    <p class="mb-0 text-white">Discover the latest offers & news and start planning</p>
                                    <a class="btn btn-warning btn-sm mx-2 text-uppercase px-2 py-2 rounded-pill text-white" href="contact.html">contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- destination-area-end -->
            <!-- service-area -->
            <section class="service-area">
                <div class="container">
                    <div class="row align-items-end mb-50">
                        <div class="col-md-8">
                            <div class="section-title">
                                <span class="sub-title">Why Air Sahyane</span>
                                <h2 class="title">Our Great Flight Options</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-nav"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="assets/img/service_icon01.png" alt="">
                                </div>
                                <div class="service-content">
                                    <span>Service 01</span>
                                    <h2 class="title">Pre-Book Your Baggage</h2>
                                    <div class="service-list">
                                        <ul>
                                            <li>Pre-book your baggage <i class="flaticon-check-mark"></i></li>
                                            <li>Allowance now and save up <i class="flaticon-check-mark"></i></li>
                                            <li>90% of baggage charges <i class="flaticon-check-mark"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="assets/img/service_icon02.png" alt="">
                                </div>
                                <div class="service-content">
                                    <span>Service 02</span>
                                    <h2 class="title">Reserve preferred seat!</h2>
                                    <div class="service-list">
                                        <ul>
                                            <li>What will it be, window or aisle? <i class="flaticon-check-mark"></i></li>
                                            <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                                            <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="assets/img/service_icon03.png" alt="">
                                </div>
                                <div class="service-content">
                                    <span>Service 03</span>
                                    <h2 class="title">Enjoy stress-free travel</h2>
                                    <div class="service-list">
                                        <ul>
                                            <li>Travel stress-free by getting<i class="flaticon-check-mark"></i></li>
                                            <li>Covered for flight modification <i class="flaticon-check-mark"></i></li>
                                            <li>Cancellation, accident & medical <i class="flaticon-check-mark"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service-area-end -->
@endsection
