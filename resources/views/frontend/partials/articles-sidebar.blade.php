@php
    $articles_sidebar = Helper::articlesSidebar();
@endphp
@if(isset($articles_sidebar) && count($articles_sidebar))
@foreach($articles_sidebar as $article)
<aside id="text-15" class="widget widget_text">
    <h3 class="widget-title"><span>{{$article->title}}</span></h3>
    <div class="textwidget">{!!$article->content!!}</div>
</aside>
@endforeach
@endif