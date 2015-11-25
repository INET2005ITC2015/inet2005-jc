@extends('app')

@section('content')

    <h1>Write a New Article</h1>
    <hr/>

    {!! Form::open(['url'=>'articles']) !!}
        @include('articles.form', ['submitBtnText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')

@stop