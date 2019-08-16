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
<section class="section1_prolist section-top">
    <div class="container">
        <h2 class="title-main">Nước khoáng không ga tự nhiên</h2>
        <div class="slider-product-listing" id="slider1_product">
                                                            <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/232/2329d0ccb948e8129aec1d24a1f83a39.png" alt="" style="padding-top:47px">
                        </div>
                        <div class="des">
                            Nước uống đóng chai chứa khoáng thiên nhiên Vĩnh Hảo không ga                                </div>
                        <p class="ml">350ml</p>
                                                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/b4f/b4f8f1f394802c9b52d19d3fea1905bb.png" alt="" >
                        </div>
                        <div class="des">
                            Nước uống đóng chai chứa khoáng thiên nhiên Vĩnh Hảo không ga                                </div>
                        <p class="ml">500ml</p>
                                                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/e84/e8448f73b63fa7fbea540c8ad8308dcc.png" alt="" >
                        </div>
                        <div class="des">
                            Nước uống đóng chai chứa khoáng thiên nhiên Vĩnh Hảo không ga                                </div>
                        <p class="ml">1.5l</p>
                                                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/9b9/9b92a38864f990ae2b9c29b9c878cb97.png" alt="" >
                        </div>
                        <div class="des">
                            Nước uống đóng chai chứa khoáng thiên nhiên Vĩnh Hảo không ga                                </div>
                        <p class="ml">5l</p>
                                                                                    </div>
                                                                        </div>
    </div>
    <div class="title-opacity">Untouched water</div>
</section>
<div class="clear"></div>
    <section class="section2_prolist ">
    <div class="container">
        <h2 class="title-main">Bình 20 lít</h2>
        <div class="slider-product-listing" id="slider2_product">
                                                            <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/df8/df8a7d055ea649c95090638cc3e29140.png" alt="" >
                        </div>
                        <div class="des-bt">
                            Nước uống đóng chai chứa khoáng thiên nhiên Vĩnh Hảo không ga                                </div>
                        <p class="ml">20l</p>
                                                            <h3 class="name">Vĩnh Hảo - Bình Vòi</h3>
                                                                                            <div class="btn-primary btn-callwater"><a href="javascript:void(0)">Gọi nước</a></div>
                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/18d/18d62b09c8ff06b9a0d2d4ead88075e1.png" alt="" >
                        </div>
                        <div class="des-bt">
                            Nước uống đóng chai chứa khoáng thiên nhiên Vĩnh Hảo không ga                                </div>
                        <p class="ml">20l</p>
                                                            <h3 class="name">Vĩnh Hảo - Bình Úp</h3>
                                                                                            <div class="btn-primary btn-callwater"><a href="javascript:void(0)">Gọi nước</a></div>
                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/8a8/8a8b0c22dac89cbe942c4f6840c29806.png" alt="" >
                        </div>
                        <div class="des-bt">
                            Nước uống đóng chai Vihawa                                </div>
                        <p class="ml">20l</p>
                                                            <h3 class="name">Vihawa - Bình Vòi</h3>
                                                                                            <div class="btn-primary btn-callwater"><a href="javascript:void(0)">Gọi nước</a></div>
                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/343/3437ed1603aaa00cc45712c43c63f014.png" alt="" >
                        </div>
                        <div class="des-bt">
                            Nước uống đóng chai Vihawa                                </div>
                        <p class="ml">20l</p>
                                                            <h3 class="name">Vihawa - Bình Úp</h3>
                                                                                            <div class="btn-primary btn-callwater"><a href="javascript:void(0)">Gọi nước</a></div>
                                                    </div>
                                                                        </div>
    </div>
    <div class="title-opacity">Purified water</div>
</section>
<div class="clear"></div>
    <section class="section3_prolist ">
    <div class="container">
        <h2 class="title-main">Nước khoáng có ga</h2>
        <div class="slider-product-listing" id="slider3_product">
                                                            <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/34a/34a4ee81bb7dd59ca0cd870461abb952.png" alt="" >
                        </div>
                        <div class="des">
                            Nước khoáng thiên nhiên bổ sung ga - Vĩnh Hảo                                </div>
                        <p class="ml">450ml</p>
                                                            <h3 class="name">Nước khoáng chai thủy tinh</h3>
                                                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/08a/08a7cd7aa0145655b2fd7e34f36debdb.png" alt="" >
                        </div>
                        <div class="des">
                            Nước khoáng thiên nhiên bổ sung ga - Vĩnh Hảo                                </div>
                        <p class="ml">500ml</p>
                                                            <h3 class="name">Nước khoáng chai</h3>
                                                                                    </div>
                                                                        </div>
    </div>
    <div class="title-opacity">With gas</div>
</section>
<div class="clear"></div>
    <section class="section4_prolist ">
    <div class="container">
        <h2 class="title-main">Nước khoáng ngọt</h2>
        <div class="slider-product-listing" id="slider4_product">
                                                            <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/ddc/ddcb5ebe261011e68548fe31359bf4b8.png" alt="" >
                        </div>
                        <div class="des">
                            Nước giải khát chứa khoáng thiên nhiên có ga - Lemona khoáng chanh                                </div>
                        <p class="ml">350ml</p>
                                                            <h3 class="name">Lemona chanh muối</h3>
                                                                                    </div>
                                                                <div class="item">
                        <div class="img-w">
                            <img src="../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/ed3/ed3ca881b4b406e91a6fd2184f81ce32.png" alt="" >
                        </div>
                        <div class="des">
                            Nước giải khát chứa khoáng thiên nhiên có ga - Lemona khoáng chanh                                </div>
                        <p class="ml">500ml</p>
                                                            <h3 class="name">Lemona khoáng chanh</h3>
                                                                                    </div>
                                                                        </div>
    </div>
    <div class="title-opacity">With gas</div>
</section>
<div class="clear"></div>
@endsection