<div class="category-product" id="category-Tin Tức">
    <h2 class="title-category-product">
        <a href="index.html">Tin Tức</a>
    </h2>
</div>
@if(isset($articles) && count($articles))

@if(isset($articles) && count($articles))
@foreach($articles as $article)
<div class="box-news media">
    <div class="box-news-image media-left">
        <a href="{{url('/tin-tuc/'.$article['slug'])}}">
            <img class="media-object img-articles" src="{{isset($article->image) ? url($article->image) : ''}}"
                alt="{{$article['title']}}"> </a> </div>
    <div class="box-news-excerpt media-body">
        <h4 class="media-heading">
            <a href="{{url('/tin-tuc/'.$article['slug'])}}">{{Helper::truncate($article['title'])}}</a>
        </h4>
        <p>{{Helper::truncate($article['description'],300)}}</p>
    </div>
</div>
@endforeach
{{ $articles->links() }}
@endif

@endif