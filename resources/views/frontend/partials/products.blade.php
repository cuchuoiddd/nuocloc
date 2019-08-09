@if(isset($mainCate))
    @php
        $mainProducts = $mainCate->products->take(8);
    @endphp
    <div class="desc-cate-product">
        {!!$mainCate->content!!}
    </div>
@endif
@if(isset($categories) && count($categories))
    @if(isset($mainProducts) && count($mainProducts))
        <div class="category-product" id="category-Tủ Bếp">
            <h2 class="title-category-product">
                @if(isset($mainCate))
                <a title="{{$mainCate->title}}" href="{{url('danh-muc/san-pham/'.$mainCate->slug)}}">{{$mainCate->title}}</a>
                @endif
            </h2>
            <div class="row-product row">
                @foreach($mainProducts as $product)
                    @include('frontend.partials.product-grid-item')
                @endforeach
            </div>
        </div>
    @endif
    @foreach($categories as $category)
    @php
        $products = $category->allProducts();
    @endphp
        @if(isset($products) && count($products))
        <div class="category-product" id="category-Tủ Bếp">
            <h2 class="title-category-product">
                @if(isset($mainCate))
                <a title="{{$mainCate->title}}" href="{{url('danh-muc/san-pham/'.$mainCate->slug)}}">{{$mainCate->title}}</a> »
                @endif
                <a title="{{$category->title}}" href="{{url('danh-muc/san-pham/'.$category->slug)}}">{{$category->title}}</a>
            </h2>
            <div class="row-product row">
                @if(isset($products) && count($products))
                @foreach($products as $product)
                    @include('frontend.partials.product-grid-item')
                @endforeach
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a title="Xem thêm" href="{{url('danh-muc/san-pham/'.$category->slug)}}" class="btn btn-info btn-readmore pull-right">Xem
                        thêm...</a>
                </div>
                @endif
            </div>
        </div>
        @endif
    @endforeach
@else
<h4>
    Không có dữ liệu
</h4>
@endif