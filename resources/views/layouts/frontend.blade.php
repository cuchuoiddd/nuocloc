<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="title" content="@yield('meta-title')">
    <meta name="description" content="@yield('meta-description')">
    <link rel='stylesheet' id='tooltipster-css-css'
        href='{{url("wp-content/plugins/arscode-ninja-popups/tooltipster/tooltipster.bundle.minfe9d.css?ver=4.7.3")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='tooltipster-css-theme-css'
        href='{{url("wp-content/plugins/arscode-ninja-popups/tooltipster/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.minfe9d.css?ver=4.7.3")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='material-design-css-css'
        href='{{url("wp-content/plugins/arscode-ninja-popups/themes/jquery.material.formfe9d.css?ver=4.7.3")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='snp_styles_reset-css'
        href='{{url("wp-content/plugins/arscode-ninja-popups/themes/reset.minfe9d.css?ver=4.7.3")}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fancybox2-css'
        href='{{url("wp-content/plugins/arscode-ninja-popups/fancybox2/jquery.fancybox.minfe9d.css?ver=4.7.3")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='snp_styles_theme_image-css'
        href='{{url("wp-content/plugins/arscode-ninja-popups/themes/theme_image/stylefe9d.css?ver=4.7.3")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ris-slider-css-css'
        href='{{url("wp-content/plugins/ultimate-responsive-image-slider/css/slider-profe9d.css?ver=4.7.3")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='{{url("wp-content/themes/tubepthongminh/css/bootstrap.min8a54.css?ver=1.0.0")}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='alienship-style-css'
        href='{{url("wp-content/themes/tubepthongminh/style8a54.css?ver=1.0.0")}}' type='text/css' media='all' />
    <link rel='stylesheet' id='lightGallery-css'
        href='{{url("wp-content/plugins/lightslider/css/lightslider.min.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' id='Pushy-css' href='{{url("wp-content/themes/tubepthongminh/css/pushy8a54.css?ver=1.0.0")}}'
        type='text/css' media='all' />
    <script type='text/javascript' src='{{url("wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4")}}'></script>
    <script type='text/javascript' src='{{url("wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1")}}'></script>
    <script type='text/javascript' src='{{url("wp-content/plugins/lightslider/js/lightslider.min.js")}}'></script>
    <script type='text/javascript' src='{{url("wp-content/themes/tubepthongminh/js/pushy067c.js?ver=0.9.2")}}'></script>

    @php
    $settings = Helper::getSettings();
    $phone = json_decode($settings->phone);
    @endphp
</head>

<body class="home blog layout-default">
    <nav class="pushy pushy-left">
        <div class="navmenu" style="">
        @include('frontend.partials.left-sidebar')
        </div>
    </nav>

    <div class="site-overlay"></div>
    <div id="container">
        <!--Menu for mobile-->
        <header class="clearfix visible-xs">
            <div id="menubar_mobile" class="navbar navbar-default navbar-fixed-top" style="">
                <button id="toggle_bt_mobile" type="button" class="navbar-toggle pull-left menu-btn"
                    data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="index.html"><img id="logo_menu_mobile" src="{{url($settings->logo)}}" /></a>
                <div class="pull-right" style="width: 69%">
                    <div class="watchword pull-left replace_fr_search">
                        <div class="text">{{$settings->title}}</div>
                    </div>
                    <button class="replace_fr_search btn btn-default  search_bt_mobile  btn-sm pull-right" id="">
                        <span aria-hidden="true" class="glyphicon glyphicon-search"></span>
                    </button>
                    <span class="dropdown pull-right btn-call-mobile">
                        <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown"
                            style="height:30px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a title="0902 222 945 (HN)" href="tel:+84902222945">0902 222 945 (HN)</a></li>
                            <li><a title="0917.346.883 (HN)" href="tel:+84917346883">0917 346 883 (HN)</a></li>
                            <!-- <li><a title="0914 196 477 (Tp.HCM)" href="tel:+84914196487">0914 196 487 (Tp.HCM)</a></li> -->
                        </ul>
                    </span>
                    <!-- <form id="search_form_mobile" class="pull-left" role="search" action="http://tubepthongminh.com/"
                        method="get">
                        <div class="form-group input-group">
                            <input id="s" name="s" type="text" class="form-control input-sm"
                                placeholder="Nhập nội dung tìm kiếm..." value="">
                            <span class="input-group-btn">
                                <button id="" type="submit" name="submit" class="btn btn-default hidden">submit
                                </button>
                            </span>
                        </div>
                    </form> -->
                </div>
            </div>
        </header>

        <div id="margin_menu_mobile" class="visible-xs">

        </div>

        <!-- END menu for mobile-->

        <!-- Top Menu -->
        <div id="header" class="container">
            <div id="banner" class="row">
                <div id="logo" class="col-ms-3 col-sm-2">
                    <a href="{{url('/')}}">
                        <img alt="{{$settings->alt_logo}}" src="{{url($settings->logo)}}">
                    </a>
                </div>
                <div class="watchword col-sm-6">
                    <div class="banner">
                        <img alt="{{$settings->alt_banner}}" src="{{url($settings->image)}}" />
                    </div>
                </div>
                <div class="hotline col-ms-5  col-sm-4">
                    <div class="pull-right">

                        <div class="inner-info pull-right">
                            <!--                <span>Hotline</span>-->
                            <div class="mobi-img"><img
                                    src="{{url('wp-content/themes/tubepthongminh/img/ico_phone.png')}}" /></div>
                            <div class="contact-info pull-right">
                                <div class="contact-1">
                                    <!-- <div class="addr pull-left">HN</div> -->
                                    <div class="numbphone-list pull-right">
                                        @foreach($phone->info as $item)
                                        <span class="numbphone">{{$item->sdt}}</span> <br />
                                        @endforeach
                                        <!-- <span class="numbphone">0917 346 883</span> -->
                                    </div>
                                </div>
                                <!-- <div class="contact-2">
                                    <div class="addr pull-left">HCM</div>
                                    <div class="numbphone-list pull-right">
                                        <span class="numbphone">0914 196 487</span>
                                    </div>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main_menu" class="container">
            <nav id="menu_list" class="navbar navbar-default top-navigation " role="navigation" data-spy="affix"
                data-offset-top="0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <!-- <div class="home-icon">
                        <a rel="nofollow" href="index.html"><img
                                src="{{url('wp-content/themes/tubepthongminh/img/ico-home.png')}}" /></a> -->
                </div>
                <ul id="menu-main-menu" class="nav navbar-nav">
                    @php
                    $menu = Helper::getMenu('main-menu');
                    @endphp
                    @if(isset($menu))
                    @foreach($menu->items as $item)
                    <li id="menu-item-{{$item->id}}"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{$item->id}}">
                        <a title="{{$item->title}}" href="{{$item->url}}">{{$item->title}}</a>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- <form id="searchform" class="navbar-form navbar-right" role="search"
                        action="" method="get">
                        <div class="form-group input-group">
                            <input id="s" name="s" type="text" class="form-control" placeholder="Tìm kiếm..." value="">
                            <span class="input-group-btn">
                                <button id="" type="submit" name="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                    </form> -->

        </div>
        </nav>
    </div>
    <!-- End Top Menu -->
    <div id="page" class="container hfeed site">
        @yield('header')
        <div id="content" class="site-content row">
            @yield('content')
        </div>
    </div><!-- #page -->
    <div id="bg_footer" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="spotlight-wrap">
                    <div class="spotlight spotlight3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        @php
                        $menu = Helper::getMenu('footer-menu-1');
                        @endphp
                        @if(isset($menu))
                        <div class="block-title">{{$menu->title}}</div>
                        <div class="block-content">
                            <ul id="menu-menu-gioi-thieu-bottom-menu-1" class="">
                                @foreach($menu->items as $item)
                                <li id="menu-item-{{$item->id}}"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{$item->id}}">
                                    <a title="{{$item->title}}" href="{{$item->url}}">{{$item->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- .bottom-navigation -->
                        @endif
                    </div>
                    <div class="spotlight spotlight1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        @php
                        $menu = Helper::getMenu('footer-menu-2');
                        @endphp
                        @if(isset($menu))
                        <div class="block-title">{{$menu->title}}</div>
                        <div class="block-content">
                            <ul id="menu-menu-danh-muc-bottom-menu-2" class="">
                                @foreach($menu->items as $item)
                                <li id="menu-item-{{$item->id}}"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-danh-muc-san-pham menu-item-{{$item->id}}">
                                    <a title="{{$item->title}}" href="{{$item->url}}">{{$item->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- .bottom-navigation -->
                        @endif
                    </div>

                    <div class="spotlight spotlight4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="block-title">Showroom 1</div>
                        <ul class="block-content">
                            <li class="address">
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/Nội+thất+Hpro/@21.0138601,105.7955034,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x1d86d0292e4f6bee!8m2!3d21.0138601!4d105.7976921?hl=vi"><img
                                        src="{{url('wp-content/uploads/2018/08/showroom-hpro-trung-kinh-2.jpg')}}"></a>
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/Nội+thất+Hpro/@21.0138601,105.7955034,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x1d86d0292e4f6bee!8m2!3d21.0138601!4d105.7976921?hl=vi"
                                    class="inner">Đ/c: Số 17 Ngõ 40 phố Trung Kính - Cầu Giấy - HN</a>
                            </li>
                            <li class="email"><span class="ico-contactus">icon</span>
                                <div class="inner"><a rel="nofollow" title="noithathpro@gmail.com"
                                        href="mailto:noithathpro@gmail.com">noithathpro@gmail.com</a></div>
                            </li>

                            <li class="phone"><span class="ico-contactus">icon</span>
                                <div class="inner">
                                    Mr Hoàn: 0902.222.945<br>Mr Nam: 0917.346.883<br>Máy cố định: 024.3236.3456<br>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="spotlight spotlight4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="block-title">Showroom 2</div>
                        <ul class="block-content">
                            <li class="address">
                                <a target="_blank"
                                    href="https://www.google.com/maps?cid=7661180850095624489&amp;hl=vi"><img
                                        src="{{url('wp-content/uploads/2019/06/showroom-long-bien.jpg')}}"></a>
                                <a target="_blank" href="https://www.google.com/maps?cid=7661180850095624489&amp;hl=vi"
                                    class="inner">Đ/c: 509 Nguyễn Văn Cừ - Long Biên - Hà Nội</a>
                            </li>
                            <li class="email"><span class="ico-contactus">icon</span>
                                <div class="inner"><a rel="nofollow" title="hpro.longbien@gmail.com"
                                        href="mailto:hpro.longbien@gmail.com">hpro.longbien@gmail.com</a></div>
                            </li>

                            <li class="phone"><span class="ico-contactus">icon</span>
                                <div class="inner">
                                    Mr Dũng: 0915.568.933<br>Máy cố định: 024.3822.3456<br> </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-12">
                        <div class="spotlight spotlight4 pull-right col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="block-title">Showroom 3</div>
                            <ul class="block-content">
                                <li class="address">
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/Nội+Thất+Hpro+Quảng+Ninh/@21.0476114,104.7597257,8z/data=!4m8!1m2!2m1!1zbuG7mWkgdGjhuqV0IGhwcm8gcXXhuqNuZyBuaW5o!3m4!1s0x314a5940baeb94d3:0x1afd440bf9e3a8ea!8m2!3d20.952167!4d107.08066?hl=vi"><img
                                            src="{{url('wp-content/uploads/2019/04/showroom-hpro-ha-long-quang-ninh.jpg')}}"></a>
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/Nội+Thất+Hpro+Quảng+Ninh/@21.0476114,104.7597257,8z/data=!4m8!1m2!2m1!1zbuG7mWkgdGjhuqV0IGhwcm8gcXXhuqNuZyBuaW5o!3m4!1s0x314a5940baeb94d3:0x1afd440bf9e3a8ea!8m2!3d20.952167!4d107.08066?hl=vi"
                                        class="inner">Đ/c: 123 Đường 25/4 Tp. Hạ Long - Quảng Ninh </a>
                                </li>
                                <li class="email"><span class="ico-contactus">icon</span>
                                    <div class="inner"><a rel="nofollow" title="hpro.quangninh@gmail.com"
                                            href="mailto:hpro.quangninh@gmail.com">hpro.quangninh@gmail.com</a>
                                    </div>
                                </li>

                                <li class="phone"><span class="ico-contactus">icon</span>
                                    <div class="inner">
                                        094.170.6668<br>Máy cố định: 020.3361.3456<br> </div>
                                </li>
                            </ul>
                        </div>

                        <div class="spotlight spotlight4 pull-right col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="block-title">Showroom 4</div>
                            <ul class="block-content">
                                <li class="address">
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/Nội+Thất+Hpro+Phú+Thọ/@21.3095525,105.4022148,15z/data=!4m5!3m4!1s0x0:0xfd19c4f679220357!8m2!3d21.3095525!4d105.4022148"><img
                                            src="{{url('wp-content/uploads/2019/04/showroom-phu-tho-1.jpg')}}"></a>
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/Nội+Thất+Hpro+Phú+Thọ/@21.3095525,105.4022148,15z/data=!4m5!3m4!1s0x0:0xfd19c4f679220357!8m2!3d21.3095525!4d105.4022148"
                                        class="inner">Đ/c: 1328 Hùng Vương - Việt Trì - Phú Thọ</a>
                                </li>
                                <li class="email"><span class="ico-contactus">icon</span>
                                    <div class="inner"><a rel="nofollow" title="hpro.viettri@gmail.com"
                                            href="mailto:hpro.viettri@gmail.com">hpro.viettri@gmail.com</a></div>
                                </li>

                                <li class="phone"><span class="ico-contactus">icon</span>
                                    <div class="inner">
                                        0966.913.777<br>Máy cố định: 0210.38.23456<br> </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="spotlight col-xs-12 visible-xs">
                        <div class="block-title">Facebook Fanpage</div>
                        <div class="fb-page" data-href="https://www.facebook.com/NoiThatHpro/" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/NoiThatHpro/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/NoiThatHpro/">Nội thất Hpro</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer" id="colophon" role="contentinfo">

        <div class="container">
            <div class="row">

                <div class="bottom-navigation col-sm-6 col-sm-push-6">
                </div><!-- .bottom-navigation -->
                <div class="footer-text col-sm-6 col-sm-pull-6">
                    &copy; 2019 Tủ bếp thông minh </div><!-- .footer-text -->

            </div><!-- .row -->
        </div><!-- .container -->

    </footer><!-- #colophon -->
    </div>
    <script type='text/javascript' src='{{url("js/frontend.js")}}'></script>
</body>

</html>