@extends('app')
@section('content')

<h3>Editar Porte do Cliente</h3>

{!! Form::model($row, ['route' => ['customerSize.update', $row->id]]) !!}

@include('customerSize.partial.form')

{!! Form::submit('Atualizar', ['class' => 'btn btn-block btn-primary']) !!}
{!! Form::close() !!}

@endsection