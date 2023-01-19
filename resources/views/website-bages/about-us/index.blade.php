@extends('website-layout.layout')

@section('page-title','About Us')

@section('body-class','page-About Us')

@section('main-content')

  <!--====== Start Page-banner section ======-->
  <section class="page-banner bg_cover position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="assets/images/shape/shape-1.png" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="assets/images/shape/shape-2.png" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="3"><img src="assets/images/shape/shape-3.png" alt=""></span></div>
    <div class="shape shape-four scene"><span data-depth="4"><img src="assets/images/shape/shape-2.png" alt=""></span></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>About Us</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img">
                    <img src="assets/images/breadcrumb/img-1.jpg" alt="">
                    <div class="play-content">
                        <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="video-popup"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-banner section ======-->

   @include('website-bages.about-us.section.about-us')

   @include('website-bages.about-us.section.stservices')

   @include('website-bages.about-us.section.how-we-are')

   @include('website-bages.about-us.section.meet-our-teem')

   @include('website-bages.about-us.section.testimonial')

   <section class="partners-area pt-125 pb-130">
   @include('website-bages.about-us.section.partners')
   </section>

@endsection