@extends ('app')

@section ('content')
This is the welcome page.

{!! HTML::link('/roundup/create', 'Create a new Roundup') !!}
@stop
