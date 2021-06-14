<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOME', __('models/cursos.fields.NOME').':') !!}
    {!! Form::text('NOME', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VALOR', __('models/cursos.fields.VALOR').':') !!}
    {!! Form::text('VALOR', null, ['class' => 'form-control valor', 'required']) !!}
</div>

<!-- Detalhes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('DETALHES', __('models/cursos.fields.DETALHES').':') !!}
    {!! Form::textarea('DETALHES', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STATUS', __('models/cursos.fields.STATUS').':') !!}
    {!! 
        Form::select('STATUS', 
        ['inativo' => 'Inativo', 'ativo' => 'Ativo'], 
        ['class' => 'form-control', 'placeholder' => 'ativo']) 
    !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.cursos.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>

@push('scripts')
<script>
$(document).ready(function(){
    $('.valor').mask("#.##0,00", {reverse: true});
});
</script>
@endpush