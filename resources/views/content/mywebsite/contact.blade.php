
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

            <!-- contact-area -->
            <section class="contact-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title text-center mb-40">
                                <span class="sub-title">contact us now</span>
                                <h2 class="title">Write a Message</h2>
                            </div>
                            <div class="contact-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Your Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" placeholder="Your Email *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="number" placeholder="Your Mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="submit-btn text-center">
                                        <button type="submit" class="btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->
        </main>
        <!-- main-area-end -->
@endsection
