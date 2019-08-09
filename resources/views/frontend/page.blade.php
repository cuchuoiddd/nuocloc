@extends('layouts.frontend')

<!-- SEO -->
@section('title', isset($page) ? $page->title : '')
@section('meta-title')
@if(isset($page))
{{$page->metatitle}}
@endif
@endsection
@section('meta-description')
@if(isset($page))
{{$page->metadescription}}
@endif
@endsection

@section('content')
<section id="primary" class="content-area col-sm-7 col-md-9 wrap-page">

    <main id="main" class="site-main padding-page-default" role="main">
        @include('frontend.partials.page')
    </main><!-- #main -->

</section><!-- #primary -->
<div id="secondary" class="col-sm-5 col-md-3">
@include('frontend.partials.right-sidebar')
</div><!-- #secondary -->
@endsection