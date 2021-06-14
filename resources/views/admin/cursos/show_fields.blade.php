<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('NOME', __('models/cursos.fields.NOME').':') !!}
    <p>{{ $cursos->NOME }}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('VALOR', __('models/cursos.fields.VALOR').':') !!}
    <p>{{ $cursos->VALOR }}</p>
</div>

<!-- Detalhes Field -->
<div class="form-group">
    {!! Form::label('DETALHES', __('models/cursos.fields.DETALHES').':') !!}
    <p>{{ $cursos->DETALHES }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('STATUS', __('models/cursos.fields.STATUS').':') !!}
    <p>{{ $cursos->STATUS }}</p>
</div>

