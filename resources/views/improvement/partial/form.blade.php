{!! Form::hidden('user_id', \Auth::user()->id) !!}
<div class="form-group">
	{!! Form::label('description', 'Descrição', ['class' => 'form-label']) !!}
	{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
</div>
<div class="form-group">
	{!! Form::label('product', 'Produto', ['class' => 'form-label']) !!}
	{!! Form::text('product', null, ['class' => 'form-control', 'id' => 'product']) !!}
</div>

<div class="row">
	<div class="form-group col-md-4">
		{!! Form::label('customerSize_id', 'Porte do Cliente', ['class' => 'form-label']) !!}
		{!! Form::select('customerSize_id', App\CustomerSize::lists('description', 'id'), null, ['class' => 'form-control', 'id' => 'customerSize_id']) !!}
	</div>
	
	<div class="form-group col-md-4">
		{!! Form::label('difficulty_id', 'Dificildade', ['class' => 'form-label']) !!}
		{!! Form::select('difficulty_id', App\Difficulty::lists('description', 'id'), null, ['class' => 'form-control', 'id' => 'difficulty_id']) !!}
	</div>
	
	<div class="form-group col-md-4">
		{!! Form::label('importance_id', 'Importância', ['class' => 'form-label']) !!}
		{!! Form::select('importance_id', App\Importance::lists('description', 'id'), null, ['class' => 'form-control', 'id' => 'importance_id']) !!}
	</div>
</div>
