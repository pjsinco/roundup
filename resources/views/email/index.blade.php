@extends ('app')

@section ('content')
<h1>All emails</h1>
<ul>
@foreach ($emails as $email)
    <li><h3>{{ $email->date }}</h3>
    <span><a href="/email/{{ $email->id }}/edit">Edit</a></span>
    <span><a href="/email/{{ $email->id }}/destroy">Delete</a> <small>(delete not working)</small></span>
@endforeach
</ul>

@stop
