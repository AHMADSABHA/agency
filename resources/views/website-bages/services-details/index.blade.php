@extends('website-layout.layout')

@section('page-title','Service Details')

@section('body-class','page-Service Details')


@section('main-content')

 @include('website-shared.Start-Page-banner', [
    'title' => 'Service Details',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Service Details']],
    'breadcrumb' => 'assets/images/breadcrumb/img-2.jpg',
 ])

   @include('website-bages.services-details.section.features')

  

   @include('website-bages.services-details.section.process')

   @include('website-bages.services-details.section.working-module')

   @include('website-bages.services.section.latest-work')


@endsection