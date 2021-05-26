<!-- Descricao Field -->
<div class="form-group">
    {!! Form::label('descricao', __('models/produtos.fields.descricao').':') !!}
    <p>{{ $produtos->descricao }}</p>
</div>

<!-- Inativo Field -->
<div class="form-group">
    {!! Form::label('inativo', __('models/produtos.fields.inativo').':') !!}
    <p>{{ $produtos->inativo }}</p>
</div>

