@extends('app')
@section('content')

<h3>Editar Dificuldade</h3>

{!! Form::model($row, ['route' => ['difficulty.update', $row->id]]) !!}

@include('difficulty.partial.form')

{!! Form::submit('Atualizar', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection