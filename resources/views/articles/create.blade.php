@extends('app')

@section('content')
<h3>Create an article</h3>
{!! Form::open(['url' => 'article'])!!}
    @include('articles/form', ['submitButtonText' => 'Create article'])
{!! Form::close() !!}
@stop

@section ('footer')
    @include('errors.list')
@stop


