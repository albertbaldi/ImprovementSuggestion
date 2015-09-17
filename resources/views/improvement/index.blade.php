@extends('app')
@section('content')

<h3>Sugestões {!! $showDelete ? 'Excluídas' : '' !!}</h3>

<p class="text-right">
	Total de registros: {!! $total !!}
	<br>
	<a href="{{ route('improvement.create') }}" class="btn btn-sm btn-primary">Novo Registro</a>
</p>
@if($rows->count())
<div class="panel panel-default">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Totver</th>
				<th>Produto</th>
				<th style="width:150px;">Porte do Cliente</th>
				<th style="width:1%;">Importância</th>
				<th style="width:1%;">Dificuldade</th>
				<th style="width:150px;">Data/hora Criação</th>
				@if($showDelete)
				<th style="width:150px;">Data/hora Exclusão</th>
				@endif
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rows as $row)
			<tr>
				<td>{!! $row->user->name !!}</td>
				<td>{!! $row->product !!}</td>
				<td>{!! $row->customerSize->description !!}</td>
				<td class="text-center">{!! $row->importance->description !!}</td>
				<td class="text-center">{!! $row->difficulty->description !!}</td>
				<td>{!! $row->created_at !!}</td>
				@if($showDelete)
				<td>{!! $row->deleted_at !!}</td>
				@endif
				<td>
					@if($showDelete)
					<a href="{{ route('improvement.restore', [$row->id]) }}" class="btn btn-xs btn-default">restaurar</a>
					@else
					<a href="{{ route('improvement.edit', [$row->id]) }}" class="btn btn-xs btn-default">editar</a>
					<a href="{{ route('improvement.destroy', [$row->id]) }}" class="btn btn-xs btn-default">excluir</a>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="text-center">
	{!! $rows->render() !!}
</div>
@else
@include('utils.norecords')
@endif

@endsection
