
@extends('layouts.main')

@section('container')
    
    <article>
    <h2>{{ $content["title"] }}</h2>
    <h5>By: {{ $content["author"] }}</h5>
    <p>{{ $content["content"] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection