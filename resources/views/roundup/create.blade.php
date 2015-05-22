@extends ('app')

@section ('content')

{!! Form::open(['url' => 'roundup']) !!}

    <div class="form-group">
        {!! Form::label('date') !!}
        {!! Form::text('date', null) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Set date') !!}
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

