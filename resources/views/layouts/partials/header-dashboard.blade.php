<header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-start d-flex align-items-center">
                        <div class="dashboard_header_logo position-relative me-2 me-xl-5 text-center">
                            {{-- <a href="{{ route('admin.dashboard') }}" class="logo"><img
                                    src="{{ asset('./images/header-logo2.svg') }}" alt=""></a> --}}
                                <h1>T Dolphin</h1>
                        </div>
                        <div class="fz20 ms-2 ms-xl-5">
                            <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam"><img
                                    src="{{ asset('./images/dark-nav-icon.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-auto">
                    <!-- Responsive Menu Structure-->
                    {{-- <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li class="visible_list"> <a class="list-item" href="#"><span
                                    class="title">Home</span></a>
                            <!-- Level Two-->
                            <ul>
                                <li><a href="index-2.html">Home V1</a></li>
                                <li><a href="index2.html">Home V2</a></li>
                                <li><a href="index3.html">Home V3</a></li>
                                <li><a href="index4.html">Home V4</a></li>
                                <li><a href="index5.html">Home V5</a></li>
                                <li><a href="index6.html">Home V6</a></li>
                                <li><a href="index7.html">Home V7</a></li>
                                <li><a href="index8.html">Home V8</a></li>
                                <li><a href="index9.html">Home V9</a></li>
                                <li><a href="index10.html">Home V10</a></li>
                            </ul>
                        </li>
                        <li class="megamenu_style"> <a class="list-item" href="#"><span
                                    class="title">Listing</span></a>
                            <ul class="row dropdown-megamenu">
                                <li class="col mega_menu_list">
                                    <h4 class="title">Grid View</h4>
                                    <ul>
                                        <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                                        <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                                        <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                                        <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                                        <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                                        <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a>
                                        </li>
                                        <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a>
                                        </li>
                                        <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                                        <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
                                    </ul>
                                </li>
                                <li class="col mega_menu_list">
                                    <h4 class="title">Map Style</h4>
                                    <ul>
                                        <li><a href="page-property-header-map-style.html">Header Map Style</a>
                                        </li>
                                        <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                                        <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                                        <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                                        <li><a href="page-property-half-map-v4.html">Map V4</a></li>
                                    </ul>
                                </li>
                                <li class="col mega_menu_list">
                                    <h4 class="title">List View</h4>
                                    <ul>
                                        <li><a href="page-property-list.html">List v1</a></li>
                                        <li><a href="page-property-list-all.html">List All Style</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="visible_list"> <a class="list-item" href="#"><span
                                    class="title">Property</span></a>
                            <ul>
                                <li> <a href="#"><span class="title">Agents</span></a>
                                    <ul>
                                        <li><a href="page-agents.html">Agents</a></li>
                                        <li><a href="page-agent-single.html">Agent Single</a></li>
                                        <li><a href="page-agency.html">Agency</a></li>
                                        <li><a href="page-agency-single.html">Agency Single</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#"><span class="title">Dashboard</span></a>
                                    <ul>
                                        <li><a href="page-dashboard.html">Dashboard</a></li>
                                        <li><a href="page-dashboard-message.html">Message</a></li>
                                        <li><a href="page-dashboard-add-property.html">New Property</a></li>
                                        <li><a href="page-dashboard-properties.html">My Properties</a></li>
                                        <li><a href="page-dashboard-favorites.html">My Favorites</a></li>
                                        <li><a href="page-dashboard-savesearch.html">Saved Search</a></li>
                                        <li><a href="page-dashboard-review.html">Reviews</a></li>
                                        <li><a href="page-dashboard-package.html">My Package</a></li>
                                        <li><a href="page-dashboard-profile.html">My Profile</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#"><span class="title">Map Style</span></a>
                                    <ul>
                                        <li><a href="page-property-header-map-style.html">Header Map Style</a>
                                        </li>
                                        <li><a href="page-property-half-map-v1.html">Half Map Style v1</a></li>
                                        <li><a href="page-property-half-map-v2.html">Half Map Style v2</a></li>
                                        <li><a href="page-property-half-map-v3.html">Half Map Style v3</a></li>
                                        <li><a href="page-property-half-map-v4.html">Half Map Style v4</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#"><span class="title">Single Style</span></a>
                                    <ul>
                                        <li><a href="page-property-single-v1.html">Single V1</a></li>
                                        <li><a href="page-property-single-v2.html">Single V2</a></li>
                                        <li><a href="page-property-single-v3.html">Single V3</a></li>
                                        <li><a href="page-property-single-v4.html">Single V4</a></li>
                                        <li><a href="page-property-single-v5.html">Single V5</a></li>
                                        <li><a href="page-property-single-v6.html">Single V6</a></li>
                                        <li><a href="page-property-single-v7.html">Single V7</a></li>
                                        <li><a href="page-property-single-v8.html">Single V8</a></li>
                                        <li><a href="page-property-single-v9.html">Single V9</a></li>
                                        <li><a href="page-property-single-v10.html">Single V10</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="visible_list"> <a class="list-item" href="#"><span
                                    class="title">Blog</span></a>
                            <ul>
                                <li><a href="page-blog-v1.html">List V1</a></li>
                                <li><a href="page-blog-v2.html">List V2</a></li>
                                <li><a href="page-blog-v3.html">List V3</a></li>
                                <li><a href="page-blog-single.html">Single</a></li>
                            </ul>
                        </li>
                        <li class="visible_list"> <a class="list-item" href="#"><span
                                    class="title">Pages</span></a>
                            <ul>
                                <li><a href="page-about.html">About</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                                <li><a href="page-compare.html">Compare</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-faq.html">Faq</a></li>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-error.html">404</a></li>
                                <li><a href="page-invoice.html">Invoices</a></li>
                                <li><a href="page-ui-element.html">UI Elements</a></li>
                            </ul>
                        </li>
                    </ul> --}}
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-end header_right_widgets">
                        <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">
                            <li class="d-none d-sm-block"><a class="text-center mr15"
                                    href="#"><span class="flaticon-email"></span></a></li>
                            <li class="d-none d-sm-block"><a class="text-center mr20 notif"
                                    href="#"><span class="flaticon-bell"></span></a></li>
                            <li class=" user_setting">
                                <div class="dropdown">
                                    <a class="btn" href="#" data-bs-toggle="dropdown">
                                        <img src="{{ asset('./images/resource/user.png') }}" alt="user.png">
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="user_setting_content">
                                            {{-- <p class="fz15 fw400 ff-heading mb20">MAIN</p> --}}
                                            {{-- <a class="dropdown-item active" href=""><i
                                                    class="flaticon-discovery mr10"></i>Dashboard</a> --}}
                                            {{-- <a class="dropdown-item" href=""><i
                                                    class="flaticon-chat-1 mr10"></i>Message</a> --}}
                                            <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
                                            <a class="dropdown-item @if (Route::currentRouteName() == 'admin.products.create') -is-active @endif"
                                                href="{{ route('admin.products.create') }}"><i
                                                    class="flaticon-new-tab mr10"></i>Add New Property</a>
                                            <a class="dropdown-item @if (Route::currentRouteName() == 'admin.products.index') -is-active @endif" href="{{ route('admin.products.index') }}"><i
                                                    class="flaticon-home mr10"></i>My Properties</a>
                                            <a class="dropdown-item @if (Route::currentRouteName() == 'admin.users.index') -is-active @endif" href="{{ route('admin.users.index') }}" >
                                                <i class="flaticon-home mr10"></i>Registed User</a>
                                            {{-- <a class="dropdown-item" href="page-dashboard-favorites.html"><i
                                                    class="flaticon-like mr10"></i>My Favorites</a>
                                            <a class="dropdown-item" href="page-dashboard-savesearch.html"><i
                                                    class="flaticon-search-2 mr10"></i>Saved Search</a>
                                            <a class="dropdown-item" href="page-dashboard-review.html"><i
                                                    class="flaticon-review mr10"></i>Reviews</a> --}}
                                            <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
                                            {{-- <a class="dropdown-item" href="page-dashboard-package.html"><i
                                                    class="flaticon-protection mr10"></i>My Package</a> --}}
                                            {{-- <a class="dropdown-item" href=""><i
                                                    class="flaticon-user mr10"></i>My Profile</a> --}}
                                            <a class="dropdown-item" href="{{ route('logout') }}"><i
                                                    class="flaticon-exit mr10"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>