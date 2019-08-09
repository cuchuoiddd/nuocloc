<div class="productcatewidgets-sidebar-row row">
    <aside id="productcatewidgets-sidebar-1" class="sidebar widget col-sm-12">
        <aside id="menu_widget_id-12" class="widget menu_widget_class">
            <h3 class="widget-title-menu">Danh mục sản phẩm</h3>
            @php
                $categories = App\Category::getCategories()
            @endphp
            @if(isset($categories) && count($categories))
            <ul id="menu">
                @foreach($categories as $category)
                <li class="wrap-menu1">
                    <div class="parent_menu block_menu">
                        <a class="icon1" href="#"><span class="glyphicon glyphicon-triangle-bottom"
                                aria-hidden="true"></span></a>
                        <a title="{{$category->title}}" href="{{url('danh-muc/san-pham/'.$category->slug)}}" class="item_name item_parent cate-3">{{$category->title}}</a>
                    </div>
                    @if(isset($category->categories) && count($category->categories))
                    <ul class="menu1 collapse in">
                        @foreach($category->categories as $child1Category)
                        <li class="wrap-menu2">
                            <div class="parent_menu block_menu">
                                <a class="icon2" href="#"><span class="glyphicon glyphicon-menu-right"
                                        aria-hidden="true"></span></a>
                                <a title="{{$child1Category->title}}" href="{{url('danh-muc/san-pham/'.$child1Category->slug)}}"
                                    class="item_name cate-4">{{$child1Category->title}}</a>
                            </div>
                            @if(isset($child1Category->categories) && count($child1Category->categories))
                            <ul class="menu2 collapse in">
                                @foreach($child1Category->categories as $child2Category)
                                <li class="menu3 block_menu">
                                    <a title="{{$child2Category->title}}" class="item_name cate-5"
                                        href="{{url('danh-muc/san-pham/'.$child2Category->slug)}}"><span
                                            class="glyphicon glyphicon-stop" aria-hidden="true"></span>{{$child2Category->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </aside>
        <!-- <aside id="text-18" class="widget widget_text">
            <div class="textwidget"><a
                    href="http://www.dmca.com/Protection/Status.aspx?ID=0eb8df6e-63fd-4885-b468-c94e9f73d7b1"
                    title="DMCA.com Protection Status" class="dmca-badge"> <img
                        src="../../images.dmca.com/Badges/DMCA_badge_grn_60w1b15.png?ID=0eb8df6e-63fd-4885-b468-c94e9f73d7b1"
                        alt="DMCA.com Protection Status"></a>
                <script src="../../images.dmca.com/Badges/DMCABadgeHelper.min.zip"> </script>
            </div>
        </aside> -->
    </aside>
    @include('frontend.partials.articles-sidebar')
</div><!-- .row -->