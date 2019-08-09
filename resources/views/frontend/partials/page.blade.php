@if(isset($page))
<div class="wrap-single-content category-product">
    <h1 class="title-category-product">
        <a title="{{$page->title}}"
            href="{{url('/tin-tuc/'.$page['slug'])}}">{{$page->title}}</a>
    </h1>
    <div class="content-single">
        <p class="meta-date">Ngày đăng: {{$page->created_at}}</p>
        {!!$page->content!!}
    </div>
</div>
@endif