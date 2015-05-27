@section ('sidebar')
<div class='menu'>
    Make new:
    {!! Form::open(['url' => 'menu']) !!}
        {!! Form::hidden('email-id', $emailId)  !!}
        {!! Form::select('select-item', array(
            'article' => 'Article',
            'ad' => 'Ad',
            'quote' => 'Quote',
        )) !!}
    
        {!! Form::submit('Create') !!}
    
    {!! Form::close() !!}
</div>

@stop

