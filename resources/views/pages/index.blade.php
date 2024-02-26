@extends('layouts.app')

@section('title', __('Homez'))

@section('content')
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style3 p0">
        <div class="home-style3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="inner-banner-style3">
                            <h2 class="hero-title mb30 animate-up-1">Find The Perfect Place to Live With your Family</h2>
                            <div class="advance-style3 mb30 mx-auto animate-up-2">
                                <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Buy</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Rent</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Sold</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="advance-content-style3">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-4">
                                                    <div class="advance-search-field position-relative text-start">
                                                        <form action="#" method="get"
                                                            class="form-search position-relative" accept-charset="utf-8">
                                                            <div class="box-search">
                                                                <span class="icon flaticon-home-1"></span>
                                                                <input class="form-control bgc-f7" type="text"
                                                                    name="search" placeholder="Enter Keyword">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-4">
                                                    <div class="mt-3 mt-md-0">
                                                        <div class="bootselect-multiselect">
                                                            <select class="selectpicker">
                                                                <option>type</option>
                                                                <option value="Apartments">Apartments</option>
                                                                <option value="Bungalow">Bungalow</option>
                                                                <option value="Houses">Houses</option>
                                                                <option value="Loft">Loft</option>
                                                                <option value="Office">Office</option>
                                                                <option value="TownHome">TownHome</option>
                                                                <option value="Villa">Villa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pe-0">
                                                    <div
                                                        class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                                                        <button class="advance-search-btn" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><span
                                                                class="flaticon-settings"></span> Advanced</button>
                                                        <button class="advance-search-icon ud-btn btn-thm ms-4"
                                                            type="button"><span class="flaticon-search"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="advance-content-style3">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-4">
                                                    <div class="advance-search-field position-relative text-start">
                                                        <form action="#" method="get"
                                                            class="form-search position-relative" accept-charset="utf-8">
                                                            <div class="box-search">
                                                                <span class="icon flaticon-home-1"></span>
                                                                <input class="form-control bgc-f7" type="text"
                                                                    name="search" placeholder="Enter Keyword">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-4">
                                                    <div class="mt-3 mt-md-0">
                                                        <div class="bootselect-multiselect">
                                                            <select class="selectpicker">
                                                                <option>type</option>
                                                                <option value="Apartments">Apartments</option>
                                                                <option value="Bungalow">Bungalow</option>
                                                                <option value="Houses">Houses</option>
                                                                <option value="Loft">Loft</option>
                                                                <option value="Office">Office</option>
                                                                <option value="TownHome">TownHome</option>
                                                                <option value="Villa">Villa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pe-0">
                                                    <div
                                                        class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                                                        <button class="advance-search-btn" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><span
                                                                class="flaticon-settings"></span> Advanced</button>
                                                        <button class="advance-search-icon ud-btn btn-thm ms-4"
                                                            type="button"><span class="flaticon-search"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div class="advance-content-style3">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-4">
                                                    <div class="advance-search-field position-relative text-start">
                                                        <form action="#" method="get"
                                                            class="form-search position-relative" accept-charset="utf-8">
                                                            <div class="box-search">
                                                                <span class="icon flaticon-home-1"></span>
                                                                <input class="form-control bgc-f7" type="text"
                                                                    name="search" placeholder="Enter Keyword">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-4">
                                                    <div class="mt-3 mt-md-0">
                                                        <div class="bootselect-multiselect">
                                                            <select class="selectpicker">
                                                                <option>type</option>
                                                                <option value="Apartments">Apartments</option>
                                                                <option value="Bungalow">Bungalow</option>
                                                                <option value="Houses">Houses</option>
                                                                <option value="Loft">Loft</option>
                                                                <option value="Office">Office</option>
                                                                <option value="TownHome">TownHome</option>
                                                                <option value="Villa">Villa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pe-0">
                                                    <div
                                                        class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                                                        <button class="advance-search-btn" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><span
                                                                class="flaticon-settings"></span> Advanced</button>
                                                        <button class="advance-search-icon ud-btn btn-thm ms-4"
                                                            type="button"><span class="flaticon-search"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-md-flex animate-up-3">
                                <p class="hero-text fz15 me-2">Popular Searches:</p>
                                <a href="#"> House,</a>
                                <a href="#"> Apartments,</a>
                                <a href="#"> Office,</a>
                                <a href="#"> Villa,</a>
                                <a href="#"> Bungalow</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block">
                        <div class="home3-img-box1">
                            <img class="img-1" src="images/about/about-3.png" alt="">
                            <img class="img-2 spin-right" src="images/about/element-3.png" alt="">
                            <img class="img-3 spin-right" src="images/about/element-3.png" alt="">
                            <img class="img-4 default-box-shadow1 bounce-y" src="images/about/about-1.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <section class="our-partners bgc-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp">
                    <div class="main-title text-center">
                        <h6>Trusted by the world’s best</h6>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp"
                        data-wow-delay="300ms">
                        <div class="item">
                            <div class="partner_item"><img class="wa m-auto" src="images/partners/1.png" alt="1.png">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner_item"><img class="wa m-auto" src="images/partners/2.png" alt="2.png">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner_item"><img class="wa m-auto" src="images/partners/3.png" alt="3.png">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner_item"><img class="wa m-auto" src="images/partners/4.png" alt="4.png">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner_item"><img class="wa m-auto" src="images/partners/5.png" alt="5.png">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner_item"><img class="wa m-auto" src="images/partners/6.png" alt="6.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pt-0 pb70 pb30-md">
        <div class="container">
            <div class="row align-items-md-center wow fadeInUp" data-wow-delay="00ms">
                <div class="col-lg-9">
                    <div class="main-title2">
                        <h2 class="title">Properties by Cities</h2>
                        <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-start text-lg-end mb-3">
                        <a class="ud-btn2" href="#">See All Properties<i
                                class="fal fa-arrow-right-long dark-color"></i></a>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-1.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">New York</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-2.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">Chicago</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-3.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">Manhattan</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-4.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">San Diego</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-5.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">San Francisco</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-6.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">Los Angeles</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-7.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">California</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="page-property-single-v1.html">
                        <div class="position-relative mb50 mb20-md d-flex align-items-center">
                            <div class="city-img flex-shrink-0"><img src="images/listings/cp-s-8.png" alt="">
                            </div>
                            <div class="flex-shrink-1 ms-3">
                                <h6 class="mb-1">New Jersey</h6>
                                <p class="mb-0">12 Properties</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Property -->
    <section class="pb90 pb30-md pt-0">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="00ms">
                <div class="col-lg-9">
                    <div class="main-title2">
                        <h2 class="title">Discover Popular Properties</h2>
                        <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4">
                        <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">For Rent</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link me-0" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">For Sale</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-15.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                    Family Home</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-16.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in
                                                    Rego Park</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-17.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                    Hollywood Boulevard</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-10.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                    Hollywood Boulevard</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-11.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story
                                                    House for Rent</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-12.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office
                                                    Space</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-13.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green
                                                    Villa House</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-14.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa
                                                    House</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-15.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                    Family Home</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-16.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in
                                                    Rego Park</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-17.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                    Hollywood Boulevard</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-10.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                    Hollywood Boulevard</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-11.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story
                                                    House for Rent</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-12.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office
                                                    Space</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-13.jpg" alt="">
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green
                                                    Villa House</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="listing-style5">
                                        <div class="list-thumb">
                                            <img class="w-100" src="images/listings/g1-14.jpg" alt="">
                                            <div class="list-tag fz12"><span
                                                    class="flaticon-electricity me-2"></span>FEATURED</div>
                                            <div class="list-meta2">
                                                <a href="#"><span class="flaticon-like"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                                            <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa
                                                    House</a></h6>
                                            <p class="list-text">California City, CA, USA</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pb30-md bgc-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="main-title wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="title text-white">Explore Apartment Types</h2>
                        <p class="paragraph text-white">Get some Inspirations from 1800+ skills</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dots_nav_light navi_pagi_bottom_center slider-dib-sm slider-5-grid owl-carousel owl-theme wow fadeInUp"
                        data-wow-delay="300ms">
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-home"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Houses</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-corporation"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Apartments</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-network"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Office</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-garden"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Villa</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-chat"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Townhome</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-window"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Bungalow</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-bird-house"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Loft</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-garden"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Villa</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-chat"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Townhome</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-window"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Bungalow</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="page-property-single-v1.html">
                                <div class="iconbox-style1 dark-style">
                                    <span class="icon flaticon-bird-house"></span>
                                    <div class="iconbox-content">
                                        <h6 class="title">Loft</h6>
                                        <p class="text mb-0">22 Properties</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Chose Us -->
    <section>
        <div class="container">
            <div class="row align-items-md-center wow fadeInRight" data-wow-delay="300ms">
                <div class="col-md-6 col-lg-6">
                    <div class="position-relative mb30-md">
                        <img class="w-100" src="images/about/why-chose-1.png" alt="">
                        <a href="page-property-single-v1.html">
                            <div class="iconbox-style5 d-flex align-items-center">
                                <span class="icon flaticon-home flex-shrink-0"></span>
                                <div class="iconbox-content flex-shrink-1 ms-2">
                                    <p class="text mb-0">Total Rent</p>
                                    <h4 class="title mb-0">4,382 Unit</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInLeft" data-wow-delay="500ms">
                    <div class="main-title2">
                        <h2 class="title">Why Choose Us</h2>
                        <p class="paragraph fz15">As the complexity of buildings to increase, the <br
                                class="d-none d-lg-block"> field of architecture.</p>
                    </div>
                    <div class="why-chose-list">
                        <div class="list-one d-flex align-items-start mb30">
                            <span class="list-icon flex-shrink-0 flaticon-security"></span>
                            <div class="list-content flex-grow-1 ml20">
                                <h6 class="mb-1">Property Management</h6>
                                <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus
                                    ultricies auctor.</p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start mb30">
                            <span class="list-icon flex-shrink-0 flaticon-keywording"></span>
                            <div class="list-content flex-grow-1 ml20">
                                <h6 class="mb-1">Mortgage Services</h6>
                                <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus
                                    ultricies auctor.</p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start">
                            <span class="list-icon flex-shrink-0 flaticon-investment"></span>
                            <div class="list-content flex-grow-1 ml20">
                                <h6 class="mb-1">Currency Services</h6>
                                <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus
                                    ultricies auctor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pb30-md bgc-f7">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-lg-6 mb30-md wow fadeInUp" data-wow-delay="100ms">
                    <div class="main-title">
                        <h2 class="title">People Love Living with Realton</h2>
                        <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul class="ps-0 d-flex mb-0">
                                        <li>
                                            <div class="timer">80</div>
                                        </li>
                                        <li><span>%</span></li>
                                    </ul>
                                    <p class="text mb-0">Completed Property</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul class="ps-0 d-flex mb-0">
                                        <li>
                                            <div class="timer">99</div>
                                        </li>
                                        <li><span>%</span></li>
                                    </ul>
                                    <p class="text mb-0">Satisfied Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul class="ps-0 d-flex mb-0">
                                        <li>
                                            <div class="timer">50</div>
                                        </li>
                                        <li><span>%</span></li>
                                    </ul>
                                    <p class="text mb-0">Home ownership</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 offset-xl-2">
                    <div class="testimonial-slider2 navi_pagi_bottom_center slider-1-grid owl-carousel owl-theme wow fadeInUp"
                        data-wow-delay="300ms">
                        <div class="item">
                            <div class="testimonial-style1 position-relative mb25">
                                <div class="testimonial-content">
                                    <h5 class="title">Great Work</h5>
                                    <span class="icon fas fa-quote-left"></span>
                                    <p class="text">“Amazing design, easy to customize and a design quality superlative
                                        account on its cloud platform for the optimized performance. And we didn’t on our
                                        original designs.”</p>
                                    <div class="testimonial-review">
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                                <div class="thumb d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-1.png" alt="">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">Leslie Alexander</h6>
                                        <p class="mb-0">Nintendo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-style1 position-relative mb25">
                                <div class="testimonial-content">
                                    <h5 class="title">Great Work</h5>
                                    <span class="icon fas fa-quote-left"></span>
                                    <p class="text">“Amazing design, easy to customize and a design quality superlative
                                        account on its cloud platform for the optimized performance. And we didn’t on our
                                        original designs.”</p>
                                    <div class="testimonial-review">
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                                <div class="thumb d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-2.png" alt="">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">Floyd Miles</h6>
                                        <p class="mb-0">Bank of America</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-style1 position-relative mb25">
                                <div class="testimonial-content">
                                    <h5 class="title">Great Work</h5>
                                    <span class="icon fas fa-quote-left"></span>
                                    <p class="text">“Amazing design, easy to customize and a design quality superlative
                                        account on its cloud platform for the optimized performance. And we didn’t on our
                                        original designs.”</p>
                                    <div class="testimonial-review">
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                                <div class="thumb d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-3.png"
                                            alt="">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">Dianne Russell</h6>
                                        <p class="mb-0">Facebook</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-style1 position-relative mb25">
                                <div class="testimonial-content">
                                    <h5 class="title">Great Work</h5>
                                    <span class="icon fas fa-quote-left"></span>
                                    <p class="text">“Amazing design, easy to customize and a design quality superlative
                                        account on its cloud platform for the optimized performance. And we didn’t on our
                                        original designs.”</p>
                                    <div class="testimonial-review">
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                                <div class="thumb d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-3.png"
                                            alt="">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">Dianne Russell</h6>
                                        <p class="mb-0">Facebook</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 wow fadeInRight" data-wow-delay="00ms">
                    <div class="main-title mb40">
                        <h2 class="title">Real Estate Inquiry Form</h2>
                        <p class="paragraph fz15">As the complexity of buildings to increase</p>
                    </div>
                    <div class="inquiry-form mb30-md">
                        <form class="form-style1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb20">
                                        <label class="form-label fw600 dark-color">Inquiry Type</label>
                                        <div class="bootselect-multiselect">
                                            <select class="selectpicker" multiple>
                                                <option>Apartments</option>
                                                <option>Bungalow</option>
                                                <option>Houses</option>
                                                <option>Loft</option>
                                                <option>Office</option>
                                                <option>TownHome</option>
                                                <option>Villa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb20">
                                        <label class="form-label fw600 dark-color">Personel Role</label>
                                        <div class="bootselect-multiselect">
                                            <select class="selectpicker" multiple>
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Miss.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="mb20">
                                        <label class="form-label fw600 dark-color">Personel Name</label>
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb20">
                                        <label class="form-label fw600 dark-color">Email</label>
                                        <input type="email" class="form-control"
                                            placeholder="creativelayers088@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb20">
                                        <label class="form-label fw600 dark-color">How to address you</label>
                                        <div class="bootselect-multiselect">
                                            <select class="selectpicker" multiple>
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb20">
                                        <label class="form-label fw600 dark-color">Max Price</label>
                                        <input type="text" class="form-control" placeholder="$90">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb30">
                                        <label class="form-label fw600 dark-color">Min Size (Sq ft)</label>
                                        <input type="text" class="form-control" placeholder="20">
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="ud-btn btn-thm">Submit <i
                                            class="fal fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="inquiry-form">
                        <div class="inquiry-img"><img class="w-100" src="images/about/about-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Apartment -->
    <section class="mb35 mb0-md pb30-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="00ms">
                    <div class="main-title text-start text-md-center">
                        <h2 class="title">From Our Blog</h2>
                        <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                            <div class="date">
                                <span class="month">July</span>
                                <span class="day">28</span>
                            </div>
                            <a class="tag" href="#">Living Room</a>
                            <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing
                                    Openness</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                            <div class="date">
                                <span class="month">July</span>
                                <span class="day">28</span>
                            </div>
                            <a class="tag" href="#">Living Room</a>
                            <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing
                                    Openness</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                            <div class="date">
                                <span class="month">July</span>
                                <span class="day">28</span>
                            </div>
                            <a class="tag" href="#">Living Room</a>
                            <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing
                                    Openness</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta bgc-thm-light pt90 pb90 pt60-md pb60-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                    <div class="cta-style3">
                        <h2 class="cta-title">Become a Real Estate Agent</h2>
                        <p class="cta-text mb25">We only work with the best companies around the globe to survey</p>
                        <a href="page-contact.html" class="ud-btn btn-thm">Register Now <i
                                class="fal fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 offset-xl-2 d-none d-lg-block wow fadeIn" data-wow-delay="300ms">
                    <div class="cta-img">
                        <img src="images/about/cta-member-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
