@extends ('app')

@section ('top-matter')
<h3>Roundup: {{ $date }}<h3>
<h1>Create new item<h2>
@stop

@section ('content')
{!! Form::open(['url' => 'item']) !!}
    {!! Form::select('select-item', array(
        'feature' => 'Feature',
        'article-major' => 'Major article',
        'article-minor' => 'Minor article',
        'ad' => 'Ad',
        'quote' => 'Quote',
    )) !!}

    {!! Form::submit('Create') !!}

{!! Form::close() !!}
@stop
