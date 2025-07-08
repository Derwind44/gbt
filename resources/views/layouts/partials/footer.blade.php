<footer class="footer-section pt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/unnamed.png') }}" width="70" alt="img">
                            </a>
                        </div>
                        <p>
                            GBT Bethlehem Surabaya adalah komunitas gereja yang melayani dengan kasih dan kebenaran Firman Tuhan.
                        </p>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Info</h4>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="footer-address-text">
                                        <p>Jl. Gayung Kebonsari Tengah No.9-11
                                            Gayungan, Surabaya</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="footer-address-text">
                                        <a href="https://api.whatsapp.com/send/?phone=62817333977&text&type=phone_number&app_absent=0" target="__blank"><p>0817333977</p></a>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="footer-address-icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="footer-address-text">
                                        <p>Minggu: 07.00 & 09.30 WIB</p>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="copyright-text">
                        <p>© {{ date('Y') }} GBT Bethlehem Surabaya. </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="copyright-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('komunitas') }}">Komunitas</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
