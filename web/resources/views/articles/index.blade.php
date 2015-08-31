@extends('app')

@section('page-title')
Articles
@stop

@section('content')
    @foreach($articles as $article)
        <article>
            <h2><a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a></h2>
            <div class="article-body">{{ $article->body }}</div>
        </article>
    @endforeach

@stop