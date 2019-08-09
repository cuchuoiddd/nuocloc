@if(isset($article))
<div class="wrap-single-content category-product">
    <h1 class="title-category-product">
        <a title="{{$article->title}}"
            href="{{url('/tin-tuc/'.$article['slug'])}}">{{$article->title}}</a>
    </h1>
    <div class="content-single">
        <p class="meta-date">Ngày đăng: {{$article->created_at}}</p>
        {!!$article->content!!}
    </div>
</div>
<div class="relate_post">
    @php
        $related_articles = $article->related(5);
    @endphp
    <h4 class="relate_post-title">Các tin khác:</h4>
    <ul>
        @foreach($related_articles as $article)
        <li><a href="{{url('/tin-tuc/'.$article['slug'])}}">{{$article->title}}</a></li>
        @endforeach
    </ul>
</div>
@endif