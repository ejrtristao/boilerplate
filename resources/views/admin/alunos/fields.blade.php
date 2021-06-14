<!-- Chv Ung Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHV_UNG', __('models/alunos.fields.CHV_UNG').':') !!}
    {!! Form::number('CHV_UNG', null, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PESSOA', __('models/alunos.fields.PESSOA').':') !!}
    {!! Form::text('PESSOA', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TIPO', __('models/alunos.fields.TIPO').':') !!}
    {!! Form::text('TIPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TIPOCADASTRO', __('models/alunos.fields.TIPOCADASTRO').':') !!}
    {!! Form::text('TIPOCADASTRO', null, ['class' => 'form-control']) !!}
</div>

<!-- Chavregi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHAVREGI', __('models/alunos.fields.CHAVREGI').':') !!}
    {!! Form::number('CHAVREGI', null, ['class' => 'form-control']) !!}
</div>

<!-- Datacadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATACADASTRO', __('models/alunos.fields.DATACADASTRO').':') !!}
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
    {!! Form::label('NOMECLIE', __('models/alunos.fields.NOMECLIE').':') !!}
    {!! Form::text('NOMECLIE', null, ['class' => 'form-control']) !!}
</div>

<!-- Apelido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('APELIDO', __('models/alunos.fields.APELIDO').':') !!}
    {!! Form::text('APELIDO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CNPJ', __('models/alunos.fields.CNPJ').':') !!}
    {!! Form::text('CNPJ', null, ['class' => 'form-control']) !!}
</div>

<!-- Inscricaoestadual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INSCRICAOESTADUAL', __('models/alunos.fields.INSCRICAOESTADUAL').':') !!}
    {!! Form::text('INSCRICAOESTADUAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CPF', __('models/alunos.fields.CPF').':') !!}
    {!! Form::text('CPF', null, ['class' => 'form-control']) !!}
</div>

<!-- Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('RG', __('models/alunos.fields.RG').':') !!}
    {!! Form::text('RG', null, ['class' => 'form-control']) !!}
</div>

<!-- Rua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('RUA', __('models/alunos.fields.RUA').':') !!}
    {!! Form::text('RUA', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BAIRRO', __('models/alunos.fields.BAIRRO').':') !!}
    {!! Form::text('BAIRRO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CIDADE', __('models/alunos.fields.CIDADE').':') !!}
    {!! Form::text('CIDADE', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ESTADO', __('models/alunos.fields.ESTADO').':') !!}
    {!! Form::text('ESTADO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CEP', __('models/alunos.fields.CEP').':') !!}
    {!! Form::text('CEP', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PAIS', __('models/alunos.fields.PAIS').':') !!}
    {!! Form::text('PAIS', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONE1', __('models/alunos.fields.FONE1').':') !!}
    {!! Form::text('FONE1', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONE2', __('models/alunos.fields.FONE2').':') !!}
    {!! Form::text('FONE2', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FAX', __('models/alunos.fields.FAX').':') !!}
    {!! Form::text('FAX', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CELULAR', __('models/alunos.fields.CELULAR').':') !!}
    {!! Form::text('CELULAR', null, ['class' => 'form-control']) !!}
</div>

<!-- Homepage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HOMEPAGE', __('models/alunos.fields.HOMEPAGE').':') !!}
    {!! Form::text('HOMEPAGE', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EMAIL', __('models/alunos.fields.EMAIL').':') !!}
    {!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
</div>

<!-- Atividadeprincipal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ATIVIDADEPRINCIPAL', __('models/alunos.fields.ATIVIDADEPRINCIPAL').':') !!}
    {!! Form::text('ATIVIDADEPRINCIPAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Comisn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMISN', __('models/alunos.fields.COMISN').':') !!}
    {!! Form::text('COMISN', null, ['class' => 'form-control']) !!}
</div>

<!-- Comissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMISSAO', __('models/alunos.fields.COMISSAO').':') !!}
    {!! Form::number('COMISSAO', null, ['class' => 'form-control']) !!}
</div>

<!-- Mesaniver Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MESANIVER', __('models/alunos.fields.MESANIVER').':') !!}
    {!! Form::text('MESANIVER', null, ['class' => 'form-control']) !!}
</div>

<!-- Contato1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CONTATO1', __('models/alunos.fields.CONTATO1').':') !!}
    {!! Form::text('CONTATO1', null, ['class' => 'form-control']) !!}
</div>

<!-- Contato2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CONTATO2', __('models/alunos.fields.CONTATO2').':') !!}
    {!! Form::text('CONTATO2', null, ['class' => 'form-control']) !!}
</div>

<!-- Contato3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CONTATO3', __('models/alunos.fields.CONTATO3').':') !!}
    {!! Form::text('CONTATO3', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargocontato1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARGOCONTATO1', __('models/alunos.fields.CARGOCONTATO1').':') !!}
    {!! Form::text('CARGOCONTATO1', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargocontato2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARGOCONTATO2', __('models/alunos.fields.CARGOCONTATO2').':') !!}
    {!! Form::text('CARGOCONTATO2', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargocontato3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARGOCONTATO3', __('models/alunos.fields.CARGOCONTATO3').':') !!}
    {!! Form::text('CARGOCONTATO3', null, ['class' => 'form-control']) !!}
</div>

<!-- Fonecontato1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONECONTATO1', __('models/alunos.fields.FONECONTATO1').':') !!}
    {!! Form::text('FONECONTATO1', null, ['class' => 'form-control']) !!}
</div>

<!-- Fonecontato2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONECONTATO2', __('models/alunos.fields.FONECONTATO2').':') !!}
    {!! Form::text('FONECONTATO2', null, ['class' => 'form-control']) !!}
</div>

<!-- Fonecontato3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONECONTATO3', __('models/alunos.fields.FONECONTATO3').':') !!}
    {!! Form::text('FONECONTATO3', null, ['class' => 'form-control']) !!}
</div>

<!-- Impr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IMPR', __('models/alunos.fields.IMPR').':') !!}
    {!! Form::text('IMPR', null, ['class' => 'form-control']) !!}
</div>

<!-- Inativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INATIVO', __('models/alunos.fields.INATIVO').':') !!}
    {!! Form::text('INATIVO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Pfj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CCO_PFJ', __('models/alunos.fields.CCO_PFJ').':') !!}
    {!! Form::text('CCO_PFJ', null, ['class' => 'form-control']) !!}
</div>

<!-- Ccv Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CCV_SN', __('models/alunos.fields.CCV_SN').':') !!}
    {!! Form::text('CCV_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Dat Grv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DAT_GRV', __('models/alunos.fields.DAT_GRV').':') !!}
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
    {!! Form::label('DAT_CAD', __('models/alunos.fields.DAT_CAD').':') !!}
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
    {!! Form::label('DAT_ANI_FUND', __('models/alunos.fields.DAT_ANI_FUND').':') !!}
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
    {!! Form::label('OBS', __('models/alunos.fields.OBS').':') !!}
    {!! Form::textarea('OBS', null, ['class' => 'form-control']) !!}
</div>

<!-- Pct Comis Emi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCT_COMIS_EMI', __('models/alunos.fields.PCT_COMIS_EMI').':') !!}
    {!! Form::number('PCT_COMIS_EMI', null, ['class' => 'form-control']) !!}
</div>

<!-- Pct Comis Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCT_COMIS_AR', __('models/alunos.fields.PCT_COMIS_AR').':') !!}
    {!! Form::number('PCT_COMIS_AR', null, ['class' => 'form-control']) !!}
</div>

<!-- Chv Cot Tab Vnd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHV_COT_TAB_VND', __('models/alunos.fields.CHV_COT_TAB_VND').':') !!}
    {!! Form::number('CHV_COT_TAB_VND', null, ['class' => 'form-control']) !!}
</div>

<!-- Stat Vnd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STAT_VND', __('models/alunos.fields.STAT_VND').':') !!}
    {!! Form::number('STAT_VND', null, ['class' => 'form-control']) !!}
</div>

<!-- Vnd Maior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_MAIOR', __('models/alunos.fields.VND_MAIOR').':') !!}
    {!! Form::number('VND_MAIOR', null, ['class' => 'form-control']) !!}
</div>

<!-- Vnd Ult Dt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_ULT_DT', __('models/alunos.fields.VND_ULT_DT').':') !!}
    {!! Form::date('VND_ULT_DT', null, ['class' => 'form-control','id'=>'VND_ULT_DT']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#VND_ULT_DT').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Vnd Ult Vlr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_ULT_VLR', __('models/alunos.fields.VND_ULT_VLR').':') !!}
    {!! Form::number('VND_ULT_VLR', null, ['class' => 'form-control']) !!}
</div>

<!-- Vnd Med Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_MED', __('models/alunos.fields.VND_MED').':') !!}
    {!! Form::number('VND_MED', null, ['class' => 'form-control']) !!}
</div>

<!-- Vnd Qtd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VND_QTD', __('models/alunos.fields.VND_QTD').':') !!}
    {!! Form::number('VND_QTD', null, ['class' => 'form-control']) !!}
</div>

<!-- Tip Vndd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TIP_VNDD', __('models/alunos.fields.TIP_VNDD').':') !!}
    {!! Form::number('TIP_VNDD', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Orig Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_ORIG', __('models/alunos.fields.ID_ORIG').':') !!}
    {!! Form::number('ID_ORIG', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Vndd Int Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_VNDD_INT', __('models/alunos.fields.ID_VNDD_INT').':') !!}
    {!! Form::number('ID_VNDD_INT', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Vndd Ext Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_VNDD_EXT', __('models/alunos.fields.ID_VNDD_EXT').':') !!}
    {!! Form::number('ID_VNDD_EXT', null, ['class' => 'form-control']) !!}
</div>

<!-- Upd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UPD', __('models/alunos.fields.UPD').':') !!}
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
    {!! Form::label('NUMERO', __('models/alunos.fields.NUMERO').':') !!}
    {!! Form::text('NUMERO', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMPLEMENTO', __('models/alunos.fields.COMPLEMENTO').':') !!}
    {!! Form::text('COMPLEMENTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Ponto Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PONTO_REFERENCIA', __('models/alunos.fields.PONTO_REFERENCIA').':') !!}
    {!! Form::text('PONTO_REFERENCIA', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COD_MUNICIPIO', __('models/alunos.fields.COD_MUNICIPIO').':') !!}
    {!! Form::number('COD_MUNICIPIO', null, ['class' => 'form-control']) !!}
</div>

<!-- Qualif Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('QUALIF_SN', __('models/alunos.fields.QUALIF_SN').':') !!}
    {!! Form::number('QUALIF_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_Operacao', __('models/alunos.fields.Tipo_Operacao').':') !!}
    {!! Form::number('Tipo_Operacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Taxa', __('models/alunos.fields.Taxa').':') !!}
    {!! Form::number('Taxa', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Casamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATA_CASAMENTO', __('models/alunos.fields.DATA_CASAMENTO').':') !!}
    {!! Form::date('DATA_CASAMENTO', null, ['class' => 'form-control','id'=>'DATA_CASAMENTO']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DATA_CASAMENTO').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Est Civ Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Est_Civ', __('models/alunos.fields.Est_Civ').':') !!}
    {!! Form::text('Est_Civ', null, ['class' => 'form-control']) !!}
</div>

<!-- Orig Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Orig_Cli', __('models/alunos.fields.Orig_Cli').':') !!}
    {!! Form::text('Orig_Cli', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Passap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUM_PASSAP', __('models/alunos.fields.NUM_PASSAP').':') !!}
    {!! Form::text('NUM_PASSAP', null, ['class' => 'form-control']) !!}
</div>

<!-- Passap Valid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PASSAP_VALID', __('models/alunos.fields.PASSAP_VALID').':') !!}
    {!! Form::date('PASSAP_VALID', null, ['class' => 'form-control','id'=>'PASSAP_VALID']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#PASSAP_VALID').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.alunos.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
