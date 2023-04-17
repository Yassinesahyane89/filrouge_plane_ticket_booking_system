
@extends('content.mywebsite.layouts.footer')
@extends('content.mywebsite.layouts.header')
@section('content')

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
                                <form action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="name" placeholder="Your Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Your Email *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="number" name="mobile" placeholder="Your Mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="message" name="message" placeholder="Message"></textarea>
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
@endsection
