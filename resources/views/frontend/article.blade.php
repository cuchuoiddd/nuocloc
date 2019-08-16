@extends('layouts.frontend')

<!-- SEO -->
@section('title', isset($article) ? $article->title : '')
@section('meta-title')
@if(isset($article))
{{$article->metatitle}}
@endif
@endsection
@section('meta-description')
@if(isset($article))
{{$article->metadescription}}
@endif
@endsection

@section('content')
<section class="section1_newsdetail section-top">
    <div class="container">
        <div class="text-w">
            <h2 class="title-main">Công bố sản phẩm: NƯỚC GIẢI KHÁT CHỨA KHOÁNG THIÊN NHIÊN CÓ GA -LEMONA KHOÁNG CHANH-Số 62/2016/ATTPBTn-TNCB - Thông báo 1 - số 34/2018/TB-VHC</h2>
            <div class="date"><span>27/05/2018</span></div>
        </div>
        <div class="content-w">
            <div class="thumnail">
                <img src="#" alt="">
            </div>
            <div class="content">
                <div class="detail">
                    <a href="https://vinhhao-cms-production.s3-ap-southeast-1.amazonaws.com/iblock/a8b/a8b3ed45f2d4f5d1814afc0bafd145ea/f9d3b3153bfc1437da4d1ecf126f5799.pdf">Công bố sản phẩm: NƯỚC GIẢI KHÁT CHỨA KHOÁNG THIÊN NHIÊN CÓ GA -LEMONA KHOÁNG CHANH-Số 62/2016/ATTPBTn-TNCB&nbsp;- Thông báo 1 - số&nbsp;34/2018/TB-VHC</a>                            </div>
                <div class="share">
                    <p>Chia sẻ bài viết</p>
                                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.vinhhao.com.vn/tintuc-sukien/detail/c-ng-b-s-n-ph-m-n-c-gi-i-kh-t-ch-a-kho-ng-thi-n-nhi-n-c-ga-lemona-kho-ng-chanh-s-62-2016-attpbtn-tnc"
                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                   target="_blank" title="Share on Facebook">
                        <img src="../../bitrix/templates/vinhhao_140617/img/share_fb.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<!-- end-section -->
@include('frontend.partials.related-articles')
@endsection