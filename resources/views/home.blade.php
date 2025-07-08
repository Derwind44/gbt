@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section hero-2 fix bg-cover" style="background-image: url(assets/img/hero/images.jpg);">
    {{-- <div class="hero-shape">
        <img src="assets/img/hero/star.png" alt="img">
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                        GBT Bethlehem
                    </h1>
                    <span></span>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        Provide additional resources such as readings, articles, videos, or online tutorials for learners who want to explore the details further.Sit amet, consectetur adipiscing elit, sed do eiusmod. Sit amet, consectetur adipiscing elit.
                    </p>
                    {{-- <div class="arrow-image wow fadeInUp" data-wow-delay=".7s">
                        <img src="assets/img/hero/Arrow.png" alt="img">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Step Section Start -->
<section class="feature-step-section section-padding fix section-bg-2">
    <div class="container">
        <div class="section-title text-center">
            {{-- <span class="wow fadeInUp">steps to success</span> --}}
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                IBADAH UMUM
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="feature-step-items-2">
                    {{-- <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <g clip-path="url(#clip0_2545_69)">
                              <path d="M0.498035 17.604L28.794 31.7521C29.46 32.0821 30.54 32.0821 31.206 31.7521L59.502 17.604C60.168 17.268 60.168 16.728 59.502 16.398L31.206 2.25005C30.54 1.91405 29.46 1.91405 28.794 2.25005L0.498035 16.398C-0.167965 16.728 -0.167965 17.268 0.498035 17.604Z" fill="#1C1A1D"/>
                              <path opacity="0.4" d="M51.762 35.814L59.502 39.828C60.168 40.176 60.168 40.734 59.502 41.076L31.206 55.74C30.54 56.088 29.46 56.088 28.794 55.74L0.498035 41.076C-0.167965 40.734 -0.167965 40.176 0.498035 39.828L8.23804 35.82L28.602 46.368C29.37 46.77 30.624 46.77 31.392 46.368L51.762 35.814ZM51.762 24L59.502 28.014C60.168 28.356 60.168 28.914 59.502 29.262L31.206 43.926C30.54 44.268 29.46 44.268 28.794 43.926L0.498035 29.262C-0.167965 28.914 -0.167965 28.356 0.498035 28.014L8.23804 24L28.602 34.554C29.37 34.956 30.624 34.956 31.392 34.554L51.762 24Z" fill="#1C1A1D"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_2545_69">
                                <rect width="60" height="60" fill="white"/>
                              </clipPath>
                            </defs>
                        </svg>
                    </div> --}}
                    <div class="feature-step-content">
                        <h3>IBADAH PERTAMA</h3>
                        <div class="number">01</div>
                        <h4 class="mt-1">
                            Mulai Jam: <br> 06.30 - 08.30 WIB
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="feature-step-items-2">
                    {{-- <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <path d="M13.5364 29.4901L13.4524 28.8961C13.4284 28.8181 13.3864 28.7461 13.3264 28.6921C12.4744 27.8041 12.0124 26.6221 12.0304 25.3981C12.1384 22.9921 13.9864 21.0181 16.4104 20.7241L17.8984 20.5201C20.3044 20.1481 22.6324 21.5401 23.4064 23.8201C23.7664 24.9901 23.6524 26.2501 23.0884 27.3421C23.0464 27.4081 23.0224 27.4861 23.0224 27.5701L23.1064 28.1641C23.1184 28.2361 23.1604 28.3081 23.2204 28.3501C23.2804 28.3981 23.3584 28.4161 23.4364 28.4041L31.7644 27.2521L30.7264 19.9921C30.5584 18.7921 31.4044 17.6881 32.6224 17.5201L33.2284 17.4361C33.7024 17.3761 34.1824 17.4601 34.6024 17.6821C35.2624 18.0181 36.0304 18.0901 36.7444 17.8741C38.1424 17.3881 38.9884 15.9781 38.7364 14.5321L38.5264 13.0681C38.3644 11.6101 37.1584 10.4821 35.6764 10.3981C34.9324 10.3801 34.2124 10.6561 33.6724 11.1541C33.3304 11.4841 32.8924 11.7001 32.4184 11.7781L31.8124 11.8561C30.6004 12.0301 29.4724 11.1901 29.3044 9.99609L28.1344 1.78809L7.07445 4.70409C4.43445 5.07609 2.59245 7.48209 2.95845 10.0861L5.91645 30.8341L13.2904 29.8141C13.3684 29.8021 13.4344 29.7601 13.4824 29.7001C13.5304 29.6401 13.5484 29.5621 13.5364 29.4901Z" fill="#1C1A1D"/>
                            <path opacity="0.4" d="M17.0036 23.4539H18.5036C19.9916 23.4119 21.2876 24.4319 21.5816 25.8659C21.6836 26.4839 21.5696 27.1139 21.2636 27.6599L21.0956 27.9239C20.8736 28.2299 20.7296 28.5839 20.6756 28.9499L20.6516 29.2319V29.8319C20.6516 30.9659 21.5216 31.8959 22.6316 32.0099L22.8776 32.0219H31.2836V40.3139C31.2836 40.3919 31.2536 40.4639 31.1996 40.5179C31.1636 40.5539 31.1216 40.5779 31.0736 40.5899L30.9956 40.6019H30.3836C30.3296 40.5899 30.2816 40.5719 30.2336 40.5479L30.1676 40.5059C29.9096 40.3319 29.6396 40.1759 29.3576 40.0559C28.5176 39.6839 27.5816 39.5579 26.6696 39.7019C24.3836 40.1219 22.7036 42.0299 22.5896 44.2919L22.5836 44.6159V46.0979C22.5476 48.5039 24.2696 50.5799 26.6696 51.0179C27.7616 51.1859 28.8716 50.9759 29.8196 50.4359L30.1676 50.2139C30.2096 50.1839 30.2576 50.1539 30.3056 50.1359L30.3836 50.1179H30.9956C31.0736 50.1179 31.1456 50.1479 31.1996 50.2019C31.2356 50.2379 31.2656 50.2859 31.2776 50.3339L31.2836 50.4059V57.7379H10.0196C7.46359 57.7379 5.36959 55.7819 5.19559 53.3039L5.18359 52.9799V32.0219H12.6296C13.2176 32.0219 13.7816 31.7939 14.2016 31.3859C14.5616 31.0319 14.7836 30.5699 14.8376 30.0839L14.8556 29.8319V29.2319C14.8496 28.8539 14.7476 28.4879 14.5616 28.1639L14.4116 27.9239C13.9796 27.3299 13.8056 26.5919 13.9196 25.8659C14.1956 24.5219 15.3596 23.5379 16.7276 23.4599L17.0036 23.4539ZM33.2216 32.0219H40.6676C40.7936 32.0219 40.9016 32.1059 40.9436 32.2199L40.9556 32.3099V32.9099C40.9496 32.9639 40.9316 33.0179 40.9076 33.0599L40.8596 33.1259C40.1456 34.1279 39.8516 35.3639 40.0436 36.5759C40.4696 38.8259 42.4076 40.4759 44.7056 40.5899L45.0356 40.5959H46.5416C48.9776 40.6379 51.0836 38.9339 51.5276 36.5759C51.7196 35.3639 51.4316 34.1279 50.7176 33.1259C50.6816 33.0839 50.6576 33.0419 50.6396 32.9879L50.6216 32.9099V32.3099C50.6216 32.1839 50.6996 32.0759 50.8196 32.0399L50.9096 32.0219H59.3216V52.9799C59.3156 55.4939 57.3296 57.5579 54.8156 57.7259L54.4856 57.7379H33.2216V50.4059C33.2216 49.2779 32.3516 48.3479 31.2356 48.2279L30.9956 48.2159H30.3836C30.0056 48.2219 29.6276 48.3179 29.2976 48.4979L29.0576 48.6539C28.4516 49.0739 27.7016 49.2479 26.9636 49.1339C25.6016 48.8639 24.6056 47.7179 24.5216 46.3739V46.0979V44.6159C24.4736 43.1519 25.5116 41.8739 26.9636 41.5859C27.5936 41.4839 28.2356 41.5979 28.7876 41.8979L29.0576 42.0659C29.3636 42.2879 29.7236 42.4259 30.1016 42.4799L30.3836 42.5039H30.9956C32.1416 42.5039 33.0836 41.6459 33.2036 40.5479L33.2216 40.3079V32.0219Z" fill="#1C1A1D"/>
                        </svg>
                    </div> --}}
                    <div class="feature-step-content">
                        <h3>IBADAH <br> KEDUA</h3>
                        <div class="number">2</div>
                        <h4 class="mt-1">
                            Mulai Jam: <br> 09.30 - 11.30 WIB
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="feature-step-items-2">
                    {{-- <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <g clip-path="url(#clip0_2545_97)">
                              <path d="M5.81396 46.686C11.25 53.814 19.692 58.314 29.25 58.314C38.814 58.314 47.442 53.628 52.692 46.686L29.25 33.186L5.81396 46.686Z" fill="#1C1A1D"/>
                              <path opacity="0.4" d="M25.6921 0V27L2.25008 40.5C0.750076 36.936 7.59743e-05 33.186 7.59743e-05 29.064C-0.185924 14.064 11.0641 1.686 25.6921 0ZM33.0001 27V0C47.4421 1.686 58.6921 14.064 58.6921 29.064C58.6921 32.868 57.8881 36.36 56.7361 39.672L56.4421 40.5L33.0001 27Z" fill="#1C1A1D"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_2545_97">
                                <rect width="60" height="60" fill="white"/>
                              </clipPath>
                            </defs>
                        </svg>
                    </div> --}}
                    <div class="feature-step-content">
                        <h3>IBADAH <br> KETIGA</h3>
                        <div class="number">03</div>
                        <h4 class="mt-1">
                            Mulai Jam: <br> 16.00 - 18.00 WIB
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-button text-center mt-5 wow fadeInUp" data-wow-delay=".3s">
            <a class='theme-btn' href='https://www.youtube.com/@gbtbethlehemofficial' target="_blank"><span>Bergabung</span></a>
        </div>
    </div>
</section>

<!-- About Section -->
{{-- <section class="about-section-2 fix section-padding pt-0">
    <div class="shape">
        <img src="assets/img/about/shape-1.png" alt="img">
    </div>
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="about-thumb wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="assets/img/about/02.jpg" alt="img">
                        <div class="box-shape">
                            <img src="assets/img/about/box-shape.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">Sustained Success</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Helping your business find the path to growth.</h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".5s">At Herrington, we are a renowned global consulting firm committed to collaborating with business and societal leaders in overcoming their most critical challenges and seizing their greatest opportunities. Our achievements are rooted in fostering deep collaboration and cultivating a global. Aenean vel tempus mauris. Vestibulum vel vehicula purus, a lacinia nisi.</p>
                        <div class="author-area">
                            <a class='theme-btn wow fadeInUp' data-wow-delay='.3s' href='about.html'><span>More About Us</span></a>
                            <div class="author-image wow fadeInUp" data-wow-delay=".5s">
                                <img src="assets/img/about/author.png" alt="author-img">
                                <div class="content">
                                    <p>Marketing Coordinator</p>
                                    <h4>Wade Warren</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Services Section -->
{{-- <section class="feature-section section-padding fix header-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="feature-card-items">
                    <div class="circle-border">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4>Wel Listen</h4>
                        <p>
                            Company Axispro, a leading provider of innovative tech solutions
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-card-items">
                    <div class="circle-border">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4>Process Consulting</h4>
                        <p>
                            Company Axispro, a leading provider of innovative tech solutions
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-card-items">
                    <div class="circle-border">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4>Information Security</h4>
                        <p>
                            Company Axispro, a leading provider of innovative tech solutions
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="feature-card-items">
                    <div class="circle-border">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4>Quality Assurance</h4>
                        <p>
                            Company Axispro, a leading provider of innovative tech solutions
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Testimonials Section -->
{{-- <section class="testimonial-section section-padding fix pt-0">
    <div class="container">
        <div class="testimonial-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="testimonial-card-area style-2">
                        <div class="section-title">
                            <span class="wow fadeInUp">Testimonial</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                What Our Customers Say?
                            </h2>
                        </div>
                        <div class="swiper testimonial-active mt-4 mt-md-0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card-items-2">
                                        <div class="info-item">
                                            <div class="image">
                                                <img src="assets/img/testimonial/client-1.png" alt="img">
                                            </div>
                                            <div class="info-content">
                                                <div class="content">
                                                    <h6>Guy Hawkins</h6>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <span>Director, Radical Orange Ply Ltd.</span>
                                            </div>
                                        </div>
                                        <p>
                                            "I've been working with this consulting firm for over two years now, and I can confidently say they've transformed our business operations. Their strategic insights and practical solutions have helped us navigate complex challenges and seize new opportunities."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-image">
                        <img src="assets/img/testimonial/01.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection

@push('styles')
<!-- Additional styles for this page -->
@endpush

@push('scripts')
<!-- Additional scripts for this page -->
@endpush
