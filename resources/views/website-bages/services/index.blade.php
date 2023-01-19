@extends('website-layout.layout')

@section('page-title','Services')

@section('body-class','page-Services')



@section('main-content')

  @include('website-shared.Start-Page-banner', [
    'title' => 'Services',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Services']],
    'breadcrumb' => 'assets/images/breadcrumb/img-2.jpg',
  ])

   @include('website-bages.services.section.what-we-do')

   <section class="service-area service-area-v1 bototm-minus-200 position-relative z-2">

   @include('website-bages.services.section.start-services')
   </section>

   <div class="skill-area skill-area-v1 light-gray-bg pb-90 position-relative z-1">
   @include('website-bages.services.section.skills')
   </div>

   <section class="counter-area counter-area-v1 pt-130 pb-90">

   @include('website-bages.services.section.statistics')

   </section>

   @include('website-bages.services.section.pricing')

   @include('website-bages.services.section.latest-work')


@endsection