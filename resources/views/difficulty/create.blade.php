@extends('app')
@section('content')

<h3>Incluir Dificuldade</h3>

{!! Form::open(['route' => 'difficulty.store']) !!}

@include('difficulty.partial.form')

{!! Form::submit('Incluir', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection