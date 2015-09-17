@extends('app')
@section('content')

<h3>Editar Sugestão</h3>

{!! Form::model($row, ['route' => ['improvement.update', $row->id]]) !!}

@include('improvement.partial.form')

{!! Form::submit('Atualizar', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection