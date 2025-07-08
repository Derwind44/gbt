<header class="header-section-2">
    <div class="header-top-section">
        <div class="container-fluid">
            <div class="header-top-wrapper">
                <div class="top-logo">
                    <a>
                        <img src="{{ asset('assets/img/logo/unnamed.png') }}" width="60" alt="img">
                    </a>
                </div>

                <div class="top-right absolute top-5 right-5 z-50 flex items-center gap-4">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <p>
                                    <a target="__blank" href="https://www.google.com/maps/place/GBT.+Bethlehem+Surabaya/@-7.3302057,112.720292,870m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2dd7fbbf132f492b:0x9e8a0383263da883!8m2!3d-7.3302057!4d112.7228669!16s%2Fg%2F11y26fbs27?entry=ttu&g_ep=EgoyMDI1MDYzMC4wIKXMDSoASAFQAw%3D%3D">
                                        Jl. Gayung Kebonsari Tengah No.9-11 <br> Gayungan, Surabaya
                                    </a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- <div class="top-right">
                    <ul>
                        <li>
                            <a href="#">Fb.</a>
                            <a href="#">X.</a>
                            <a href="#">Ins.</a>
                            <a href="#">Lin.</a>
                        </li>
                    </ul>
                    <a class='theme-btn' href='contact.html'>Plan With Us</a>
                </div> --}}
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-2">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo">
                        <a class='header-logo'>
                            <img src="{{ asset('assets/img/logo/unnamed.png') }}" width="70" alt="img">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown menu-thumb {{ Route::currentRouteName() === 'home' ? 'active text-black' : ''}}">
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>
                                    {{-- <li class="has-dropdown menu-thumb">
                                        <a href="{{ route('divisi') }}">
                                            Devisi
                                        </a>
                                    </li> --}}
                                    <li class="has-dropdown menu-thumb">
                                        <a href="{{ route('komunitas') }}">
                                            Komunitas
                                        </a>
                                    </li>
                                    <li class="has-dropdown menu-thumb {{ Route::currentRouteName() === 'contact' ? 'active text-black' : ''}}">
                                        <a href="{{ route('contact') }}">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="icon-items">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Contact Number : <a target="__blank" href="https://api.whatsapp.com/send/?phone=62817333977&text&type=phone_number&app_absent=0">0817333977</a>
                                </p>
                            </div>
                        </div>
                        <div class="header-right-bar">

                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fa-light fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
