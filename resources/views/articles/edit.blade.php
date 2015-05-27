@extends('app')

@section('content')
<h3>Edit: {{ $article->title }}</h3>
{!! Form::model($article, ['method' => 'PATCH', 'url' => 'article/' . $article->id])!!}
    @include('articles/form', ['submitButtonText' => 'Update article'])
{!! Form::close() !!}
@stop

@section ('footer')
    @include('errors.list')
@stop
