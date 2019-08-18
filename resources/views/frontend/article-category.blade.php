@extends('layouts.frontend')

<!-- SEO -->
@section('title', 'Tin tức')
@section('meta-title')

@endsection
@section('meta-description')

@endsection


@section('content')
<section class="section2_news row">
    <div class="container">
        <div class="block2 article-w">
            <div class="title-tab">
                <a href="index.html" class="active">Tin tức</a><span class="line">|</span><a href="../su-kien/index.html" class="">Sự kiện</a>                    </div>
                                    <div class="row">
                                            <div class="col-md-4 col-sm-6 item">
                        <a href="{{url('tin-tuc/demo')}}">
                                                                    <img class="cover" src="../../../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/e5a/e5a52f48fcc00f4978f97e109d5185dc/fed9a2727363782a7e366a918b37b5ff.jpg" alt="">
                                                            </a>
                        <div class="wrap-content">
                            <a class="name" href="{{url('tin-tuc/demo')}}">Công bố sản phẩm: NƯỚC UỐNG ĐÓNG CHAI CHỨA KHOÁNG THIÊN NHIÊN VĨNH HẢO KHÔNG GA-Số 71/2016/ATTPBTh-TNCB - ...</a>
                            <div class="date">31/05/2019</div>
                        </div>
                    </div>
                                                <div class="col-md-4 col-sm-6 item">
                        <a href="{{url('tin-tuc/demo')}}">
                                                                    <img class="cover" src="../../../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/eb8/eb805944b00de961e181b53afba0b4e9/eb99268e3f290026c7354293b2b6e91f.jpg" alt="">
                                                            </a>
                        <div class="wrap-content">
                            <a class="name" href="{{url('tin-tuc/demo')}}">Công bố sản phẩm: Nước Uống Đóng Chai Vihawa - số: 001/VHW/2018 - Thông báo lần 1 - ...</a>
                            <div class="date">02/05/2019</div>
                        </div>
                    </div>
                                                <div class="col-md-4 col-sm-6 item">
                        <a href="{{url('tin-tuc/demo')}}">
                                                                    <img class="cover" src="../../../vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/42d/42d59dca8ab185eeee46a9fdc43ab4ee/e3e5bbbee1865b9c5e4aef6ca578ad32.jpg" alt="">
                                                            </a>
                        <div class="wrap-content">
                            <a class="name" href="{{url('tin-tuc/demo')}}">Công bố sản phẩm: NƯỚC UỐNG ĐÓNG CHAI CHỨA KHOÁNG THIÊN NHIÊN VĨNH HẢO KHÔNG GA-Số 71/2016/ATTPBTh-TNCB - ...</a>
                            <div class="date">19/06/2018</div>
                        </div>
                    </div>
                                            </div>
                            </div>
                        <div class="paginate">
            <ul class="pagination"><li class="active"><a>1</a></li><li><a href="2/index.html">2</a></li><li><a href="3/index.html">3</a></li><li><a href="4/index.html">4</a></li><li><a href="2/index.html">Tiếp theo</a></li><li><a href="4/index.html">Cuối cùng</a></li></ul>                </div>
                    </div>
</section>
<div class="clear"></div>
@endsection