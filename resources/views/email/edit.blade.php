@extends ('app')

@section ('content')
<h1>Edit email for {{ $email->date }}</h1>
{!! Form::model($email, ['method' => 'PATCH', 'action' => ['EmailController@update', $email->id]]) !!}

    <div class="form-group">
        {!! Form::label('Date of email') !!}
        {!! Form::text('date', null) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create email') !!}
    </div>

{!! Form::close() !!}

@foreach ($articles as $article)
    <h3>{{ $article->title }}</h3>
    <span><a href="/article/{{ $article->id }}/edit">Edit</a></span>
    <span><a href="/article/{{ $article->id }}/destroy">Delete</a> <small>(delete not working)</small></span>
@endforeach

@stop

@section ('footer')
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    @endif
@stop


