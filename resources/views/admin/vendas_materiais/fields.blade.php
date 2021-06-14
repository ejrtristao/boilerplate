<!-- Vnd Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_ID', __('models/vendasMateriais.fields.VND_ID').':') !!}
    {!! Form::number('VND_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Material Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MATERIAL_ID', __('models/vendasMateriais.fields.MATERIAL_ID').':') !!}
    {!! Form::number('MATERIAL_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR', __('models/vendasMateriais.fields.VALOR').':') !!}
    {!! Form::number('VALOR', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR_DESCONTO', __('models/vendasMateriais.fields.VALOR_DESCONTO').':') !!}
    {!! Form::number('VALOR_DESCONTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR_TOTAL', __('models/vendasMateriais.fields.VALOR_TOTAL').':') !!}
    {!! Form::number('VALOR_TOTAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('OBSERVACOES', __('models/vendasMateriais.fields.OBSERVACOES').':') !!}
    {!! Form::textarea('OBSERVACOES', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.vendasMateriais.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
