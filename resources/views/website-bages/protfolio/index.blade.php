@extends('website-layout.layout')

@section('page-title','Portfolio')

@section('body-class','page-portfolio')



@section('main-content')

  @include('website-shared.Start-Page-banner', [
    'title' => 'Projects',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Projects']],
    'breadcrumb' => 'assets/images/breadcrumb/img-3.jpg',
  ])

   

   @include('website-bages.protfolio.section.portfolio-section')


@endsection