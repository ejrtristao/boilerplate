<!-- Professor Id Field -->
<div class="form-group">
    {!! Form::label('PROFESSOR_ID', __('models/turmas.fields.PROFESSOR_ID').':') !!}
    <p>{{ $turmas->PROFESSOR_ID }}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('NOME', __('models/turmas.fields.NOME').':') !!}
    <p>{{ $turmas->NOME }}</p>
</div>

<!-- Data Inicio Field -->
<div class="form-group">
    {!! Form::label('DATA_INICIO', __('models/turmas.fields.DATA_INICIO').':') !!}
    <p>{{ $turmas->DATA_INICIO }}</p>
</div>

<!-- Data Termino Field -->
<div class="form-group">
    {!! Form::label('DATA_TERMINO', __('models/turmas.fields.DATA_TERMINO').':') !!}
    <p>{{ $turmas->DATA_TERMINO }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('STATUS', __('models/turmas.fields.STATUS').':') !!}
    <p>{{ $turmas->STATUS }}</p>
</div>

