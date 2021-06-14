<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOME', __('models/materiais.fields.NOME').':') !!}
    {!! Form::text('NOME', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR', __('models/materiais.fields.VALOR').':') !!}
    {!! Form::number('VALOR', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STATUS', __('models/materiais.fields.STATUS').':') !!}
    {!! Form::text('STATUS', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantidade Estoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('QUANTIDADE_ESTOQUE', __('models/materiais.fields.QUANTIDADE_ESTOQUE').':') !!}
    {!! Form::number('QUANTIDADE_ESTOQUE', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalhes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('DETALHES', __('models/materiais.fields.DETALHES').':') !!}
    {!! Form::textarea('DETALHES', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.materiais.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
