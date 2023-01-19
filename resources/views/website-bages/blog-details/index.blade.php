@extends('website-layout.layout')

@section('page-title','blog details')

@section('body-class','page-blogsetails')



@section('main-content')

  @include('website-shared.Startwithoutpicture-Page-banner', [
    'title' => 'Blog Details',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Blog Details']],
    
  ])

   @include('website-bages.blog-details.section.blog-details');

  

@endsection