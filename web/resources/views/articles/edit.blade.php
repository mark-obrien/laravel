@extends('app')

@section('content')
    <h1>Edit Article</h1>
    <hr />

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include('articles.form', ['submit_button_text' => 'Update Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop