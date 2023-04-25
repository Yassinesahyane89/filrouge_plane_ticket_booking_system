
@extends('content.pages.layouts.footer')
@extends('content.pages.layouts.header')
@section('content')

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
                  <form action="{{ route('availabel-flight.storeInformationPassenger',$flight->id, request()->class) }}"  method="POST" id="Passengerdetail">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="rightBare">
                          <h2>Informations for all Passenger ?</h2>
                          @for ($i = 0; $i < request()->numberPassenger; $i++)
                            <div style="margin-bottom: 20px;">
                                <div class="primary-contact">
                                    <i class="fa-regular fa-user"></i>
                                    <h2 class="title">Passenger {{$i}}</h2>
                                </div>
                                <div class="booking-details-wrap">
                                  <div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-grp">
                                                  <div class="form">
                                                      <label for="firstname">First Name</label>
                                                      <input type="text" id="firstname" name="passengers[{{$i}}][firstname]" value="{{ old( "passengers.".$i.".firstname") }}">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-grp">
                                                  <div class="form">
                                                      <label for="lastname">last Name</label>
                                                      <input type="text" id="lastname" name="passengers[{{$i}}][lastname]" value="{{ old( "passengers.".$i.".lastname") }}">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-grp">
                                                  <div class="form">
                                                      <input type="number" placeholder="Mobile Number" name="passengers[{{$i}}][phone]" value="{{ old( "passengers.".$i.".phone") }}">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-grp">
                                                  <div class="form">
                                                      <label for="email">Your Email</label>
                                                      <input type="email" id="email" placeholder="youinfo@gmail.com" name="passengers[{{$i}}][email]" value="{{ old( "passengers.".$i.".email") }}">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          @endfor
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
                                            <li>Adult x 1 <span>{{ request()->numberPassenger }}</span></li>
                                            <li>price x 1 <span>{{ $price }}</span></li>
                                            <input type="hidden" name="totalprice"  value="{{ request()->numberPassenger * $price }}">
                                            <input type="hidden" name="price"  value="{{ $price }}">
                                            <li>Total Payable<span>{{ request()->numberPassenger * $price}}.00</span></li>
                                            <input type="hidden" value="{{ request()->numberPassenger * $price}}" name="totalCost">
                                        </ul>
                                        <button class="btn" type="submit">Pay now</button>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                  </form>
                </div>
            </section>
            <!-- booking-details-area-end -->
@endsection
