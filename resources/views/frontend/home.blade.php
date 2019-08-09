@extends('layouts.frontend')

@php
    $settings = Helper::getSettings();
@endphp
@section('title',$settings->title)

@section('header')

    <header id="masthead" class="site-header row" role="banner">
        <!------ SLIDER --------->
        <div id="wrap_slider" class="col-md-9 col-sm-9">
            @php
                $slider = Helper::getSlide(false);
            @endphp
            @if(isset($slider))
            <div id="homeSlider" class="sp-slides-container">
                @foreach($slider as $item)
                <li data-thumb="{{url($item->image)}}" data-src="{{url($item->image)}}">
                    <a href="{{$item->url}}"><img src="{{url($item->image)}}" /></a>
                </li>
                @endforeach
            </div>
            @endif
        </div>
        <div id="image_right_slider" class="col-md-3 col-sm-3">
            @php
                $qc = Helper::getSlide(true);
            @endphp
            @if(isset($qc))
                <a title="" href="{{$qc->url}}"><img class="img-responsive" src="{{url($qc->image)}}"></a>
            @endif
        </div>
    </header>

@endsection
@section('content')
<!-- Chinh Sach(policy ) -->
@include('frontend.partials.features')
<div id="secondary" class="col-sm-5 col-md-3">
@include('frontend.partials.left-sidebar')
</div><!-- #secondary -->
<section id="primary" class="content-area col-sm-7 col-md-9 wrap-page">

    <main id="main" class="site-main" role="main">
        @include('frontend.partials.products')
    </main><!-- #main -->

</section><!-- #primary -->
@endsection
