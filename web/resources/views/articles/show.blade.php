@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>

        <article>
            <div class="article-body">{{ $article->body }}</div>
        </article>

@stop