@extends('layouts.frontend')

<!-- SEO -->
@section('title', 'Tin tức')
@section('meta-title')

@endsection
@section('meta-description')

@endsection


@section('content')
<section id="primary" class="content-area col-sm-7 col-md-9 wrap-page">

    <main id="main" class="site-main padding-page-default" role="main">
        @include('frontend.partials.articles')
    </main><!-- #main -->

</section><!-- #primary -->
<div id="secondary" class="col-sm-5 col-md-3">
    @include('frontend.partials.right-sidebar')
</div><!-- #secondary -->
@endsection