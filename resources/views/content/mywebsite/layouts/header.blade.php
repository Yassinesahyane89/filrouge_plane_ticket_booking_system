@extends('content.mywebsite.layouts.head')
<!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <nav class="menu-nav">
                                <div class="logo"><a href="index.html"><img src="assets/img/logo.png" alt=""></a></div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="booking-list.html">Booking List</a></li>
                                        <li><a href="booking-details.html">Booking Details</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="assets/img/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->
<main>
    @yield('content')
</main>
