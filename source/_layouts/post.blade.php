@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>



    @yield('postContent')

    <hr>

    @include('_partials.share')

  
@endsection
