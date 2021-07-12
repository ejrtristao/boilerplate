<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('NOME', __('models/materiais.fields.NOME').':') !!}
    <p>{{ $materiais->NOME }}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('VALOR', __('models/materiais.fields.VALOR').':') !!}
    <p>{{ $materiais->VALOR }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('STATUS', __('models/materiais.fields.STATUS').':') !!}
    <p>{{ $materiais->STATUS }}</p>
</div>

<!-- Quantidade Estoque Field -->
<div class="form-group">
    {!! Form::label('QUANTIDADE_ESTOQUE', __('models/materiais.fields.QUANTIDADE_ESTOQUE').':') !!}
    <p>{{ $materiais->QUANTIDADE_ESTOQUE }}</p>
</div>

<!-- Detalhes Field -->
<div class="form-group">
    {!! Form::label('DETALHES', __('models/materiais.fields.DETALHES').':') !!}
    <p>{{ $materiais->DETALHES }}</p>
</div>

