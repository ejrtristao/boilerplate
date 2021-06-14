<!-- Vnd Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_ID', __('models/vendasCursos.fields.VND_ID').':') !!}
    {!! Form::number('VND_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Curso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CURSO_ID', __('models/vendasCursos.fields.CURSO_ID').':') !!}
    {!! Form::number('CURSO_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR', __('models/vendasCursos.fields.VALOR').':') !!}
    {!! Form::number('VALOR', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR_DESCONTO', __('models/vendasCursos.fields.VALOR_DESCONTO').':') !!}
    {!! Form::number('VALOR_DESCONTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR_TOTAL', __('models/vendasCursos.fields.VALOR_TOTAL').':') !!}
    {!! Form::number('VALOR_TOTAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('OBSERVACOES', __('models/vendasCursos.fields.OBSERVACOES').':') !!}
    {!! Form::textarea('OBSERVACOES', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.vendasCursos.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
