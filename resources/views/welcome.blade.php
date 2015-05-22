@extends ('app')

@section ('content')
This is the welcome page.

<a href="{{ HTML::link('/roundup/create') }}">Create a new Roundup.</a>
@stop
