<!-- Professor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PROFESSOR_ID', __('models/turmas.fields.PROFESSOR_ID').':') !!}
    {!! Form::number('PROFESSOR_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOME', __('models/turmas.fields.NOME').':') !!}
    {!! Form::text('NOME', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATA_INICIO', __('models/turmas.fields.DATA_INICIO').':') !!}
    {!! Form::date('DATA_INICIO', null, ['class' => 'form-control','id'=>'DATA_INICIO']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DATA_INICIO').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Data Termino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATA_TERMINO', __('models/turmas.fields.DATA_TERMINO').':') !!}
    {!! Form::date('DATA_TERMINO', null, ['class' => 'form-control','id'=>'DATA_TERMINO']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DATA_TERMINO').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STATUS', __('models/turmas.fields.STATUS').':') !!}
    {!! Form::text('STATUS', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.turmas.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
