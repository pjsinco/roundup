@extends ('app')

@section ('top-matter')
<h1>Roundup for {{ $date }}</h1>
@stop

@section ('content')
Make new:
{!! Form::open() !!}
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
