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
@isset($categories)
    @foreach ($categories as $k => $category)
        @php
            $topClass = $k==0 ? 'section-top' : '';
            $products = $category->allProducts();
        @endphp
        <section class="section{{$k+1}}_prolist {{$topClass}}">
            <div class="container">
                <h2 class="title-main">{{$category->title}}</h2>
                <div class="slider-product-listing" id="slider{{$k+1}}_product">
                @isset($products)
                    @foreach ($products as $product)
                    <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/232/2329d0ccb948e8129aec1d24a1f83a39.png" alt="" style="padding-top:47px">
                        </div>
                        <div class="des">{{ Helper::truncate($product['description'],100) }}</div>
                        <p class="ml">{{$product['the_tich']}}</p>
                    </div>
                    @endforeach
                @endisset
                                                                        
            </div>
            <div class="title-opacity">Untouched water</div>
        </section>
        <div class="clear"></div>
    @endforeach
@endisset
@endsection