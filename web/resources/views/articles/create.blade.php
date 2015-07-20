@extends('app')

@section('content')
    <h1>Write A New Article</h1>

    <hr />

    {!! Form::open(['url' => 'articles']) !!}
       @include('articles.form', ['submit_button_text' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop