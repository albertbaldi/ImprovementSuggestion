@extends('app')
@section('content')

<h3>Incluir Porte do Cliente</h3>

{!! Form::open(['route' => 'customerSize.store']) !!}

@include('customerSize.partial.form')

{!! Form::submit('Incluir', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection