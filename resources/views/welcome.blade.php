@extends('layouts.front')

@section('content')
<div class="col-12 col-lg-4 d-flex align-items-center">
                    <div class="side-footer text-white w-100">
                        <div class="menu-company-details">
                            <span>{{ $contact->phone1 }}</span>
                            <span>{{ $contact->phone2 }}</span>
                            <span>{{ $contact->email }}</span>
                        </div>
                        <ul class="social-icons-simple">
                            <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                            <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                        <p class="text-white">&copy; {{ now()->year }}. Hecho con <span style="color: red;">&#9829;</span> por <a href="javascript:void(0);">Tooring</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>
<!--Header End-->

<!--SLider sec start-->
<section class="slider-area cursor-light">
    <div class="bg-overlay"></div>
    <div class="container position-relative">
        <div class="inner-bg-overlay"></div>
        <div class="row">
            <div class="slider-detail col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".8s">
                @foreach ($banners as $banner)
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                            <h4 class="slide-heading text-uppercase">{{ $banner->title }}</h4>
                            <p class="slide-text">{{ $banner->subtitle }}</p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEER MÁS
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-img col-12 col-lg-6 wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                @foreach ($banners as $banner)
                    <div class="img-slide">
                        <img src="{{ asset('storage/'.$banner->banner) }}">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="slider-arrows">
            <a href="javascript:void(0);" class="slider-arr slider-arr-up link" id="slider-arr-up"><i class="fas fa-angle-up"></i></a>
            <a href="javascript:void(0);" class="slider-arr slider-arr-down link" id="slider-arr-down"><i class="fas fa-angle-down"></i></a>
        </div>
    </div>
    <div class="slider-icons">
        <ul class="slider-social banner-social">
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-facebook-f"></i> </a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-twitter"></i>  </a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-linkedin"></i> </a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-instagram"></i> </a></li>
        </ul>
    </div>
</section>
<!--SLider sec End-->

<!--About sec start-->
<section class="about-sec" id="about-sec">
    <div class="about-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                <div class="purple-overlay"></div>
                <div class="row no-gutters wow fadeInLeft">
                    <div class="col-6 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-stats-up"></i></a>
                            </div>
                            <h4 class="card-heading">Deuda</h4>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-handshake"></i></a>
                            </div>
                                <h4 class="card-heading">M&A</h4>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-invest-monitor"></i></a>
                            </div>
                                <h4 class="card-heading">FX & IR</h4>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-investment"></i></a>
                            </div>
                            <h4 class="card-heading">Capital</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left">
                <div class="about-content wow fadeInRight">
                    <div class="about-inner-content">
                        <h4 class="heading text-uppercase">{{ $about->h4 }}<span class="text-yellow" style="display:inline-block">{{ $about->span}}</span></h4>
                        <p class="text">
                            {{ $about->p1 }}
                        </p>
                        <p class="text">
                            {{ $about->p2 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About sec End-->

<!--Stats sec start-->
<section class="stats-sec padding-top padding-bottom" id="stats-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 stats-heading-area">
                <h4 class="heading text-uppercase text-center wow fadeIndown">Nuestros servicios</h4>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-12 services pt-4" >
                            <h4 class="darkcolor py-4 text-center wow fadeInLeft">{{ $service->h4 }} <span style="color: #ff9c07">{{ $service->span }}</span></h4>
                            <div class="row">
                                <div class="col-lg-6 wow fadeInLeft px-4 px-lg-auto">
                                    <span class="sub-heading-text"><span class="pr-2 li">►</span>{{ $service->service1 }}</span>
                                    <span class="sub-heading-text"><span class="pr-2 li">►</span>{{ $service->service2 }}</span>
                                    <span class="sub-heading-text"><span class="pr-2 li">►</span>{{ $service->service3 }}</span>
                                </div>
                                <div class="col-lg-6 wow fadeInRight px-4 px-lg-auto">
                                    <span class="sub-heading-text"><span class="pr-2 li">►</span>{{ $service->service4 }}</span>
                                    <span class="sub-heading-text"><span class="pr-2 li">►</span>{{ $service->service5 }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 services pt-4" id="asesoria">
                        <h4 class="darkcolor py-4 wow fadeInLeft text-center"><span style="color: #ff9c07">ASESORAMIENTO</span> EN</h4>
                        <div class="row text-center">
                            @foreach ( $advisories as $advisory )                 
                                <div class="col-12 col-lg-6 card-icons pb-3">
                                    <div class="service-card wow fadeInLeft">
                                        <div class="icon-holder">
                                            @foreach ($icons as $icono)
                                                @if ($advisory->icon_id == $icono->id)
                                                    <i class="lni {{ $icono->icon }}"></i>
                                                @endif
                                            @endforeach
                                        </div>
                                    <h4 class="card-heading pb-3 wow fadeInRight">{{ $advisory->subh4 }}</h4>
                                    <p class="text-dark text-left sub-heading-text wow fadeInLeft px-2 px-lg-auto">{{ $advisory->p1 }}</p>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="col-12 col-lg-6 wow fadeInRight card-icons pb-3">
                                <div class="service-card">
                                    <div class="icon-holder">
                                    <i class="lni lni-stats-up"></i>
                                </div>
                                <h4 class="card-heading pb-3">DEUDA</h4>
                                <p class="text-dark text-left sub-heading-text">Brindamos un servicio integral para el levantamiento de recursos a través de colocaciones de capital, mezzanine, instrumentos convertibles, crédito preferente deuda subordinada y otros instrumentos híbridos a nivel nacional e internacional.</p>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Stats sec End-->

<!--Team sec start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading">NUESTRO <span>EQUIPO</span></h4>
                    <p class="text">
                        Nuestro equipo cuenta con el conocimiento, la trayectoria y las relaciones necesarias para instrumentar cualquier financiamiento público o privado, así como para instrumentar cualquier transacción de fusión o adquisición (M&A).
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('bro-advisory/img/team1.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!--Team Social-->
                                        <ul class="team-social">
                                            <!-- <li><a class="facebook-text-hvr" href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter-text-hvr" href="javascript:void(0);">  <i class="fab fa-twitter"></i> </a></li> -->
                                            <li><a class="facebook-text-hvr" href="https://www.linkedin.com/in/andr%C3%A9s-romero-b064952b/"><i class="fab fa-linkedin"></i></a></li>
                                            <!-- <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Andrés Romero Arias</h4>
                                    <p class="team-designation">Partner | Banca de Inversión</p>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('bro-advisory/img/team4.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!--Team Social-->
                                        <ul class="team-social">
                                            <!-- <li><a class="facebook-text-hvr" href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter-text-hvr" href="javascript:void(0);">  <i class="fab fa-twitter"></i> </a></li> -->
                                            <li><a class="facebook-text-hvr" href="https://www.linkedin.com/in/mba-gerardo-lopez/"><i class="fab fa-linkedin"></i></a></li>
                                            <!-- <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Gerardo López Flores</h4>
                                    <p class="team-designation">Partner | Banca de Inversión</p>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('bro-advisory/img/team3.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!--Team Social-->
                                        <ul class="team-social">
                                            <!-- <li><a class="facebook-text-hvr" href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter-text-hvr" href="javascript:void(0);">  <i class="fab fa-twitter"></i> </a></li> -->
                                            <li><a class="facebook-text-hvr" href="https://www.linkedin.com/in/alejandro-bringas-155b6541/"><i class="fab fa-linkedin"></i></a></li>
                                            <!-- <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Alejandro Bringas Piña</h4>
                                    <p class="team-designation">Partner | FX & IR Derivatives</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:void(0);" class="team-nav team-prev" id="team-prev">
                        <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="javascript:void(0);" class="team-nav team-next" id="team-next">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team sec End-->


<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading">NUESTRA <span>EXPERIENCIA</span></h4>
                </div>
                <div class="col-md-12 pt-5">
                    <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item" style="margin-right: 6px;">TODAS</div>
                        <div data-filter=".tesoreria" class="cbp-filter-item" style="margin-right: 6px;">PRODUCTOS DE TESORERÍA</div>
                        <div data-filter=".inversion" class="cbp-filter-item" style="margin-right: 6px;">BANCA DE INVERSIÓN</div>
                        <div data-filter=".financiero" class="cbp-filter-item" style="margin-right: 6px;">ASESOR FINANCIERO</div>
                    </div>

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                        <div class="cbp-item tesoreria">
                            <a href="#asesor-financiero" class="scroll cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example4.jpeg') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">PRODUCTOS DE TESORERÍA</h4>
                                        <p class="p-hover-des">En los que hemos participado y cerrado</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item tesoreria">
                            <a href="#asesor-financiero" class="scroll cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example5.jpeg') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">PRODUCTOS DE TESORERÍA</h4>
                                        <p class="p-hover-des">En los que hemos valuado y cerrado</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item inversion">
                            <a href="#asesor-financiero" class="scroll cbp-caption " data-title="Workout Buddy<br>by Tiberiu Neamu">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example6.jpg') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">BANCA DE INVERSIÓN</h4>
                                        <p class="p-hover-des">En los que hemos estructurado y vendido</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item financiero">
                            <a href="#asesor-financiero" class="scroll cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example7.png') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">ASESOR FINANCIERO</h4>
                                        <p class="p-hover-des">Líder en la estructuración de financiamientos bursátiles</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->


<!--testimonial section start-->
{{--<div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
    <div class="right-overlay"></div>
    <div class="container">
        <div class="testimonial-area padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center text-center text-lg-left left-bg">
                        <div class="testimonial-details wow fadeInLeft">
                            <h4 class="heading">CLIENTES <span class="span">SATISFECHOS</span></h4>
                            <p class="text">
                                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <div class="testimonial-carousel wow fadeInRight">
                            <div class="testimonial-box owl-carousel owl-theme">
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                                    </p>
                                    <div class="img-holder">
                                        <img src="{{ asset('bro-advisory/img/bimbo.png') }}">
                                    </div>
                                    <h4 class="user-name">Grupo Bimbo</h4>
                                </div>
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                                    </p>
                                    <div class="img-holder">
                                        <img src="{{ asset('bro-advisory/img/bachoco.png') }}">
                                    </div>
                                    <h4 class="user-name">Bachoco</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--testimonial section end-->


<!--sponsers section start-->
<div class="sponser-sec padding-top" id="asesor-financiero">
    <div class="container">
        <div class="row text-center">
            @foreach ($clients as $client)
                <div class="col-12 py-1 wow fadeInRight text-center" >
                    <h4 class="heading-title pb-2">{{$client->h4}} <span class="text-yellow">{{ $client->span }}</span> {{ $client->h4_2}}</h4>
                    <div class="sponser-tags owl-carousel owl-theme">
                        @foreach ($images as $img)
                            @if($client->id == $img->client_id)
                                <div class="item">
                                    <div class="content-img">
                                        <div class="img_div">
                                            <img class="img_gray" src="{{ asset('storage/'.$img->image) }}">
                                        </div>
                                        <div class="txt_div">
                                            <div class="txt_hover">
                                                <p class="sub_title"> {{ $img->name }} </p>
                                                <p class="sub_title blue">{{ $img->text }}</p>
                                                <p class="sub_years">{{ $img->year }}</p>
                                                <p class="sub_title black">{{ $img->money }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--sponsers section end-->


<!--Blogs section start-->
<!-- <section class="blog-sec" id="blog-sec">
    <div class="left-overlay"></div>
    <div class="container position-relative">
        <div class="blog-inner-overlay"></div>
        <div class="row blog-area">
            <div class="col-12 col-lg-5 d-flex align-items-center text-center text-lg-left">
                <div class="blog-detail wow fadeInLeft">
                    <h4 class="heading text-black text-uppercase">ÚLTIMAS <span>ENTRADAS DE BLOG</span></h4>
                    <p class="text text-black">
                        Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                    </p>
                    <a class="btn anim-btn rounded-pill" href="architect-studio/standard-blog.html">LEER MÁS
                    <span></span><span></span><span></span><span></span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="blog-img wow fadeInRight">
                    <img src="{{ asset('bro-advisory/img/example8.jpg') }}" alt="blog-img">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Blogs section end-->


<!--Contact section start-->
<section class="contact-sec padding-top padding-bottom" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h4 class="heading text-center text-lg-left text-uppercase">Contáctanos</h4>
                <form class="row contact-form wow fadeInLeft" id="contact-form-data">
                    <div class="col-sm-12" id="result"></div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="userName" placeholder="Nombre" class="form-control">
                        <input type="email" name="userEmail" placeholder="Email*" class="form-control">
                        <input type="text" name="userSubject" placeholder="Asunto" class="form-control">
                    </div>
                    <div class="col-12 col-md-7">
                        <textarea class="form-control" name="userMessage" rows="6" placeholder="Tu Mensaje"></textarea>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn yellow-btn rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> Enviar Mensaje
                            <span></span><span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                <div class="contact-details wow fadeInRight">
                    <h4 class="heading text-uppercase">{{ $contact->h4 }}</h4>
                    <!-- <p class="text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered .
                    </p> -->
                    <ul>
                        <li style="width: 100% !important;"><i class="lni lni-map-marker addr"></i>{{ $contact->corporate }} <br> {{ $contact->address }}</li>
                        <li><i class="lni lni-phone"></i>
                        <span>{{ $contact->phone1 }}</span>
                        <span>{{ $contact->phone2 }}</span>
                        </li>
                        <li><i class="lni lni-envelope"></i>{{ $contact->email }}</li>
                    </ul>
                </div>
                <img src="{{ asset('bro-advisory/img/contact-background.png') }}" class="contact-background" alt="contact">
            </div>
        </div>
    </div>
</section>
<!--Contact section end-->

@endsection
