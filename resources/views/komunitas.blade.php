@extends('layouts.app')

@section('title', 'Komunitas')

@section('content')

    <!-- Marquee Section Start -->
    <div class="marquee-section section-padding fix pb-0">
        <div class="mycustom-marque">
            <div class="scrolling-wrap gap-100">
                <div class="comm">
                    <div class="cmn-textslide textitalick text-custom-storke">Komunitas</div>
                    <div class="cmn-textslide textitalick text-custom-storke">GBT</div>
                    <div class="cmn-textslide textitalick text-custom-storke">Bethlehem</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide textitalick text-custom-storke">Komunitas</div>
                    <div class="cmn-textslide textitalick text-custom-storke">GBT</div>
                    <div class="cmn-textslide textitalick text-custom-storke">Bethlehem</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide textitalick text-custom-storke">Komunitas</div>
                    <div class="cmn-textslide textitalick text-custom-storke">GBT</div>
                    <div class="cmn-textslide textitalick text-custom-storke">Bethlehem</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="project-section-3 fix section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="project-card-items-2">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/komunitas/yobel.png') }}" alt="img"
                                style="object-fit: cover; height: 600px;">
                            <div class="project-content">
                                <h4>
                                    <a href='#'>Komunitas Yobel</a>
                                </h4>
                                <span></span>
                                <p>
                                    Komunitas pemuda dan remaja <br>
                                    di GBT Bethlehem.
                                </p>
                                <a class='icon' href='#'>
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="project-card-items-2">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/komunitas/xtion.png') }}" alt="img"
                                style="object-fit: cover; height: 600px;">
                            <div class="project-content">
                                <h4>
                                    <a href='#'>Komunitas Xtion</a>
                                </h4>
                                <span></span>
                                <p>
                                    Komunitas dewasa muda<br>
                                    di GBT Bethlehem.
                                </p>
                                <a class='icon' href='#'>
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="project-card-items-2">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/komunitas/hana.jpg') }}" alt="img"
                                style="object-fit: cover; height: 600px;">
                            <div class="project-content">
                                <h4>
                                    <a href='#'>Kaum Hana</a>
                                </h4>
                                <span></span>
                                <p>
                                    Komunitas wanita dan ibu-ibu <br>
                                    di GBT Bethlehem.
                                </p>
                                <a class='icon' href='#'>
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="project-card-items-2">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/komunitas/bapak.svg') }}" alt="img" style="height: 100%; object-fit: cover;">
                            <div class="project-content">
                                <h4>
                                    <a href='#'>Kaum Bapak</a>
                                </h4>
                                <span></span>
                                <p>
                                    Komunitas Pria dan Bapak <br>
                                    di GBT Bethlehem.
                                </p>
                                <a class='icon' href='#'>
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s"
                    style="object-fit: cover; height: 600px;">
                    <div class="project-card-items-2">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/komunitas/wk.png') }}" alt="img">
                            <div class="project-content">
                                <h4>
                                    <a href='#'>Komunitas Anak</a>
                                </h4>
                                <span></span>
                                <p>
                                    Komunitas anak dan sekolah minggu <br>
                                    di GBT Bethlehem.
                                </p>
                                <a class='icon' href='#'>
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s"
                    style="object-fit: cover; height: 600px;">
                    <div class="project-card-items-2">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/06.jpg') }}" alt="img">
                            <div class="project-content">
                                <h4>
                                    <a href='#'>Komunitas KEMAS</a>
                                </h4>
                                <span></span>
                                <p>
                                    Komunitas Keluarga Melayani Allah dan Sesama <br>
                                    di GBT Bethlehem.
                                </p>
                                <a class='icon' href='#'>
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>



    <!-- Cta Section Start -->
    <div class="cta-section bg-cover" style="background-image: url('{{ asset('assets/img/komunitas/footer.jpg') }}');">
        <div class="cta-shape">
            <img src="{{ asset('assets/img/cta-shape.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="cta-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-content wow fadeInUp"  data-wow-delay=".3s">
                            <h3 style="color: white">
                                Bergabunglah dengan komunitas kami dan bertumbuh bersama
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <!-- Additional styles for this page -->
@endpush

@push('scripts')
    <!-- Additional scripts for this page -->
@endpush
