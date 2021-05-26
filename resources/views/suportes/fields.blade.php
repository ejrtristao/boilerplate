<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', __('models/suportes.fields.cliente_id').':') !!}
    {!! Form::number('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Prioridade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prioridade', __('models/suportes.fields.prioridade').':') !!}
    {!! Form::number('prioridade', null, ['class' => 'form-control']) !!}
</div>

<!-- Produto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produto_id', __('models/suportes.fields.produto_id').':') !!}
    {!! Form::number('produto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', __('models/suportes.fields.descricao').':') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Datacadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataCadastro', __('models/suportes.fields.dataCadastro').':') !!}
    {!! Form::date('dataCadastro', null, ['class' => 'form-control','id'=>'dataCadastro']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dataCadastro').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Datafinalizacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataFinalizacao', __('models/suportes.fields.dataFinalizacao').':') !!}
    {!! Form::date('dataFinalizacao', null, ['class' => 'form-control','id'=>'dataFinalizacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dataFinalizacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacoes', __('models/suportes.fields.observacoes').':') !!}
    {!! Form::textarea('observacoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('suportes.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
