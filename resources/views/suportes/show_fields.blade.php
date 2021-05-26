<!-- Cliente Id Field -->
<div class="form-group">
    {!! Form::label('cliente_id', __('models/suportes.fields.cliente_id').':') !!}
    <p>{{ $suporte->cliente_id }}</p>
</div>

<!-- Prioridade Field -->
<div class="form-group">
    {!! Form::label('prioridade', __('models/suportes.fields.prioridade').':') !!}
    <p>{{ $suporte->prioridade }}</p>
</div>

<!-- Produto Id Field -->
<div class="form-group">
    {!! Form::label('produto_id', __('models/suportes.fields.produto_id').':') !!}
    <p>{{ $suporte->produto_id }}</p>
</div>

<!-- Descricao Field -->
<div class="form-group">
    {!! Form::label('descricao', __('models/suportes.fields.descricao').':') !!}
    <p>{{ $suporte->descricao }}</p>
</div>

<!-- Datacadastro Field -->
<div class="form-group">
    {!! Form::label('dataCadastro', __('models/suportes.fields.dataCadastro').':') !!}
    <p>{{ $suporte->dataCadastro }}</p>
</div>

<!-- Datafinalizacao Field -->
<div class="form-group">
    {!! Form::label('dataFinalizacao', __('models/suportes.fields.dataFinalizacao').':') !!}
    <p>{{ $suporte->dataFinalizacao }}</p>
</div>

<!-- Observacoes Field -->
<div class="form-group">
    {!! Form::label('observacoes', __('models/suportes.fields.observacoes').':') !!}
    <p>{{ $suporte->observacoes }}</p>
</div>

