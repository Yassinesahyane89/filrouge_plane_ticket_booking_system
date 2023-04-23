
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

            <!-- payment-details-area -->
            <section class="payment-details-area">
                <div  style="width: 90%; margin: auto;">
                    <div class="row justify-content-center">
                        <div class="rightBare">
                            <div class="primary-contact">
                                <h2 class="title">Détail de paiement</h2>
                            </div>
                            <div class="payment-details-wrap">
                              <div>
                              <ul style="display: flex; justify-content: space-between; align-items: center">
                                <li><p>Methode de payemnt</p></li>
                                <li style="width: 50%"><img src="{{ asset('assets/img/cartes-min.png') }}" alt=""></li>
                              </ul>
                            </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="firstname">Nom du porteur de la carte</label>
                                                    <input type="text" id="firstname" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="firstname">Numéro de carte de paiement</label>
                                                    <input type="text" id="firstname" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="firstname">Date d'expiration</label>
                                                    <ul class="row">
                                                        <li class="col-md-6">
                                                            <div class="form-grp">
                                                                <label for=""></label>
                                                                <div class="form">
                                                                    <select id="title" name="select" class="form-select" aria-label="Default select example">
                                                                        <option value="">Mr.</option>
                                                                        <option>Mrs.</option>
                                                                        <option>Others..</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <div class="form-grp">
                                                                <label for=""></label>
                                                                <div class="form">
                                                                    <select id="title" name="select" class="form-select" aria-label="Default select example">
                                                                        <option value="">Mr.</option>
                                                                        <option>Mrs.</option>
                                                                        <option>Others..</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-grp">
                                                <div class="form">
                                                    <label for="firstname">Code de vérification</label>
                                                    <input type="text" id="firstname" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="leftbare">
                            <aside class="payment-sidebar" style="background-color: white;">
                                <h2 class="main-title">Détail de la commande</h2>
                                <div class="widget">
                                    <div class="price-summary-top">
                                        <ul>
                                            <li class="title">Identifiant</li>
                                            <li>C5C953AF-8CF6-470F-A88C-CBAA3389ED06</li>
                                        </ul>
                                        <ul>
                                            <li class="title">Montant</li>
                                            <li>60 MAD</li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside class="payment-sidebar" style="background-color: white; margin-top: 20px;">
                                <h2 class="main-title">Informations du Client</h2>
                                <div class="widget">
                                    <div class="price-summary-top">
                                        <ul>
                                            <li class="title">Nom</li>
                                            <li>yassine sahyane</li>
                                        </ul>
                                        <ul>
                                            <li class="title">Email</li>
                                            <li>yassine.sahyane89@gmail.com</li>
                                        </ul>
                                        <ul>
                                            <li class="title">tel</li>
                                            <li>0600883622</li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside class="payment-sidebar" style="background-color: white; margin-top: 20px;">
                                <div class="widget">
                                    <div class="price-summary-detail">
                                        <button href="#" class="btn" >validation payment</button>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- payment-details-area-end -->
@endsection