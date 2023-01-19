@extends('website-layout.layout')

@section('page-title','Contact Us')

@section('body-class','page-Contact Us')

@section('main-content')
  
  @include('website-shared.Startwithoutpicture-Page-banner', [
    'title' => 'Contact Us',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Contact Us']],
  ])
 
   @include('website-bages.contact.section.get-in-touch')

   @include('website-bages.contact.section.message-us')

@endsection