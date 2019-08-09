@extends('layouts.frontend')

<!-- SEO -->
@section('title', isset($mainCate) ? $mainCate->title : 'Danh mục sản phẩm')
@section('meta-title')
@if(isset($mainCate))
{{$mainCate->metatitle}}
@endif
@endsection
@section('meta-description')
@if(isset($mainCate))
{{$mainCate->metadescription}}
@endif
@endsection

@section('content')
<div id="secondary" class="col-sm-5 col-md-3">
@include('frontend.partials.left-sidebar')
</div><!-- #secondary -->
<section id="primary" class="content-area col-sm-7 col-md-9 wrap-page">

    <main id="main" class="site-main" role="main">
        @include('frontend.partials.products')
    </main><!-- #main -->

</section><!-- #primary -->
@endsection