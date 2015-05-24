@extends ('app')

@section ('content')

{!! Form::open(['url' => 'email']) !!}

    <div class="form-group">
        {!! Form::label('Date of email') !!}
        {!! Form::text('date', null) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create email') !!}
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

