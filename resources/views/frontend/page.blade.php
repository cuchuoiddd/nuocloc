@extends('layouts.frontend')

<!-- SEO -->
@section('title', isset($page) ? $page->title : '')
@section('meta-title')
@if(isset($page))
{{$page->metatitle}}
@endif
@endsection
@section('meta-description')
@if(isset($page))
{{$page->metadescription}}
@endif
@endsection

@section('content')
<h1>Page content</h1>
@endsection