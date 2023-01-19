@extends('website-layout.layout')

@section('page-title','Portfolio-details')

@section('body-class','page-portfolio_det')



@section('main-content')

  @include('website-shared.Start-Page-banner', [
    'title' => 'ProjectsDetails',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'ProjectsDetails']],
    'breadcrumb' => 'assets/images/breadcrumb/img-3.jpg',
  ])

   

   @include('website-bages.portfolio-details.section.portfolio-details')


@endsection