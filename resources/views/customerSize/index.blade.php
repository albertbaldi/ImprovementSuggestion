@extends('app')
@section('content')

<h3>Porte do Cliente</h3>

<p class="text-right">
	Total de registros: {!! $total !!}
	<br>
	<a href="{{ route('customerSize.create') }}" class="btn btn-sm btn-primary">Novo Registro</a>
</p>
@if($rows->count())
<div class="panel panel-default">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Descrição</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rows as $row)
			<tr>
				<td>{!! $row->description !!}</td>
				<td>
					<a href="{{ route('customerSize.edit', [$row->id]) }}" class="btn btn-xs btn-default">editar</a>
					<a href="{{ route('customerSize.destroy', [$row->id]) }}" class="btn btn-xs btn-default">excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $rows->render() !!}
	</div>
</div>
@else
@include('utils.norecords')
@endif

@endsection		