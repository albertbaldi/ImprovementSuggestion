@extends('app')
@section('content')

<h3>Incluir Sugestão</h3>

{!! Form::open(['route' => 'improvement.store']) !!}

@include('improvement.partial.form')

{!! Form::submit('Incluir', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection