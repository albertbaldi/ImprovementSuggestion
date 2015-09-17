@extends('app')
@section('content')

<h3>Incluir Importância</h3>

{!! Form::open(['route' => 'importance.store']) !!}

@include('importance.partial.form')

{!! Form::submit('Incluir', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection