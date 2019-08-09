@if(isset($product))
<div class="box-product col-xs-6 col-md-3 col-sm-6 col-lg-3 text-center">
    <div class="wrap-content-product thumbnail">
        <a title="{{$product['title']}}" href="{{url('san-pham/'.$product['slug'])}}">
            @php
            $images = json_decode($product['images']);
            @endphp
            @if(isset($images[0]))
            <img width="200" height="160" src="{{url($images[0]->url)}}" alt="{{$images[0]->alt}}"
                class="attachment-thumbnail size-thumbnail wp-post-image">
            @else
            <img width="200" height="160" src="{{url('/images/product/noimage.png')}}" alt="{{$product['title']}}"
                class="attachment-thumbnail size-thumbnail wp-post-image">
            @endif
        </a>
        <div class="caption">
            <h3 class="product-title">
                <a title="{{$product['title']}}" href="{{url('san-pham/'.$product['slug'])}}">{{$product['title']}}</a>
            </h3>
            <p class="product-price text-center">{{$product['price']}}đ</p>
        </div>
    </div>
</div>
@endif