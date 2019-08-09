@if(isset($product))
<div id="product-image-slide" class="col-md-7 col-sm-12">
    @php
        $images = json_decode($product->images);
    @endphp
    @if(isset($images) && count($images))
    <div id="imageGallery">
        @foreach($images as $image)
        <li data-thumb="{{url($image->url)}}" data-src="{{url($image->url)}}">
            <img alt="{{$image->alt}}" src="{{url($image->url)}}" />
        </li>
        @endforeach
    </div>
    @endif
</div>
<div class="col-md-5 col-sm-12 product-info">
    <h1 id="product-title">{{$product->title}}</h1>
    <p class="code-color">Mã hàng: <span>{{$product->sku}}</span></p>
    <p class="price-color">Giá bán:
        <span>{{$product->price}} ₫ </span>
    </p>
    <p>
    </p>
    <p class="product-short-desc">Mô tả:
        <span>{{$product->description}}</span>
    </p>

    <div class="contact-phone">
        <ul>
            @foreach($phone->info as $p)
            <li>
                <a rel="nofollow" href="tel:+84902222945" title="{{$p->name}}">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    {{$p->name}}: <span class="hotline">{{$p->sdt}}</span>
                </a>
            </li>
            @endforeach
            <!-- <li>
                <a rel="nofollow" href="tel:+84917346883" title="Call Mr Nam">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    Mr Nam: <span class="hotline">0917.346.883</span>
                </a>
            </!-->
            <!-- <li>
                <a rel="nofollow" href="tel:+842432363456" title="Call cố định">
                    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                    Cố định: <span class="hotline">024.3236.3456</span>
                </a>
            </!-->
        </ul>
    </div>
</div>
<div class="col-sm-12 wrap-product-desc">
    <div class="product-desc-heading">Thông tin</div>
    <div class="product-desc-body">
        {!!$product->content!!}
    </div>
</div>

<!-- San Pham cung loai-->
@php 
    $category = $product->category;
    $products = $category->allProducts(5);
@endphp
<div class="col-sm-12 category-product" id="category-{{$category->title}}">
    <h2 class="title-category-product">
        <a title="Sản phẩm cùng loại" href="{{url('danh-muc/san-pham/'.$category->slug)}}">Sản phẩm cùng
            loại &gt;&gt;</a>
    </h2>
    <div class="row-product row">
        <!-- the loop -->
        @foreach($products as $p)
            @if($p['id'] != $product['id'])
                @include('frontend.partials.product-grid-item',['product' => $p])
            @endif
        @endforeach
        <!-- end of the loop -->
    </div>
</div>

<!-- DANH MỤC LIÊN QUAN -->
@php 
    $relatedCategory = $category->relatedCategory();
@endphp

@if(isset($relatedCategory) && count($relatedCategory))
<div class="col-sm-12 category-product" id="category">
    <h2 class="title-category-product">
        <span>Danh Mục liên quan</span>
    </h2>
    <div class="row-product row">
        @foreach($relatedCategory as $c)
            @if($c->id != $category->id)
            <div class="box-product col-xs-6 col-md-3 col-sm-6 col-lg-3 text-center">
                <div class="wrap-content-product thumbnail">
                    <h3 class="cate-title">
                        <a title="{{$c->title}}" href="{{url('/danh-muc/san-pham/'.$c->slug)}}">{{$c->title}}</a>
                    </h3>
                    <a title="{{$c->title}}" href="{{url('/danh-muc/san-pham/'.$c->slug)}}">
                        <img src="{{isset($c->image) ? url($c->image) : ''}}" alt="{{$c->title}}" title="{{$c->title}}">
                    </a>
                    <div class="caption">
                        <p class="cate-desc text-center">{{Helper::truncate($c['description'],100)}}</p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

    </div>
</div>
@endif

@endif