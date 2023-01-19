@extends('website-creative-layout.layout')

@section('page-title','Creative Agency')

@section('body-class','page-Creative Agency')

@section('main-content')

   @include('website-creative-layout.hero-section')
 
   @include('website-bages.multipage-creative.section.about-us')

   <section class="service-area pt-90 pb-80">
   @include('website-bages.services.section.start-services')
   </section>

   @include('website-bages.multipage-creative.section.portfolio')

   @include('website-bages.multipage-creative.section.lets-work')

   <section class="counter-area counter-area-v1 pt-240 pb-90">
   @include('website-bages.services.section.statistics')
   </section>

   @include('website-bages.multipage-creative.section.testimonial')

   @include('website-bages.multipage-creative.section.meet-our-team')

   @include('website-bages.multipage-creative.section.contact')

   @include('website-bages.multipage-creative.section.blog')

@endsection