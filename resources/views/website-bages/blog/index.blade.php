@extends('website-layout.layout')

@section('page-title','our blog')

@section('body-class','page-blogs')



@section('main-content')

  @include('website-shared.Startwithoutpicture-Page-banner', [
    'title' => 'BlogStandard',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'BlogStandard']],
    
  ])

   @include('website-bages.blog.section.blog')

  

@endsection