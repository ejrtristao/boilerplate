<!-- Chv Ung Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHV_UNG', __('models/vendas.fields.CHV_UNG').':') !!}
    {!! Form::number('CHV_UNG', null, ['class' => 'form-control']) !!}
</div>

<!-- Chv Pfj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHV_PFJ', __('models/vendas.fields.CHV_PFJ').':') !!}
    {!! Form::number('CHV_PFJ', null, ['class' => 'form-control']) !!}
</div>

<!-- Doc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DOC', __('models/vendas.fields.DOC').':') !!}
    {!! Form::text('DOC', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUM_PEDIDO', __('models/vendas.fields.NUM_PEDIDO').':') !!}
    {!! Form::text('NUM_PEDIDO', null, ['class' => 'form-control']) !!}
</div>

<!-- Dataemissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATAEMISSAO', __('models/vendas.fields.DATAEMISSAO').':') !!}
    {!! Form::date('DATAEMISSAO', null, ['class' => 'form-control','id'=>'DATAEMISSAO']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DATAEMISSAO').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Dataentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATAENTREGA', __('models/vendas.fields.DATAENTREGA').':') !!}
    {!! Form::date('DATAENTREGA', null, ['class' => 'form-control','id'=>'DATAENTREGA']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DATAENTREGA').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Chv Vnddr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHV_VNDDR', __('models/vendas.fields.CHV_VNDDR').':') !!}
    {!! Form::number('CHV_VNDDR', null, ['class' => 'form-control']) !!}
</div>

<!-- Pct Comissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCT_COMISSAO', __('models/vendas.fields.PCT_COMISSAO').':') !!}
    {!! Form::number('PCT_COMISSAO', null, ['class' => 'form-control']) !!}
</div>

<!-- Forma Recto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FORMA_RECTO', __('models/vendas.fields.FORMA_RECTO').':') !!}
    {!! Form::number('FORMA_RECTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STATUS', __('models/vendas.fields.STATUS').':') !!}
    {!! Form::number('STATUS', null, ['class' => 'form-control']) !!}
</div>

<!-- Chv Transp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CHV_TRANSP', __('models/vendas.fields.CHV_TRANSP').':') !!}
    {!! Form::number('CHV_TRANSP', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipofrt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TIPOFRT', __('models/vendas.fields.TIPOFRT').':') !!}
    {!! Form::text('TIPOFRT', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlrfrt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VLRFRT', __('models/vendas.fields.VLRFRT').':') !!}
    {!! Form::number('VLRFRT', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SUBTOTAL', __('models/vendas.fields.SUBTOTAL').':') !!}
    {!! Form::number('SUBTOTAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Pctdesct Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCTDESCT', __('models/vendas.fields.PCTDESCT').':') !!}
    {!! Form::number('PCTDESCT', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlrdesct Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VLRDESCT', __('models/vendas.fields.VLRDESCT').':') !!}
    {!! Form::number('VLRDESCT', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlrtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VLRTOTAL', __('models/vendas.fields.VLRTOTAL').':') !!}
    {!! Form::number('VLRTOTAL', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Snh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_SNH', __('models/vendas.fields.ID_SNH').':') !!}
    {!! Form::number('ID_SNH', null, ['class' => 'form-control']) !!}
</div>

<!-- Dat Cad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DAT_CAD', __('models/vendas.fields.DAT_CAD').':') !!}
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

<!-- Dat Grv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DAT_GRV', __('models/vendas.fields.DAT_GRV').':') !!}
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

<!-- Upd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UPD', __('models/vendas.fields.UPD').':') !!}
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

<!-- Contato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CONTATO', __('models/vendas.fields.CONTATO').':') !!}
    {!! Form::number('CONTATO', null, ['class' => 'form-control']) !!}
</div>

<!-- Obs Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('OBS', __('models/vendas.fields.OBS').':') !!}
    {!! Form::textarea('OBS', null, ['class' => 'form-control']) !!}
</div>

<!-- Fin Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FIN_SN', __('models/vendas.fields.FIN_SN').':') !!}
    {!! Form::number('FIN_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Comis Pgto Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMIS_PGTO_SN', __('models/vendas.fields.COMIS_PGTO_SN').':') !!}
    {!! Form::number('COMIS_PGTO_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Selec Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SELEC_SN', __('models/vendas.fields.SELEC_SN').':') !!}
    {!! Form::number('SELEC_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Fidelidade Pontos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FIDELIDADE_PONTOS', __('models/vendas.fields.FIDELIDADE_PONTOS').':') !!}
    {!! Form::number('FIDELIDADE_PONTOS', null, ['class' => 'form-control']) !!}
</div>

<!-- Fidelidade Vlr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FIDELIDADE_VLR', __('models/vendas.fields.FIDELIDADE_VLR').':') !!}
    {!! Form::number('FIDELIDADE_VLR', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlr Ccpfj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VLR_CCPFJ', __('models/vendas.fields.VLR_CCPFJ').':') !!}
    {!! Form::number('VLR_CCPFJ', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlrdesctsub Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VLRDESCTSUB', __('models/vendas.fields.VLRDESCTSUB').':') !!}
    {!! Form::number('VLRDESCTSUB', null, ['class' => 'form-control']) !!}
</div>

<!-- Pctdesctsub Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PCTDESCTSUB', __('models/vendas.fields.PCTDESCTSUB').':') !!}
    {!! Form::number('PCTDESCTSUB', null, ['class' => 'form-control']) !!}
</div>

<!-- Dinheiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Dinheiro', __('models/vendas.fields.Dinheiro').':') !!}
    {!! Form::number('Dinheiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Parcelado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Parcelado', __('models/vendas.fields.Parcelado').':') !!}
    {!! Form::number('Parcelado', null, ['class' => 'form-control']) !!}
</div>

<!-- Cheque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cheque', __('models/vendas.fields.cheque').':') !!}
    {!! Form::number('cheque', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartao', __('models/vendas.fields.cartao').':') !!}
    {!! Form::number('cartao', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacorrente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ContaCorrente', __('models/vendas.fields.ContaCorrente').':') !!}
    {!! Form::number('ContaCorrente', null, ['class' => 'form-control']) !!}
</div>

<!-- Troco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Troco', __('models/vendas.fields.Troco').':') !!}
    {!! Form::number('Troco', null, ['class' => 'form-control']) !!}
</div>

<!-- C Cor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('C_COR', __('models/vendas.fields.C_COR').':') !!}
    {!! Form::number('C_COR', null, ['class' => 'form-control']) !!}
</div>

<!-- Din Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Din_SN', __('models/vendas.fields.Din_SN').':') !!}
    {!! Form::text('Din_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Chq Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Chq_SN', __('models/vendas.fields.Chq_SN').':') !!}
    {!! Form::text('Chq_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartao Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Cartao_SN', __('models/vendas.fields.Cartao_SN').':') !!}
    {!! Form::text('Cartao_SN', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.vendas.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
