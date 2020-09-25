@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>



    @yield('postContent')

<div class="row" id="imjo">
  <div class="cell" id="iftt">
    <img id="ihvb" src="//placehold.it/350x250/459ba8/fff/image2.jpg"/>
  </div>
  <div class="cell" id="isyr">
    <video allowfullscreen="allowfullscreen" id="i4c4" src="img/video2.webm" controls="controls">
    </video>
  </div>
  <div class="cell" id="id5q">
    <img id="ivb1" src="//placehold.it/350x250/459ba8/fff/image2.jpg"/>
  </div>
</div>


    <hr>

    @include('_partials.share')

  
@endsection
