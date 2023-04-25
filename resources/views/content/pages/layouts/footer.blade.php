 <!-- footer-area -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-title mt-25 mb-35">
                                    <h4 class="title">Contact</h4>
                                </div>
                                <div class="footer-content">
                                    <div class="footer-widget">
                                        <div class="footer-contact">
                                            <h2 class="title"><a href="tel:0123456789">+1 222 333 - 4444</a></h2>
                                            <a href="#">royalairmaroc@company.com</a>
                                            <form action="#">
                                                <input type="email" placeholder="Enter your email">
                                                <button type="submit"><i class="flaticon-send"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <ul class="footer-social d-flex align-items-center justify-content-around border-top pt-4">
                                        <li><a href="#" class="d-flex align-items-center justify-content-center rounded-circle"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="d-flex align-items-center justify-content-center rounded-circle"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#" class="d-flex align-items-center justify-content-center rounded-circle"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#" class="d-flex align-items-center justify-content-center rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-title mt-25 mb-35">
                                    <h4 class="title">Explore</h4>
                                </div>
                                <div>
                                    <ul class="d-flex align-items-center flex-wrap">
                                        <li class="w-50 mb-3"><a href="about.html" class="text-white">About us</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Travel alerts</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Awards</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Qatarisation</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Careers</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Beyond</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Press release</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Airways Cargo</a></li>
                                        <li class="w-50 mb-3"><a href="contact.html" class="text-white">Sponsorship</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-title mt-25 mb-35">
                                    <h4 class="title">Privacy</h4>
                                </div>
                                <div>
                                    <ul class="d-flex align-items-center flex-wrap">
                                        <li class="w-50 mb-3"><a class="text-white" href="booking-list.html">Airline fees</a></li>
                                        <li class="w-50 mb-3"><a class="text-white" href="booking-list.html">Airline guides</a></li>
                                        <li class="w-50 mb-3"><a class="text-white" href="booking-list.html">Airport guides</a></li>
                                        <li class="w-50 mb-3"><a class="text-white" href="booking-list.html">Low fare tips</a></li>
                                        <li class="w-50 mb-3"><a class="text-white" href="booking-list.html">Flights</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
        <!-- JS here -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
        {{-- @if ($errors->any())
          <script>
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: '{{ $errors->first() }}',
              });
          </script>
        @endif --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
         @if ($errors->any())
          <script>
            console.log(@json($errors->all()));
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: '{{ $errors->first() }}',
              });
          </script>
        @endif
        {{-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script> --}}
        <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>
