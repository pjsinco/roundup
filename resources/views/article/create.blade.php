@extends('app')

@section('content')
<h3>Create an article</h3>
{!! Form::open(['url' => 'article'])!!}
<div class="form-group">
    {!! Form::hidden('email_id', $emailId)  !!}
    {!! Form::label('Article type') !!}
    {!! Form::select(
        'type',
        array(
            'feature' => 'Feature',
            'major' => 'Major',
            'minor' => 'Minor',
        )
    ) !!}
</div>

<div class="form-group">
    {!! Form::label('Include bottom rule') !!}
    {!! Form::checkbox('bottom_rule', 1, true, ['checked']) !!}
</div>
    
<div class="form-group">
    {!! Form::label('Kicker') !!}
    {!! Form::text('kicker') !!}

    {!! Form::label('Title') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-group">
    {!! Form::label('Excerpt') !!}
    {!! Form::textarea('excerpt', null, ['rows' => 4]) !!}
</div>

<div class="form-group">
    {!! Form::label('Link') !!}
    {!! Form::text('link') !!}
</div>

<div class="form-group">
    {!! Form::label('Image source') !!}
    {!! Form::text('img_src') !!}
</div>

<div class="form-group">
    {!! Form::label('Image alt') !!}
    {!! Form::text('img_alt') !!}
</div>

<div class="form-group">
    {!! Form::label('WordPress ID') !!}
    {!! Form::text('wp_id') !!}
</div>

<div class="form-group">
    {!! Form::submit('Create article') !!}
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


