@php
$mostviewedArticles = Helper::getMostViewed();
@endphp
@if(isset($mostviewedArticles) && count($mostviewedArticles))
<aside id="text-5" class="widget widget_text">
    <h3 class="widget-title"><span>Bài viết được quan tâm nhất</span></h3>
    <div class="textwidget">
        <ul class="news-widget">
            @foreach($mostviewedArticles as $article)
            <li>
                <a href="{{url('/tin-tuc/'.$article->slug)}}">{{$article->title}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</aside>
@endif