@extends('website-layout.layout')

@section('page-title','Expert Team')

@section('body-class','page-Expert Team')

@section('main-content')

@include('website-shared.Startwithoutpicture-Page-banner', [
    'title' => 'Expert Team',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Expert Team']],
  ])

   <div class="skill-area skill-area-v2 pt-130 pb-80 position-relative z-1">
   @include('website-bages.services.section.skills')
   </div>

   @include('website-bages.our-team.section.meet-our-team')

   @include('website-bages.our-team.section.meet-our-team2')

  <section class="counter-area counter-area-v1 pt-130 pb-90">
   @include('website-bages.services.section.statistics')
  </section>
  
@endsection