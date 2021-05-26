<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', __('models/produtos.fields.descricao').':') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Inativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inativo', __('models/produtos.fields.inativo').':') !!}
    {!! Form::number('inativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produtos.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
