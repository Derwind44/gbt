<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href='{{ route("home") }}'>
                            <img src="{{ asset('assets/img/logo/unnamed.png') }}" width="70" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Selamat datang di GBT Bethlehem Surabaya. Kami adalah komunitas gereja yang melayani dengan kasih dan kebenaran Firman Tuhan.
                </p>
                <div class="mobile-menu fix mb-3">
                    <style>
                        .mobile-menu ul li.active a {
                            color: #B69974 !important;
                        }
                    </style>
                    <nav>
                        <ul style="list-style: none; padding-left: 0; margin-top: 40px;">
                            <li class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}} text" style="margin-bottom: 15px;">
                                <a href="{{ route('home') }}" style="color: #333; font-weight: 600; font-size: 16px; display: block;">Home</a>
                            </li>
                            <li class="{{ Route::currentRouteName() === 'komunitas' ? 'active' : ''}} text" style="margin-bottom: 15px;">
                                <a href="{{ route('komunitas') }}" style="color: #333; font-weight: 600; font-size: 16px; display: block;">Komunitas</a>
                            </li>
                            <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : ''}} text" style="margin-bottom: 15px;">
                                <a href="{{ route('contact') }}" style="color: #333; font-weight: 600; font-size: 16px; display: block;">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="https://www.google.com/maps/place/GBT.+Bethlehem+Surabaya/@-7.3302057,112.720292,870m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2dd7fbbf132f492b:0x9e8a0383263da883!8m2!3d-7.3302057!4d112.7228669!16s%2Fg%2F11y26fbs27?entry=ttu&g_ep=EgoyMDI1MDYzMC4wIKXMDSoASAFQAw%3D%3D">Jl. Gayung Kebonsari Tengah No.9-11, Gayungan, Surabaya</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:gbtbethlehem@gmail.com"><span class="mailto:gbtbethlehem@gmail.com">gbtbethlehem@gmail.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Minggu, 09:00 - 11:00 WIB</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="https://api.whatsapp.com/send/?phone=62817333977&text&type=phone_number&app_absent=0">0817333977</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a class='theme-btn' href='{{ route("contact") }}'>Daftar Sekarang</a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
