@extends('website-digital-layout.layout2')

@section('page-title','Digital Agency')

@section('body-class','page-Digital Agency')

@section('main-content')

   @include('website-bages.multipage-digital.section.start-services')

   @include('website-bages.multipage-digital.section.start-about')

   @include('website-bages.multipage-digital.section.portfolio')

   @include('website-bages.multipage-digital.section.contant')

   @include('website-bages.multipage-digital.section.counter')

   @include('website-bages.multipage-digital.section.video-section')

   <section class="partners-area pt-120">
   @include('website-bages.about-us.section.partners')
   </section>

   @include('website-bages.multipage-digital.section.testimonial')

   @include('website-bages.multipage-digital.section.pricing')

   @include('website-bages.multipage-digital.section.blog')

   @include('website-bages.multipage-digital.section.cta')

@endsection

   

  


