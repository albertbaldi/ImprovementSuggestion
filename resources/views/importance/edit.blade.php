@extends('app')
@section('content')

<h3>Editar Importância</h3>

{!! Form::model($row, ['route' => ['importance.update', $row->id]]) !!}

@include('importance.partial.form')

{!! Form::submit('Atualizar', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection