@extends('app')

@section('content')
<h3>Create a quote</h3>
{!! Form::open(['url' => 'quote'])!!}
<div class="form-group">
    {!! Form::hidden('email-id', $emailId)  !!}
    {!! Form::label('Quote') !!}
    {!! Form::textarea('quote') !!}
</div>
    
<div class="form-group">
    {!! Form::label('Speaker') !!}
    {!! Form::text('speaker') !!}
</div>

<div class="form-group">
    {!! Form::label('Context') !!}
    {!! Form::text('context') !!}
</div>
<div class="form-group">
    {!! Form::submit('Create quote') !!}
</div>
{!! Form::close() !!}
@stop

@section ('footer')
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    @endif
@stop

