
@extends('content.mywebsite.layouts.footer')
@extends('content.mywebsite.layouts.header')
@section('content')
 <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="background-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="background-content text-center">
                                <h2 class="title">Booking List</h2>
                                <nav>
                                    <ol class="d-flex justify-content-center mb-0">
                                        <li class="background-item"><a href="index-2.html">Home</a></li>
                                        <li class="background-item active">Booking List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- customer-details-area -->
            <section class="customer-details-area">
                <div class="container">
                    <div class="customer-progress-wrap">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                        </div>
                        <div class="customer-progress-step">
                            <ul>
                                <li>
                                    <span>1</span>
                                    <p>Guest Information</p>
                                </li>
                                <li>
                                    <span>2</span>
                                    <p>Payment</p>
                                </li>
                                <li>
                                    <span>3</span>
                                    <p>Confirmation</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- customer-details-area-end -->

            <!-- booking-details-area -->
            <section class="booking-details-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="rightBare">
                            <div class="primary-contact">
                                <i class="fa-regular fa-user"></i>
                                <h2 class="title">Passenger 1: Ms (Primary Contact)</h2>
                            </div>
                            <div class="booking-details-wrap">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="firstname">First Name</label>
                                                    <input type="text" id="firstname" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="lastname">last Name</label>
                                                    <input type="text" id="lastname">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <input type="number" placeholder="Mobile Number *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" id="email" placeholder="youinfo@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="leftbare">
                            <aside class="booking-sidebar">
                                <h2 class="main-title">Booking Info</h2>
                                <div class="widget">
                                    <h2 class="widget-title">Your price summary</h2>
                                    <div class="price-summary-top">
                                        <ul>
                                            <li>Details</li>
                                            <li>Amount</li>
                                        </ul>
                                    </div>
                                    <div class="price-summary-detail">
                                        <ul>
                                            <li>Adult x 1 <span>$1,056</span></li>
                                            <li>Tax x 1 <span>$35</span></li>
                                            <li>Total Airfare: <span>$1,091</span></li>
                                            <li>Discount<span>- $110</span></li>
                                            <li>Total Payable<span>$981.00</span></li>
                                        </ul>
                                        <a href="#" class="btn">Pay now</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking-details-area-end -->

        </main>
        <!-- main-area-end -->
@endsection
