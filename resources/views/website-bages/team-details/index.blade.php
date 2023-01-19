@extends('website-layout.layout')

@section('page-title','Team Details')

@section('body-class','page-Team Details')

@section('main-content')
  
  @include('website-shared.Startwithoutpicture-Page-banner', [
    'title' => 'Team Details',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Team Details']],
  ])
 
   @include('website-bages.team-details.section.team-details')

   @include('website-bages.team-details.section.skills')

@endsection