<!-- Pessoa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PESSOA', __('models/clientes.fields.PESSOA').':') !!}
    {!! Form::text('PESSOA', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TIPO', __('models/clientes.fields.TIPO').':') !!}
    {!! Form::text('TIPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TIPOCADASTRO', __('models/clientes.fields.TIPOCADASTRO').':') !!}
    {!! Form::text('TIPOCADASTRO', null, ['class' => 'form-control']) !!}
</div>

<!-- Datacadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATACADASTRO', __('models/clientes.fields.DATACADASTRO').':') !!}
    {!! Form::date('DATACADASTRO', null, ['class' => 'form-control','id'=>'DATACADASTRO']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DATACADASTRO').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Nomeclie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOMECLIE', __('models/clientes.fields.NOMECLIE').':') !!}
    {!! Form::text('NOMECLIE', null, ['class' => 'form-control']) !!}
</div>

<!-- Apelido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('APELIDO', __('models/clientes.fields.APELIDO').':') !!}
    {!! Form::text('APELIDO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpjcpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CNPJCPF', __('models/clientes.fields.CNPJCPF').':') !!}
    {!! Form::text('CNPJCPF', null, ['class' => 'form-control']) !!}
</div>

<!-- Inscricaoestadualrg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INSCRICAOESTADUALRG', __('models/clientes.fields.INSCRICAOESTADUALRG').':') !!}
    {!! Form::text('INSCRICAOESTADUALRG', null, ['class' => 'form-control']) !!}
</div>

<!-- Rua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('RUA', __('models/clientes.fields.RUA').':') !!}
    {!! Form::text('RUA', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BAIRRO', __('models/clientes.fields.BAIRRO').':') !!}
    {!! Form::text('BAIRRO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CIDADE', __('models/clientes.fields.CIDADE').':') !!}
    {!! Form::text('CIDADE', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ESTADO', __('models/clientes.fields.ESTADO').':') !!}
    {!! Form::text('ESTADO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CEP', __('models/clientes.fields.CEP').':') !!}
    {!! Form::text('CEP', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONE1', __('models/clientes.fields.FONE1').':') !!}
    {!! Form::text('FONE1', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FAX', __('models/clientes.fields.FAX').':') !!}
    {!! Form::text('FAX', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CELULAR', __('models/clientes.fields.CELULAR').':') !!}
    {!! Form::text('CELULAR', null, ['class' => 'form-control']) !!}
</div>

<!-- Homepage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HOMEPAGE', __('models/clientes.fields.HOMEPAGE').':') !!}
    {!! Form::text('HOMEPAGE', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EMAIL', __('models/clientes.fields.EMAIL').':') !!}
    {!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
</div>

<!-- Atividadeprincipal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ATIVIDADEPRINCIPAL', __('models/clientes.fields.ATIVIDADEPRINCIPAL').':') !!}
    {!! Form::text('ATIVIDADEPRINCIPAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Comisn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMISN', __('models/clientes.fields.COMISN').':') !!}
    {!! Form::text('COMISN', null, ['class' => 'form-control']) !!}
</div>

<!-- Comissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMISSAO', __('models/clientes.fields.COMISSAO').':') !!}
    {!! Form::number('COMISSAO', null, ['class' => 'form-control']) !!}
</div>

<!-- Mesaniver Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MESANIVER', __('models/clientes.fields.MESANIVER').':') !!}
    {!! Form::text('MESANIVER', null, ['class' => 'form-control']) !!}
</div>

<!-- Inativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INATIVO', __('models/clientes.fields.INATIVO').':') !!}
    {!! Form::text('INATIVO', null, ['class' => 'form-control']) !!}
</div>

<!-- Dat Grv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DAT_GRV', __('models/clientes.fields.DAT_GRV').':') !!}
    {!! Form::date('DAT_GRV', null, ['class' => 'form-control','id'=>'DAT_GRV']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DAT_GRV').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Dat Cad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DAT_CAD', __('models/clientes.fields.DAT_CAD').':') !!}
    {!! Form::date('DAT_CAD', null, ['class' => 'form-control','id'=>'DAT_CAD']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DAT_CAD').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Dat Ani Fund Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DAT_ANI_FUND', __('models/clientes.fields.DAT_ANI_FUND').':') !!}
    {!! Form::date('DAT_ANI_FUND', null, ['class' => 'form-control','id'=>'DAT_ANI_FUND']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DAT_ANI_FUND').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Obs Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('OBS', __('models/clientes.fields.OBS').':') !!}
    {!! Form::textarea('OBS', null, ['class' => 'form-control']) !!}
</div>

<!-- Pct Comis Emi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCT_COMIS_EMI', __('models/clientes.fields.PCT_COMIS_EMI').':') !!}
    {!! Form::number('PCT_COMIS_EMI', null, ['class' => 'form-control']) !!}
</div>

<!-- Pct Comis Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCT_COMIS_AR', __('models/clientes.fields.PCT_COMIS_AR').':') !!}
    {!! Form::number('PCT_COMIS_AR', null, ['class' => 'form-control']) !!}
</div>

<!-- Upd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UPD', __('models/clientes.fields.UPD').':') !!}
    {!! Form::date('UPD', null, ['class' => 'form-control','id'=>'UPD']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#UPD').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMERO', __('models/clientes.fields.NUMERO').':') !!}
    {!! Form::text('NUMERO', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMPLEMENTO', __('models/clientes.fields.COMPLEMENTO').':') !!}
    {!! Form::text('COMPLEMENTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Ponto Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PONTO_REFERENCIA', __('models/clientes.fields.PONTO_REFERENCIA').':') !!}
    {!! Form::text('PONTO_REFERENCIA', null, ['class' => 'form-control']) !!}
</div>

<!-- Selec Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SELEC_SN', __('models/clientes.fields.SELEC_SN').':') !!}
    {!! Form::number('SELEC_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Limitecred Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LIMITECRED', __('models/clientes.fields.LIMITECRED').':') !!}
    {!! Form::number('LIMITECRED', null, ['class' => 'form-control']) !!}
</div>

<!-- Vnd Entregar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_ENTREGAR', __('models/clientes.fields.VND_ENTREGAR').':') !!}
    {!! Form::number('VND_ENTREGAR', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
